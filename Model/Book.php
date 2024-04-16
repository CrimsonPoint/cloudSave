<?
class Module_Bookshop_Model_Book extends ModuleModel
{
    // Имя таблицы в БД
    // При установке модуля будет создана таблица,
    // описанная в .../app/application/classes/Module/Basic/config.json
    // К таблице будет добавлен префикс по названию модуля ("basic_")
    protected $_table_name = 'bookshop_books';

    // Поле, которое является первичным ключом в таблице basic_books
    //protected $_primary_key = 'id';

    // Описание полей таблицы basic_books
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
        'title' => [
            "type" => "title",
            "is_nullable" => false,
        ],
        'about' => [
            "type" => "string",
            // Разрешим не указывать аннотацию,
            // в этом случае поле будет заполнено NULL
            "is_nullable" => true,
        ],
        // Поле 'price' с плавающей точкой, поэтому тип тоже
        // должен быть с плавающей точкой, например,
        // float или double (в php это одно и тоже),
        // а можно указать тип из файла .../app/application/classes/Field.php
        // Будем указывать тип такой же, как в config.json
        'price' => [
            "type" => "price",
            "is_nullable" => false,
        ],
        'author_id' => [
            "type" => "int",
            "is_nullable" => false,
        ],
    ];

    // Тип связи Многие-к-одному
    protected $_belongs_to = [
        'author' => [
            'module' => 'bookshop',
            'model' => 'author',
            'foreign_key' => 'author_id',
        ]
    ];

    public function rules(): array
    {
        return [
            // ключ 'first_name' - это свойство модели Module_Basic_Model_Author
            'first_name' => [
                ['not_empty'], // Значение не может быть пустым
            ],
            // ключ 'last_name' - это свойство модели Module_Basic_Model_Author
            'last_name' => [
                ['not_empty'], // Значение не может быть пустым
            ],
        ];
    }
}