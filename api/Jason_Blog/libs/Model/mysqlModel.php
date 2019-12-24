<?php
class mysqlModel {

    /*------ 报错函数 ------*/
    public function err($error) {
        die("对不起，您的操作有误，错误原因为：".$error);
    }

    /*------ 连接数据库 ------*/
    public function connect($config) {
        $dbconfig = $config['dbconfig'];
        $dbuser = $dbconfig['dbuser'];
        $dbhost = $dbconfig['dbhost'];
        $dbpsw = $dbconfig['dbpsw'];
        $dbname = $dbconfig['dbname'];
        $dbcharset = $dbconfig['dbcharset'];
        if(!($conn = mysqli_connect($dbhost,$dbuser,$dbpsw))){
            $this->err(mysqli_error($conn));
        }
        if(!mysqli_select_db($conn,$dbname)) { // 选择库
            $this->err(mysqli_error($conn));
        }
        mysqli_query($conn,"set names ".$dbcharset); // 设置编码格式
        return $conn;
    }

    /*------ 执行sql语句 返回数据 ------*/
    public function query($conn,$sql) {
        $query = mysqli_query($conn,$sql);
        if(!$query){
            $this->err($sql."<br/>".mysqli_error($conn));
        } else {
            if(is_bool($query)) {
                $result = $query;
            } else {
                while($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $result[] = $rs;
                }
            }
        }
        return isset($result) ? $result : [];
    }

}