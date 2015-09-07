<?php

class Training_SelectController extends Zendvn_Controller_Action {

    public function init() {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }

    public function indexAction() {
        $db = Zend_Registry::get('connectDb');
        $select = $db->select();
        echo '<pre>';
        print_r($select);
        echo '</pre>';

    }

}
