<?php

define('DS',DIRECTORY_SEPARATOR);
define('APP_DIR',dirname(__DIR__).DS);

require APP_DIR.'vendor'.DS.'autoload.php';


$app = new Silex\Application();

$app->get('/',function(){
   
    echo 1;
    
    return false;
    
});

$app->run();