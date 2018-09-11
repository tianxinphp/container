<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/4
 * Time: 15:28
 */

namespace app;

use app\MyReflectionMerhod;
use app\MyReflectionClass;
class Reflect
{
    private $className;

    private $methodName;

    public function __construct($className,$methodName){
        $this->className = $className;
        $this->methodName = $methodName;
    }


    /**
     *实现
     * @param $bind
     * @param $methodBindParams
     * @return mixed
     */
    public function make($bind,$methodBindParams){
        $args = [];
        foreach ($methodBindParams as $className => $params) {
            foreach ($params as $param) {
                list($paramName,$paramType) = $param;

                $paramName = new $bind[$paramType]();

                array_push($args, $paramName);
            }
        }
        $reflectionClass = new MyReflectionClass($this->className);
        return $reflectionClass->newInstanceArgs($args);
    }


    /**
     * 取出构造函数中所有注入参数的类
     * @return array
     */
    public function bindParamsToMethod(){
        $params = [];
        $method  = new MyReflectionMerhod($this->className,$this->methodName);

        foreach ($method->getParameters() as $param) {
            $params[] =  [$param->name,$param->getClass()->name];
        }

        return [$this->className=> $params];
    }
}