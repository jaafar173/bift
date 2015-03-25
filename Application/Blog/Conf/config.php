<?php
return array(
	//'配置项'=>'配置值'
    'SITE_STATUS'   =>'local',//
    'DEFAULT_THEME' =>'',//模板主题名设置
    'DATA_CACHE_PREFIX' =>'blog_',//缓存前缀
    'DATA_CACHE_TYPE'   =>'FILE',//数据缓存类型

    /*模板相关配置*/
    'TMPL_PARSE_STRING' =>array(
        '__STATIC__'=> __ROOT__ . '/Public/Static',
        '__IMG__'   => __ROOT__ . '/Public/' . MODULE_NAME . '/img',
        '__CSS__'   => __ROOT__ . '/Public/' .MODULE_NAME . '/css',
        '__JS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/js',

    ),
    /*每页展示数量*/
    'LIST_ROWS'         =>10
);