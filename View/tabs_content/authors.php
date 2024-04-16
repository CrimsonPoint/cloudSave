<div class="row">
    <div class="col-md-12">
        <div class="h4">Контент закладки "Авторы"</div>
    </div>
</div>

<?

$model_author = ORM::factory([
    'module' => 'bookshop',
    'model' => 'author',
    'id' => 2,
]);



$author = $model_author;

Help::debug($author->second_name);

$columns_for_list2 = [
    [
        // Компонент List2 выведет поле `last_name`
        // из таблица `bi_<ID-аккаунта>`.`basic_authors`
        'field' => 'last_name',
        // Название колонки
        'title' => ___('LAST_NAME'),
        // Ширина колонки в пикселях
        'width' => 400,
        // По колонке можно сортировать
        'sortable' => true,
    ],
    [
        'field' => 'first_name',
        'title' => ___('FIRST_NAME'),
        'width' => 400,
        'sortable' => true,
    ],
    [
        'field' => 'second_name',
        'title' => ___('SECOND_NAME'),
        'width' => 400,
        'sortable' => true,
    ],
];

// Метод Module::url может создавать URL только на представления, расположенные
// в папке View модуля (например, .../app/application/classes/Module/Basic/View)
// Если представление находится в подпапке,
// (например, .../app/application/classes/Module/Basic/View/edit),
// то создать URL через метод Module::url уже не получится
$author_edit_url = Module::controller_url('bookshop', 'Author', 'showEdit');
?>

<!--Вывод списка авторов при помощи компонента List2-->
<?=
Component::factory('List2', [
    // Количество элементов на странице
    'items_count' => 20,
    // Уникальный код, который необходим для сохранения состояния списка
    // в сессии. Всегда выбирайте уникальное значение!!!
    'code' => 'bookshop.authors',
    // Подгружаемая модель
    'target' => [
        'module' => 'bookshop',
        'model' => 'author',
    ],
    // Поля, выводимые в компоненте List2
    'columns' => $columns_for_list2,
    // Элементы можно удалять
    'can_delete' => true,
    // Элементы можно редактировать
    'can_edit' => true,
    // Отображать элемент в виде ссылки
    'row_link' => true,
    // Параметры ссылки
    'row_link_parametrs' => [
        // При клике на такую ссылку страница открывается в боковой панели
        'type' => 'sidepanel',
        // Ссылка на представление, которое откроется в боковой панели
        'url' => $author_edit_url,
        'attributes' => [
            // размер боковой панели (может быть md, large, lg)
            'data-toggle-width' => 'md',
        ],
    ],
    // Компонент List2 может создать кнопку
    // во "Включаемой области" system.pagebar.line1,
    // но при использовании компонента HeaderTabs
    // кнопка будет создаваться некорректно
//    'create_button' => [
//        'type' => 'sidepanel',
//        'url' => $author_edit_url,
//        'button_text' => ___("TASK_ADD"),
//        'attributes' => [
//            'data-toggle-width' => 'md',
//        ],
//    ],
])->render();
?>

