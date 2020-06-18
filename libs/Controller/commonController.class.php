<?php
    class commonController{

        public $Smarty,$conn,$nav,$config;

        public function connect(){
            global $config;
            require_once('./configs/config.php');
            $this->config = $config;
            $this->conn = M('mysql')->connect($config);// 数据库连接
        }

        public function init(){
            $this->nav = M('nav')->nav($this->config);
            $this->Smarty = ORG('Smarty/', 'Smarty', $this->config['viewconfig']);// Smarty引擎类实例化
            $this->Smarty->assign('root','https://'.$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/')+1));// 绝对路径
            $this->Smarty->assign(array('nav'=>$this->nav));
        }

        // 调取所有数据公共方法 且不对字段进行排序
        public function dataAll($db){
            $db = M('mysql')->query($this->conn,M('news')->findAll($db));
            return M('mysql')->findAll($db);
        }

        // 数据调取控制器公共方法 根据字段排序
        public function data_ob($db,$sp){
            $db = M('mysql')->query($this->conn,M('news')->findAll_orderby_date($db,$sp));
            return M('mysql')->findAll($db);
        }

        // 翻页控制器公共方法
        // $db  数据库表名  $sp  排序字段  $page  当前页码  $Spage  每页显示个数 $name翻页输出变量名后缀以区别
        // 根据字段进行筛选
        public function page_fy($db, $sp, $page, $Spage, $name){
            $array = $this->data_ob($db,$sp);
            $array = M('fyPage')->paging($Spage, $page, count($array));// 返回总页数pages和查询起始位置startSearch
            $results = M('mysql')->query($this->conn, M('news')->findAll_orderby_pageShow($db,$sp,$array[1], $Spage, 'ControllShow', '0'));// ControllShow控制显示
            $results = M('mysql')->findAll($results);
            $this->Smarty->assign('page_'.$name, $page);
            $this->Smarty->assign('pages_'.$name, $array[0]);
            $this->Smarty->assign(array('results_'.$name=>$results));
        }

        // 不进行字段筛选  显示所有  翻页
        public function page_fy_all($db,$sp,$page,$Spage,$name){
            $array = $this->data_ob($db,$sp);
            $array = M('fyPage')->paging(16,$page,count($array));// 返回总页数pages和查询起始位置startSearch
            $results = M('mysql')->query($this->conn,M('news')->findAll_orderby_page($db,$sp,$array[1],$Spage));
            $results = M('mysql')->findAll($results);
            $this->Smarty->assign('page_'.$name,$page);
            $this->Smarty->assign('pages_'.$name,$array[0]);
            $this->Smarty->assign(array('results_'.$name=>$results));
        }

        // 指定id数据调取控制器公共方法
        public function data_one($db,$id){
            $db = M('mysql')->query($this->conn,M('news')->findOne($db,$id));
            return M('mysql')->findAll($db);
        }

        // 指定字段控制数据调取控制器公共方法
        public function data_some($db,$keywords,$id,$sortParameters){
            $db = M('mysql')->query($this->conn,M('news')->findSome($db,$keywords,$id,$sortParameters));
            return M('mysql')->findAll($db);
        }

        // 模糊差查询控制器公共方法
        public function Fuzzy_query($db,$keyWords){
            $results = M('mysql')->query($this->conn,M('search')->sh($db,$keyWords));
            return M('mysql')->findAll($results);
        }

        // seo数据查询公共方法
        public function seo($value){
            $this->init();
            $seo_data = $this->data_one('seo',$value);
            $this->Smarty->assign(array('seo_data'=>$seo_data));
        }
    }
?>