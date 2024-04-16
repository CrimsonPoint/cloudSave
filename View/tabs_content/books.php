<div class="row">
    <div class="col-md-12">
        <div class="h4">Контент закладки "Книги"</div>
    </div>
</div>


<?
//Не используя id в ORM::factory(), вывести фамилии всех трех авторов.

$model_author = ORM::factory([
    'module' => 'bookshop',
    'model' => 'author'
]);

$model_book = ORM::factory([
    'module' => 'bookshop',
    'model' => 'book'
]);

$authors = $model_author->find_all()->as_array('id');
// [object_author, object_author]
//$authors = $model_author->find_all()->as_array('id');
// ['1' => object_author, 2 => object]

$books = $model_book->find_all();

$author_books = [];

foreach ($books as $book) {
    $author_books[$book->author_id][] = $book->title;
}

//Help::debug($author_books);

foreach ($author_books as $el => $val) {
    echo "<pre>";
    print_r($authors[$el]->second_name . ' ');
    foreach ($val as $k) {
        echo $k . " | ";
    }
    echo "</pre>";
}


//foreach ($authors as $el) {
//    echo "<pre>";
//    print_r($el->second_name);
//    echo "</pre>";
//}

echo ("<hr>");

//foreach ($books as $book) {
//    $authors[$book->author_id];
//    if($book->author_id == $author->id) {
//        echo ($book->title . " | ");
//    }
//}


//Не используя id в ORM::factory() и модель книг, вывести фамилии всех трех авторов и их книг.

//foreach ($authors as $author) {
//    echo "<pre>";
//    // print_r($author->second_name . " - " . $model_book->where('author_id', '=', $author->id)->find());
//    print_r($author->second_name . " - " );
//    foreach ($books as $book) {
//        if($book->author_id == $author->id) {
//            echo ($book->title . " | ");
//        }
//    }
//
//    echo "</pre>";
//}



?>