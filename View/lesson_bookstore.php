<?
/**
 * @var $module Module_Bookshop
 */

$page_title = "Книжный магазин";

$tabs = [
    [
        // code должен совпадать с названием представления,
        // которое будет отображать контент закладки
        'code'  => 'authors_and_books',
        // Название закладки
        'title' => 'Авторы и книги',
    ],
    [
        'code'  => 'authors',
        'title' => 'Авторы',
    ],
    [
        'code'  => 'books',
        'title' => 'Книги',
    ],
];
// Параметры для компонента HeaderTabs
$params = [
    // Название модуля, в котором искать представления
    'module' => 'bookshop',
    // Название папки, в которой хранятся представления с контентом закладок
    // Это параметр по умолчанию, его можно не указывать
    'view_folder' => 'tabs_content/',
    // Закладки для компонента HeaderTabs
    'tabs' => $tabs,
];
// Компонент возвращает массив с двумя ключами  tabs и tab_contents.
// В tabs содержится отрендеренный html код линии закладок,
// в tab_contents содержится html код с заполненным контентом для текущей закладки.
$headerTabs = Component::factory('HeaderTabs', $params)->render();

Component::factory('Header', [
    'tabs' => $headerTabs,
]);

// Добавляем закладки во "Включаемую область" system.pagebar.line2
Layout::instance()->add_area('system.pagebar.line2', $headerTabs['tabs']);

Layout::instance()->add_area('system.pagebar.line1', View::factory([
    'module' => 'bookshop',
    'view'   => 'include/lesson_bookstore_button'
], [
    'url_to_add_author' => Module::url('bookshop', 'lesson_author_edit'),
    'url_to_add_book' => Module::url('bookshop', 'lesson_book_edit'),
])->render());
?>

<!--Выводим контент закладки-->
<?= $headerTabs['tab_contents']; ?>


<div class="row">
    <div class="col-md-6">
    </div>
</div>

