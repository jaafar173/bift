<?php
/*前台配置文件
 * @author Jaafar
 * @date 2015-3-4
 */
return array(
	'SITE_STATUS'   =>  'local',
	'DEFAULT_THEME' =>	'',//默认模板主题
	'DEFAULT_MODULE'=>	'Home',

	/*数据缓存设置*/
	'DATA_CACHE_PREFIX'=>'www_',//缓存前缀
	'DATA_CACHE_TYPE'  =>'File',//数据缓存类型

	'TMPL_PARSE_STRING' =>array(
		'__STATIC__' => __ROOT__ .'/Public/Static',
		'__IMG__' => __ROOT__ .'/Public/' . MODULE_NAME .'/img',
		'__CSS__' =>__ROOT__ .'/Public/' . MODULE_NAME .'/csss',
		'__JS__'  =>__ROOT__ .'/Public/' .MODULE_NAME .'/js'
	),


	/*每页展示数量*/
	'LIST_ROWS'		=> 10,
);