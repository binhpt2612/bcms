<?php

class Admin_GroupController extends Zendvn_Controller_Action {

    // Mang tham so nhan duoc khi moi action chay
    protected $_arrayParams;
    // Duong dan cua controller
    protected $_currentController;
    // Duong dan cua action chinh
    protected $_actionMain;

    public function init() {

        $this->_arrayParams = $this->_request->getParams();

        $this->_currentController = '/' . $this->_arrayParams['module'] .
                '/' . $this->_arrayParams['controller'];

        $this->_actionMain = '/' . $this->_arrayParams['module'] .
                '/' . $this->_arrayParams['controller'] .
                '/index/';

        $this->view->arrayParams = $this->_arrayParams;
        $this->view->currentController = $this->_currentController;
        $this->view->actionMain = $this->_actionMain;

        $template_path = TEMPLATE_PATH . "/admin/lte";
        $this->loadTemplate($template_path, 'template.ini', 'template');
    }

    public function indexAction() {
        $this->view->title = 'Member :: Group manager :: List';
        $this->view->headTitle($this->view->title, TRUE);
        $tblGroup = new Admin_Model_UserGroup();
        $this->view->Items = $tblGroup->listItems(NULL, array('task' => 'admin-list'));
    }

    public function addAction() {
        $this->view->title = 'Member :: Group manager :: Add News';
        $this->view->headTitle($this->view->title, TRUE);
        if ($this->_request->isPost()) {
            $tblgroup = new Admin_Model_UserGroup();
            $tblgroup->saveItem($this->_arrayParams, array('task' => 'admin-add'));
            $this->redirect($this->_actionMain);
        }
    }

    public function infoAction() {
        $this->view->title = 'Member :: Group manager :: Infomation';
        $this->view->headTitle($this->view->title, TRUE);
        $tblgroup = new Admin_Model_UserGroup();
        $this->view->Item = $tblgroup->getItem($this->_arrayParams, array('task' => 'admin-info'));
    }

    public function editAction() {
        $this->view->title = 'Member :: Group manager :: Edit';
        $this->view->headTitle($this->view->title, TRUE);

        $tblgroup = new Admin_Model_UserGroup();
        $this->view->Item = $tblgroup->getItem($this->_arrayParams, array('task' => 'admin-edit'));

        if ($this->_request->isPost()) {
            $tblgroup = new Admin_Model_UserGroup();
            $tblgroup->saveItem($this->_arrayParams, array('task' => 'admin-edit'));
            $this->redirect($this->_actionMain);
        }
    }

    public function deleteAction() {
        $this->view->title = 'Member :: Group manager :: Delete';
        $this->view->headTitle($this->view->title, TRUE);
        if ($this->_request->isPost()) {
            $tblgroup = new Admin_Model_UserGroup();
            $tblgroup->deleteItem($this->_arrayParams, array('task' => 'admin-delete'));
            $this->redirect($this->_actionMain);
        }
    }

}
