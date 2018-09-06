<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/3
 * Time: 16:16
 */

namespace app;

use app\Reflect;
class Container
{
    private $binds=[];//容器储存地

    /**
     * 绑定
     * @param $contactName
     * @param $concrete
     */
    public function bind($contactName,$concrete)
    {
        $this->binds[$contactName]=$concrete;
    }


    public function methodBindParams($className)
    {
        $reflect = new reflect($className,'__construct');
        return $reflect->bindParamsToMethod();
    }

    /***
     *实例化类，自动创建依赖
     * @param $className
     */
    public function make($className)
    {
        $methodBindParams = $this->methodBindParams($className);
        $reflect = new reflect($className,'__construct');
        return $reflect->make($this->binds,$methodBindParams);
    }




}