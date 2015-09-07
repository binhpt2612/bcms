<?php

class Admin_UsersController extends Zendvn_Controller_Action {

    public function init() {
        $templatePath = TEMPLATE_PATH . '/admin/lte';
        $this->loadTemplate($templatePath, 'template.ini', 'template');
    }

    public function indexAction() {
        echo __METHOD__;
    }

}
