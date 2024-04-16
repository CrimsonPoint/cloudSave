<?php

class Module_Bookshop_Controller_Author extends ModuleController {
    public function action_showEdit(){
        Layout::instance()->set_inner_title("test");

        $author_id = $this->request->param('inner_id');
        if($author_id)
        {
            $author_model = ORM::factory([
                'module' => 'bookshop',
                'model' => 'author',
                'id' => $author_id,
            ]);
            $page_title = ___('EDIT');
        }
        else
        {
            $author_model = ORM::factory([
                'module' => 'bookshop',
                'model' => 'author',
            ]);
            $page_title = ___('TASK_ADD');
        }
        ?>

        <!--Создаем форму создания/редактирования автора-->
        <!--с помощью компонента Form2-->
        <? 
        return Component::factory('Form2', [
            // Подгружаемая модель
            'target'  => [
                'module'   => 'bookshop',
                'model'    => 'author',
                'model_id' => $author_id,
            ],
            // html код с заполненным контентом для компонента Form2
            'content' => View::factory('forms/author', [
                'author_model' => $author_model,
            ])->render(),
        ]);

//        return View::factory([
//            'module' => 'Bookshop',
//            'view' => 'lesson_author_edit'
//        ]);
    }
}