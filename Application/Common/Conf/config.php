<?php
return array(
	  /* 项目设定 */
    'APP_DEBUG'    => false, // 是否开启调试模式
  

   /* 默认设置*/
	'DEFAULT_CHARSET'       => 'utf-8', // 默认输出编码
	//'DEFAULT_THEME'    => 'default', // 默认模板主题名称

	'DB_TYPE'               => 'mysqli',     // 数据库类型
	'DB_HOST'               => 'localhost', // 服务器地址
	'DB_NAME'               => 'shagalaka',          // 数据库名
	'DB_USER'               => 'root',      // 用户名
	'DB_PWD'                => '',          // 密码
	'DB_PORT'               => 3306,        // 端口
	'DB_PREFIX'             => 'ss_',    // 数据库表前缀

	'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    //'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
    'FILE_UPLOAD_TYPE'		=>'qiniu',
    'UPLOAD_TYPE_CONFIG'	=>array(
		'secrectKey'=>'Crsgerm0XyBBXJNULaOgB0BWAQsyHopIiHW2d-9U',
		'accessKey'=>'RA0JRs6o-ml9Smeg2PvcUM1qlxwVt5B7hm50Hfl2',
		'domain'=>'qq16364361',
		'bucket'=>'sunzheng',
		),


);
