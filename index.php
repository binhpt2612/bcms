<?php

include_once 'define.php';

require_once 'Zend/Application.php';

$app = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');

$app->bootstrap()->run();
