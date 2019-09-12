<?php
    require_once './libs/Controller/commonController.class.php';

    class adminController{

        protected $common;

        // 实例化公共类  并把实例化后的对象赋给$common保存
        public function init(){
            $this->common = new commonController();
            $this->common->connect();
            $this->common->init();
            $skin = $this->common->data_ob('skin','ClassName');
            $this->common->Smarty->assign(array('skin'=>$skin));//风格皮肤
        }

        function land(){
            $this->init();
            $this->common->Smarty->display('admin/land.html');
        }

        // 后台管理界面初始化
        public function interfaceInit(){
            global $page;
            $this->init();
            $this->common->page_fy_all('life_dribs','Time',$page,16,'lifeDribs');
            $this->common->page_fy_all('learn_share','Time',$page,16,'learnShare');
            $excellent_blogs = $this->common->data_ob('excellent_blogs','sequence');
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
        }

        // userName//用户名  userPassword //密码
        public function index(){
            $userName = (!empty($_POST['adminID']))?$_POST['adminID']:'';
            $userPassword = (!empty($_POST['adminPW']))?$_POST['adminPW']:'';
            $this->init();
            session_start();
            $_SESSION['userName'] = $userName;
            $_SESSION['userPassword'] = $userPassword;
            $query = M('mysql')->query($this->common->conn,M('news')->findAll_orderby_date('user','Time'));
            $a = M('mysql')->checkLand($userName,$userPassword,$query);
            if($a == 1){
                echo "<script>alert('登陆成功');</script>";
                $this->interfaceInit();
                $this->common->Smarty->display('admin/index.html');
            }
            else{
                if($a == 2){
                    echo "<script>alert('用户名错误！请重新输入！');</script>";
                }
                else{
                    echo "<script>alert('密码错误！请重新输入！');</script>";
                }
                $this->land();
            }
        }

        // 删除
        function  Delete(){
            $dataTable = $_POST['dataTable'];
            $keywords = $_POST['keywords'];
            $id = $_POST['id'];
            $this->init();
            $msg = M('mysql')->query($this->common->conn,M('news')->Delete($dataTable,$keywords,$id));
            if($msg){
                echo "<script>alert('删除成功！');</script>";
            }
            else{
                echo "<script>alert('删除失败！请您重新操作！');</script>";
            }
        }

        // 修改文章
        function updata(){
            $dataTable = $_POST['dataTable'];
            $id = $_POST['id'];
            $Title = $_POST['Title'];
            $SmallTitle = $_POST['SmallTitle'];
            $datatime = $_POST['datatime'];
            $Author = $_POST['Author'];
            $Content = $_POST['Content'];
            $this->init();
            $msg = M('mysql')->query($this->common->conn,M('news')->updata($dataTable,$id,$Title,$SmallTitle,$datatime,$Author,$Content));
            if($msg){
                echo "<script>alert('修改成功！');</script>";
            }
            else{
                echo "<script>alert('修改失败！请您重新操作！');</script>";
            }
        }

        // 添加文章
        function Insert(){
            $dataTable = $_POST['dataTable'];
            $Title = $_POST['Title'];
            $SmallTitle = $_POST['SmallTitle'];
            $datatime = $_POST['datatime'];
            $Author = $_POST['Author'];
            $Content = $_POST['Content'];
            $this->init();
            $msg = M('mysql')->query($this->common->conn,M('news')->InsertNews($dataTable,$Title,$SmallTitle,$datatime,$Author,$Content));
            if($msg){
                echo "<script>alert('添加成功！');</script>";
            }
            else{
                echo "<script>alert('添加失败！请您重新操作！');</script>";
            }
        }

        // 添加友情博客
        function InsetBlogSite(){
            $Title = $_POST['Title'];
            $SiteUrl = $_POST['SiteUrl'];
            $SiteEmail = $_POST['SiteEmail'];
            $this->init();
            $msg = M('mysql')->query($this->common->conn,M('news')->InsertBlogSite($Title,$SiteUrl,$SiteEmail));
            if($msg){
                echo "<script>alert('添加成功！');</script>";
            }
            else{
                echo "<script>alert('添加失败！请您重新操作！');</script>";
            }
        }

        //修改友情博客信息
        function blogsEdit(){
            $id = $_POST['id'];
            $Title = $_POST['Title'];
            $SiteUrl = $_POST['SiteUrl'];
            $SiteEmail = $_POST['SiteEmail'];
            $this->init();
            $msg = M('mysql')->query($this->common->conn,M('news')->blogs_edit($id,$Title,$SiteUrl,$SiteEmail));
            if($msg){
                echo "<script>alert('修改成功！');</script>";
            }
            else{
                echo "<script>alert('修改失败！请您重新操作！');</script>";
            }
        }

        // 更换皮肤
        function skinChange(){
            $id = $_POST['id'];
            $this->init();
            M('mysql')->query($this->common->conn,M('news')->updataAll('skin','CurClass',0));
            M('mysql')->query($this->common->conn,M('news')->updataOne('skin','CurClass',1,'ClassName',$id));
        }
    }
?>