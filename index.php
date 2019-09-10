<?php
    header('Content-Type: text/html;charset=utf-8');
    //ini_set("error_reporting","E_ALL & ~E_NOTICE");
    ini_set('date.timezone','Asia/Shanghai');//时间设置
    require_once('./function/function.php');
    //url形式  index.php?controller=控制器名&method=方法名  page=页码 id//详情页关键字段
    $controller = (!empty($_GET['controller']))?$_GET['controller']:'index';
    $method = (!empty($_GET['method']))?$_GET['method']:'index';
    $page = (!empty($_GET['page']))?$_GET['page']:'1';
    $id = (!empty($_GET['id']))?$_GET['id']:'';
    C($controller,$method);
?>