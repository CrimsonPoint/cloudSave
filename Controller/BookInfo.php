<?php
class Module_Bookshop_Controller_BookInfo extends ModuleController {
    public function action_default(){
        Layout::instance()->set_inner_title("test");
        return View::factory([
            'module' => 'Bookshop',
            'view' => 'lesson_bookstore'
        ]);
    }
}
?>