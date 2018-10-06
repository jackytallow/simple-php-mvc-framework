<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2018/10/6
 * Time: 16:52
 */
class Controller{

    protected  $_controller;
    protected  $_action;
    protected  $_view;

    //构造函数，初始化属性
    public function _construct($controller,$action){

        $this->_controller  = $controller;
        $this->_action = $action;
        $this->_view = new View($controller,$action);
    }

    //构造数据库
    public function _database($user,$password){
        $this->_view->database($user,$password);
    }

    //分配变量
    public function assign($name,$value){
        $this->_view->assgin($name,$value);
    }

    //渲染视图
    public function render(){

        $this->_view->render();
    }
}