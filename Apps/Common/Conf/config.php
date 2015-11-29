<?php
 return array(
	    'VAR_PAGE'=>'p',
	    'PAGE_SIZE'=>15,
		'DB_TYPE'=>'mysql',
	    'DB_HOST'=>'localhost',
	    'DB_NAME'=>'wstmall',
	    'DB_USER'=>'root',
	    'DB_PWD'=>'root',
	    'DB_PREFIX'=>'wst_',
	    'DEFAULT_C_LAYER' =>  'Action',
	    'DEFAULT_CITY' => '440100',
	    'DATA_CACHE_SUBDIR'=>true,
        'DATA_PATH_LEVEL'=>2, 
	    'SESSION_PREFIX' => 'WSTMALL',
        'COOKIE_PREFIX'  => 'WSTMALL',
		'LOAD_EXT_CONFIG' => 'wst_config',
	 	'URL_ROUTE_RULES' => array(
			'login' => 'Users/login',
			'regist' => 'Home/Users/regist'
		),
	 	'URL_ROUTE_MAP' => array(
			'mia' => 'Mia/mia',
		),
		 /* 模板相关配置 */
		 'TMPL_PARSE_STRING' => array(
			 '__STATIC__' => __ROOT__ . '/Public/static',
			 '__THEMES__' => __ROOT__ . '/Public/' ,
			 '__ADDONS__' => __ROOT__ . '/Public/' .  '/Addons',
			 '__IMG__'    => __ROOT__ . '/Public/' .  '/images',
			 '__CSS__'    => __ROOT__ . '/Public/' .  '/css',
			 '__JS__'     => __ROOT__ . '/Public/' .  '/js',
			 '__MOBILE__' => __ROOT__ . '/Public/' .  '/Mobile',
			 '__SIMPLEBOOT__'     => __ROOT__ . '/Public/' . '/simpleboot',
			 '__NEW_JS__'     => __ROOT__ . '/Public/' . '/New/js',
			 '__NEW_CSS__'     => __ROOT__ . '/Public/' .  '/New/css',
			 '__NEW_IMG__'     => __ROOT__ . '/Public/' .  '/New/images',
		 ),
	);
?>