<?php
class mysqlModel{
	/*------报错函数-----*/
	function err($error){
		die("对不起，您的操作有误，错误原因为：".$error);//die有两种作用 输出 和 终止   相当于  echo 和 exit 的组合
	}

	/*-------连接数据库------*/
	public function connect($config){
        $dbconfig = $config['dbconfig'];
        $dbhost = $dbconfig['dbhost'];
        $dbuser = $dbconfig['dbuser'];
        $dbpsw = $dbconfig['dbpsw'];
        $dbname = $dbconfig['dbname'];
        $dbcharset = $dbconfig['dbcharset'];
        if(!($conn = mysqli_connect($dbhost,$dbuser,$dbpsw))){//mysqli_connect连接数据库函数
            $this->err(mysqli_error());
        }
        if(!mysqli_select_db($conn,$dbname)){//mysql_select_db选择库的函数
            $this->err(mysqli_error());
        }
        mysqli_query($conn,"set names ".$dbcharset);//使用mysqli_query 设置编码
        return $conn;
	}

    /*----执行sql语句----*/
    function query($conn,$sql){
        if(!($query = MySqli_query($conn,$sql))){//使用mysqli_query函数执行sql语句
            $this->err($sql."<br />".mysqli_error());//mysqli_error 报错
        }else{
            return $query;
        }
    }
    /*------列表 $query sql语句通过mysql_query 执行出来的资源*返回列表数组-------*/
    function findAll($query){
        while($rs=mysqli_fetch_array($query)){//mysql_fetch_array函数把资源转换为数组，一次转换出一行出来
            $list[]=$rs;
        }
        return isset($list)?$list:"";
    }

    //登陆用户名、密码查询
    function checkLand($userName,$userPassword,$query){
        $num = MySqli_num_rows($query);
        for($i = 1;$i <= $num;$i++){
            $info = MySqli_fetch_array($query);
            if ($info['userName'] == $userName && $info['userPassword'] == $userPassword) {
                return 1;
            } else if ($info['userName'] !== $userName) {
                return 2;
            } else if ($info['userPassword'] !== $userPassword) {
                return 3;
            }
        }
    }
}
?>