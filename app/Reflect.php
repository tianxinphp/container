<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/4
 * Time: 15:28
 */

namespace app;

use app\MyReflectionMerhod;
class Reflect
{
    private $className;

    private $methodName;

    public function __construct($className,$methodName){
        $this->className = $className;
        $this->methodName = $methodName;
    }


    public function make(){

    }


    public function bindParamsToMethod(){
        $params = [];
        $method  = new MyReflectionMerhod($this->className,$this->methodName);

        foreach ($method->getParameters() as $param) {
            $params[] =  [$param->name,$param->getClass()->name];
        }

        return [$this->className=> $params];
    }
}