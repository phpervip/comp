<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.aiyi.info All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@aiyi.info> <http://www.aiyi.info>
// +----------------------------------------------------------------------

return array(
	// 数据库类型
	'type'        => 'mysql',
	// 数据库连接DSN配置
	'dsn'         => '',
	// 服务器地址
	'hostname'    => 'rdsud0som5h0ebqz5nr4o.mysql.rds.aliyuncs.com',
	// 数据库名
	'database'    => 'aiyi',
	// 数据库用户名
	'username'    => 'wanghaibin',
	// 数据库密码
	'password'    => 'Wang63350837',
	// 数据库连接端口
	'hostport'    => '3306',
	// 数据库连接参数
	'params'      => [],
	// 数据库编码默认采用utf8
	'charset'     => 'utf8',
	// 数据库表前缀
	'prefix'      => 'aiyi_',
	// 数据库调试模式
	'debug'       => false,
	// 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'deploy'      => 0,
	// 数据库读写是否分离 主从式有效
	'rw_separate' => false,
	// 读写分离后 主服务器数量
	'master_num'  => 1,
	// 指定从服务器序号
	'slave_no'    => '',
	'fields_strict' => false,
	// 开启自动写入时间戳字段
	'auto_timestamp' => true,
);