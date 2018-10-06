<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2018/9/29
 * Time: 22:28
 */

//系统配置文件
$CONFIG['system']['db'] = array(

    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_password' => '12345',
    'db_database' => 'app',
    'db_table_prefix' => 'app_',
    'db_charset' => 'urf8',
    'db_conn' => "",  //数据库连接标识，conn为长久链接，默认为即时链接
);


//自定义类库配置
$CONFIG['system']['lib'] = array(

    'prefix' => 'my' ,//自定义类库的文件前缀
);

$CONFIG['system']['route'] = array(

    'default_controller'  => 'home', //系统默认
    'default_action' => 'index', //系统默认入口文件
    'url_type' => 1 /*1 定义URL形式为1为普通模式
                  */
);

$CONFIG['system']['cache'] = array(


    'cache_dir' => 'cache', //缓存路径，相对于根目录
    'cache_prefix' => 'cache_', //缓存文件名前缀
    'cache_time' => 1800, //缓存时间默认1800秒
    'cache_mode' => 2, //mode1为serialize
);

