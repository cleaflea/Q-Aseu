<?php
return array( //'配置项'=>'配置值'
//    'URL_PATHINFO_DEPR' => '-'
//    'TMPL_L_DELIM' => '<{',
//    'TMPL_R_DELIM' => '}>',
    // 添加数据库配置信息
//    'DB_TYPE'   => 'mysql', // 数据库类型
//    'DB_HOST'   => 'localhost', // 服务器地址
//    'DB_NAME'   => 'thinkphp', // 数据库名
//    'DB_USER'   => 'root', // 用户名
//    'DB_PWD'    => '', // 密码
//    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_DSN' => 'mysql://root:@localhost:3306/qaseu',
    'SHOW_PAGE_TRACE' => TRUE, //浏览器右下角会出现一个查看trace的button
//    'TMPL_TEMPLATE_SUFFIX' => '.tpl',
//    'TMPL_FILE_DEPR' => '_',
//    'DEFAULT_THEME' => 'my',
//    'TMPL_DETECT_THEME' => true,
//    'THEME_LIST' => 'your, my',
    'TMPL_PARSE_STRING' => array(
        '__CSS__' => __ROOT__.'/Public/css',
        '__JS__' => __ROOT__.'/Public/js',
    ),
);
?>