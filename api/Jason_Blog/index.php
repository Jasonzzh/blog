<?php
    //json头
    header("Content-type: application/json;charset=UTF-8");
    //跨域
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Origin: *");
    
    require_once('./function/function.php');
    //url形式  index.php?controller=控制器名&method=方法名
    $controller = (!empty($_GET['controller'])) ? $_GET['controller'] : '';
    $method = (!empty($_GET['method'])) ? $_GET['method'] : '';
    C($controller,$method);