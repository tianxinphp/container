<?php

require __DIR__.'/vendor/autoload.php';

use app\Container;
use app\searchModel\SearchModel;
use app\myInterface\ModelInterFace;
use app\Controller;

$container=new Container();

$container->bind(ModelInterFace::class,SearchModel::class);

$controller=$container->make(Controller::class);

$controller->getName();

//call_user_func([new Controller(new SearchModel()),'getName']);



