<?
class Module_Bookshop_Model_Author extends ModuleModel
{
    // Имя таблицы в БД
    // При установке модуля будет создана таблица,
    // описанная в .../app/application/classes/Module/Basic/config.json
    // К таблице будет добавлен префикс по названию модуля ("basic_")
    protected $_table_name = 'bookshop_authors';

    // Поле, которое является первичным ключом в таблице basic_authors
    //protected $_primary_key = 'id';

    // Описание полей таблицы basic_authors
    protected $_table_columns = [
        'id' => [
            "type" => "int",
            "is_nullable" => false,
        ],
        // При описании полей модели
        // можно использовать тип данных php
        // (для данного поля это string),
        // а можно указать тип из файла .../app/application/classes/Field.php
        // Будем указывать тип такой же, как в config.json
        'first_name' => [
            "type" => "smalltext",
            "is_nullable" => false,
        ],
        'second_name' => [
            "type" => "smalltext",
            // Отчество может быть не у всех авторов,
            // поэтому его можно заполнять NULL
            "is_nullable" => true,
        ],
        'last_name' => [
            "type" => "smalltext",
            "is_nullable" => false,
        ],
    ];

    // Тип связи Один-ко-многим
    protected $_has_many = [
        'books' => [
            'module'      => 'bookshop',
            'model'       => 'book',
            'foreign_key' => 'author_id',
        ],
    ];
}