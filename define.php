<?php

defined("APPLICATION_PATH")
        || define("APPLICATION_PATH", 
                realpath(dirname(__FILE__) . "/application"));

defined("APPLICATION_ENV") 
        || define("APPLICATION_ENV", 
                (getenv("APPLICATION_ENV") ? getenv("APPLICATION_ENV") 
                                           : "developer"));

set_include_path(implode(PATH_SEPARATOR, array(
    dirname(__FILE__).'/library',
    get_include_path()
)));

define("PUBLIC_PATH", 
        realpath(dirname(__FILE__) . '/public'));

define("TEMPLATE_PATH", 
        realpath(PUBLIC_PATH . '/templates')); 

define("TEMPLATE_URL", "/public/templates");