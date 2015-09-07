<?php

class IndexController extends Zendvn_Controller_Action {

    public function init() {
        $template_path = TEMPLATE_PATH . "/admin/lte";
        $this->loadTemplate($template_path, 'template.ini', 'template');
    }

    public function indexAction() {
        $this->view->title = 'Wellcome To B-Cms : Have a nice day';
        $this->view->headTitle($this->view->title, TRUE);
    }

}
