<?php

class Training_DbController extends Zendvn_Controller_Action {

    public function init() {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
    }

    public function indexAction() {
        echo __METHOD__;
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        echo '<br>' . $mode = Zend_Db::FETCH_OBJ;
        $db->setFetchMode($mode);
        $sql = "SELECT * FROM user_group WHERE group_acp = ? AND group_default = ?";
        $blind = array(0, 1);
        $row = $db->fetchAll($sql, $blind);
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }

    public function index3Action() {
        echo __METHOD__;
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        $mode = Zend_Db::FETCH_OBJ;
        $db->setFetchMode($mode);
        $sql = "SELECT g.id , g.group_name FROM user_group AS g WHERE group_acp = ? AND group_default = ?";
        $blind = array(1, 1);
        $row = $db->fetchPairs($sql, $blind);
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }

    public function index4Action() {
        echo __METHOD__;
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        $mode = Zend_Db::FETCH_OBJ;
        $db->setFetchMode($mode);
        $sql = "SELECT g.id , g.group_name FROM user_group AS g WHERE group_acp = ? AND group_default = ? ORDER BY g.group_name DESC";
        $blind = array(1, 1);
        $row = $db->fetchRow($sql, $blind);
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }

    public function index5Action() {
        echo __METHOD__;
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        $mode = Zend_Db::FETCH_OBJ;
        $db->setFetchMode($mode);
        $sql = "SELECT COUNT(g.id) AS nums  FROM user_group AS g WHERE group_acp = ? AND group_default = ? ORDER BY g.group_name ASC";
        $blind = array(1, 1);
        $row = $db->fetchOne($sql, $blind);
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }

    public function insertAction() {
        $db = Zend_Registry::get('connectDb');
        $db->setFetchMode(Zend_Db::FETCH_ASSOC);
        $table = 'user_group';

        $data = array(
            'group_name' => 'BINH123',
            'avatar' => 'binh123.png',
            'ranking' => 'rbinh123.png',
            'group_acp' => 0,
            'group_default' => 0,
            'status' => 1,
            'order' => 10
        );
        $db->insert($table, $data);
    }

    // lastInserID lấy giá trị cuối cùng được insert
    public function lastIdAction() {
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        $mode = Zend_Db::FETCH_OBJ;
        $db->setFetchMode($mode);

        $tableName = 'user_group';
        $primaryKey = 'id';

        $data = array(
            'group_name' => 'LeChauQuynh',
            'avatar' => 'binh123.png',
            'ranking' => 'rbinh123.png',
            'group_acp' => 0,
            'group_default' => 0,
            'status' => 1,
            'order' => 10
        );
        $db->insert($tableName, $data);
        echo $db->lastInsertId();
    }

    public function updateAction() {
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        $mode = Zend_Db::FETCH_OBJ;
        $db->setFetchMode($mode);

        $tableName = 'user_group';
        $data = array(
            'group_name' => 'LeChauQuynh',
            'avatar' => 'chauquynh.png',
            'ranking' => 'rchauquynh.png',
            'group_acp' => 1,
            'group_default' => 1,
            'status' => 1,
            'order' => 1
        );
        $where = "id = 18";

        $db->update($tableName, $data, $where);
        echo $db->lastInsertId();
    }

    public function selectAction() {
        echo '<br><h3>' . __METHOD__ . '<h3>';
        echo '<pre>';
        print_r($this->_request->getParams());
        echo '</pre>';
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($adapter,$config);

        echo '<br>' . $id = $db->quote($this->_request->getParam('groupID'), Zend_Db::INT_TYPE );
        $sql = 'SELECT * FROM user_group WHERE id = ?';
        $bind = array($id);
        $rows = $db->fetchAll($sql, $bind);
        echo '<pre>';
        print_r($rows);
        echo '</pre>';
    }

    public function select2Action() {
        echo '<br><h3>' . __METHOD__ . '<h3>';
        echo '<pre>';
        print_r($this->_request->getParams());
        echo '</pre>';
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($adapter,$config);

        echo '<br>' . $group_name = $db->quote($this->_request->getParam('gname'));

        $sql = 'SELECT * FROM user_group WHERE group_name = ' . $group_name;
        $bind = null;
        $rows = $db->fetchAll($sql, $bind);
        echo '<pre>';
        print_r($rows);
        echo '</pre>';
    }

}
