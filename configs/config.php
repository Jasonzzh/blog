<?php
    $config = array(
		'viewconfig' => array(
			'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'templates',  'compile_dir' => 'templates_c'),
		'dbconfig' => array(
			'dbhost' => 'localhost', 'dbuser'=>'root', 'dbpsw' => 'root' , 'dbname' => 'Person_Blog', 'dbcharset' => 'utf8'),
        'nav' => array(
            'home' => array('name' => '博客首页','url' => '','NavId' => 'index'),
            'learnShare' => array('name' => '技术分享','url' => 'learnShare/','NavId' => 'learnShare'),
            'lifeDribs' => array('name' => '程序人生','url' => 'lifeDribs/','NavId' => 'lifeDribs'),
            'excellentBlogs' => array('name' => '博客推荐','url' => 'excellentBlogs/','NavId' => 'excellentBlogs'),
            'aboutMe' => array('name' => '关于我','url' => 'aboutMe/','NavId' => 'aboutMe'),
            'feedback' => array('name' => '留言','url' => 'feedback/','NavId' => 'feedback')
        ),
        'allow_origin' => array(
            'https://www.zhangqinblog.com/', 
            'http://www.zhangqinblog.com/'
        )
	);
?>