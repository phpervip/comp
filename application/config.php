<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.aiyi.info All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@aiyi.info> <http://www.aiyi.info>
// +----------------------------------------------------------------------

return array(

	// 调试模式
	'app_debug'         => true,
	'charset'           => 'UTF-8',
	'lang_switch_on'    => true, // 开启语言包功能
	'lang_list'         => ['zh-cn'], // 支持的语言列表
	'data_auth_key'     => 'sent',
	'base_url'          => BASE_PATH,
	'url_route_on'      => true,
	'url_common_param'  => false,
	'template'          => array(
		'taglib_build_in' => 'cx,com\Sent',
	),

	// 'dispatch_success_tmpl'  => APP_PATH . 'common/view/default/jump.html',
	// 'dispatch_error_tmpl'    => APP_PATH . 'common/view/default/jump.html',

	'attachment_upload' => array(
		// 允许上传的文件MiMe类型
		'mimes'    => [],
		// 上传的文件大小限制 (0-不做限制)
		'maxSize'  => 0,
		// 允许上传的文件后缀
		'exts'     => [],
		// 子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
		'subName'  => ['date', 'Ymd'],
		//保存根路径
		'rootPath' => './uploads/attachment',
		// 保存路径
		'savePath' => '',
		// 上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
		'saveName' => ['uniqid', ''],
		// 文件上传驱动e,
		'driver'   => 'Local',
	),

	'editor_upload'     => array(
		// 允许上传的文件MiMe类型
		'mimes'    => [],
		// 上传的文件大小限制 (0-不做限制)
		'maxSize'  => 0,
		// 允许上传的文件后缀
		'exts'     => [],
		// 子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
		'subName'  => ['date', 'Ymd'],
		//保存根路径
		'rootPath' => './uploads/editor',
		// 保存路径
		'savePath' => '',
		// 上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
		'saveName' => ['uniqid', ''],
		// 文件上传驱动e,
		'driver'   => 'Local',
	),

	'picture_upload'    => array(
		// 允许上传的文件MiMe类型
		'mimes'    => [],
		// 上传的文件大小限制 (0-不做限制)
		'maxSize'  => 0,
		// 允许上传的文件后缀
		'exts'     => [],
		// 子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
		'subName'  => ['date', 'Ymd'],
		//保存根路径
		'rootPath' => './uploads/picture',
		// 保存路径
		'savePath' => '',
		// 上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
		'saveName' => ['uniqid', ''],
		// 文件上传驱动e,
		'driver'   => 'Local',
	),
	'session'           => array(
		'prefix'     => 'sent',
		'type'       => '',
		'auto_start' => true,
	),

	'log'               => array(
		// 日志记录方式，支持 file sae
		'type' => 'file',
		// 日志保存目录
		'path' => LOG_PATH,
	),
	'app_trace' => false,
	// 页面Trace信息
	'trace'             => array(
		//支持Html,Console 设为false则不显示
		'type' => 'Console',
	),

	'view_replace_str'       => array(
		'__ADDONS__' => BASE_PATH . '/addons',
		'__PUBLIC__' => BASE_PATH . '/public',
	),
    'company_site' => array('company'=>'易好科技','icp'=>'浙ICP备13006622号','copyright'=>'宁波易好电子商务有限公司 Yihao ltd','address'=>'杭州东方文化园','url'=>'http://www.aiyi.info'),

);