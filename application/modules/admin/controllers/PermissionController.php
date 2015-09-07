<?php

class Admin_PermissionController extends Zendvn_Controller_Action {

    public function init() {
        $template_path = TEMPLATE_PATH . '/admin/lte';
        $this->loadTemplate($template_path, 'template.ini', 'template');
    }

    public function indexAction() {
        $this->view->title = __METHOD__;
    }

}
