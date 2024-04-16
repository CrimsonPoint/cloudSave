<div class="row">
    <div class="col-md-12">
        <div class="h4">Контент закладки "Авторы и книги"</div>
    </div>
</div>

<!--Пример вывода данных из моделей авторов и книг-->
<!--Используйте его для выполнения задания-->
<!--В дальнейшем он нам не понадобиться-->
<?
// Получить модель автора с id = 1
$model_author = ORM::factory([
    'module' => 'bookshop',
    'model' => 'author',
    'id' => 1,
]);

// Получить модель книги с id = 4
$model_book = ORM::factory([
    'module' => 'bookshop',
    'model' => 'book',
    'id' => 4,
]);

// Получить модель автора через модель книги
$author = $model_book->author;
// Вывести фамилию автора
echo '<pre>';
print_r($author->last_name);
echo '</pre>';

// Получить массив моделей книг через модель автора
// В данном случае мы не можем получить
// модель книг через $model_author->books,
// т.к. модели книг не подгружены
// делается это вызовом метода find_all().
$books = $model_author->books->find_all();
// Вывести названия книг
foreach($books as $book)
{
    Help::debug($book->title);
    echo '<pre>';
    print_r($book->title);
    echo '</pre>';
}
?>