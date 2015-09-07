<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initDb() {
        $optionResources = $this->getOption('resources');
        $dbOptions = $optionResources['db'];
        $dbOptions['params']['username'] = "binhpham";
        $dbOptions['params']['password'] = "123123";
        $dbOptions['params']['dbname'] = "shopping";
        $db = Zend_Db::factory($dbOptions['adapter'], $dbOptions['params']);
        $db->setFetchMode(Zend_Db::FETCH_ASSOC);
        $db->query("SET NAMES 'UTF8'");
        $db->query("SET CHARACTER SET 'UTF8'");
        Zend_Registry::set("connectDb", $db);
        Zend_Db_Table::setDefaultAdapter($db);
        
        return $db;
    }

}
