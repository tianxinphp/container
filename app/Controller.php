<?php
namespace app;

//use app\Model;

use app\myInterface\ModelInterFace;

class Controller{
    private  static $model;


    public function __construct(ModelInterFace $model)
    {
        self::$model=$model;
    }

    public function getName(){
        echo self::$model->name;
    }

}