<?php
class Module_Bookshop_Controller_Book extends ModuleController {
	public function action_default(){
        Layout::instance()->set_inner_title("test");
        return View::factory([
            'module' => 'Bookshop',
            'view' => 'index'
        ], [
            'param1' => 'test'
        ]);
    }
}
?>