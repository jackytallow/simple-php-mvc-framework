<?php
/**
 * 主控制器
 */
class homeController extends Controller {
        
        public function __construct() {
                parent::__construct();
        }

        public function index() {
                $object = $this->load('download',FALSE);
                var_dump($object);
                exit();
//
//                $object->set_byfile('http://localhost/framework/error/2011-12-28_SQL.txt');//服务器文件名,包括路径
//                $object->filename = "2011-12-28_SQL.txt";//下载另存为的文件名
//                $object->download();
        }
}

