<?php
/**
 * Created by PhpStorm.
 * User: jaafar
 * Date: 5/3/15
 * Time: 17:33
 */
return array(
    //调试配置
    'SHOW_PAGE_TRACE'=>true,
    'SITE_STATUS'    =>'online',

       'DB_SERVER'=>array(
           'db_type' =>'mysqli',
           'db_user' =>'root',
           'db_pwd'  =>'',
           'db_host' =>'127.0.0.1',
           'db_port' =>'3306',
           'db_name' =>'jaafar',
           'db_charset'=>'utf8',
           'db_prefix' =>'jaafar_',
           'link_num'  =>1
        ),
    'SITE'=>array(
        'Main' =>array(
            'WebBaseUrl' =>'http://www.bift360.com'
        ),
        'Blog' =>array(
            'WebBaseUrl' =>'http://blog.bift360.com'
        ),
    ),
);