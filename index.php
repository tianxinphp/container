<?php

require __DIR__.'/vendor/autoload.php';


use app\Controller;
use app\Model;
use app\searchModel\SearchModel;
use app\MyReflectionMerhod;

$reflect=new MyReflectionMerhod(Controller::class,'__construct');
print_r($reflect->getParameters());






//call_user_func([new Controller(new SearchModel()),'getName']);



