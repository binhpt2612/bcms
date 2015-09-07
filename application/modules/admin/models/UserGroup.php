<?php

class Admin_Model_UserGroup extends Zend_Db_Table {

    protected $_name = 'user_group';
    protected $_key = 'id';

    public function listItems($arrayParams = NULL, $options = NULL) {
        $db = Zend_Registry::get('connectDb');
        //$db = Zend_Db::factory($db, $config);
        if ($options['task'] == 'admin-list') {
            $select = $db->select()
                    ->from('user_group AS g', array('id', 'group_name', 'status', 'group_acp', 'order'))
                    ->joinLeft('users AS u', 'g.id = u.group_id', 'COUNT(u.id) AS members')
                    ->group('g.id');
            $result = $db->fetchAll($select);
        }
        return $result;
    }

    public function saveItem($arrayParams = NULL, $options = NULL) {

        if ($options['task'] == 'admin-add') {
            $row = $this->fetchNew();

            $row->group_name = $arrayParams['group_name'];
            $row->avatar = $arrayParams['avatar'];
            $row->ranking = $arrayParams['ranking'];
            $row->group_acp = $arrayParams['group_acp'];
            $row->group_default = $arrayParams['group_default'];
            $row->created = date("Y-m-d");
            $row->create_by = 1;
            $row->status = $arrayParams['status'];
            $row->order = $arrayParams['order'];
            $row->save();
        }

        if ($options['task'] == 'admin-edit') {
            $where = ' id = ' . $arrayParams['id'];
            $row = $this->fetchRow($where);

            $row->group_name = $arrayParams['group_name'];
            $row->avatar = $arrayParams['avatar'];
            $row->ranking = $arrayParams['ranking'];
            $row->group_acp = $arrayParams['group_acp'];
            $row->group_default = $arrayParams['group_default'];
            $row->modifiled = date("Y-m-d");
            $row->modifiled_by = 1;
            $row->status = $arrayParams['status'];
            $row->order = $arrayParams['order'];

            $row->save();
        }
    }

    public function getItem($arrayParams = NULL, $options = NULL) {

        if ($options['task'] == 'admin-info') {
            $where = ' id = ' . $arrayParams['id'];
            $result = $this->fetchRow($where)->toArray();
        }
        if ($options['task'] == 'admin-edit') {
            $where = ' id = ' . $arrayParams['id'];
            $result = $this->fetchRow($where)->toArray();
        }
        return $result;
    }

    public function deleteItem($arrayParams = NULL, $options = NULL) {
        if ($options['task'] == 'admin-delete') {
            $where = ' id = ' . $arrayParams['id'];
            $this->delete($where);
        }
    }

}
