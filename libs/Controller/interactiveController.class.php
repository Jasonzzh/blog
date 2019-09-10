<?php
    require_once './libs/Controller/commonController.class.php';

    class interactiveController{

        // 点赞方法实现 //文章阅读量方法实现 //博客推荐打开和关闭实现 //文章打开关闭
        public function changeValue(){
            $dataTable = $_POST['dataTable'];
            $key = $_POST['key'];
            $keyValue = $_POST['keyValue'];
            $id = $_POST['id'];
            $common = new commonController();
            $common->connect();
            $common->init();
            $msg = M('mysql')->query($common->conn,M('news')->changeData($dataTable,$key,$keyValue,$id));
        }

        // 搜索方法实现
        public function search(){
            $keyWords = (!empty($_POST['keyWords']))?$_POST['keyWords']:'';
            $common = new commonController();
            $common->connect();
            $common->seo('searchResult');
            $life_dribs = $common->data_ob('life_dribs','Time');
            $learn_share = $common->data_ob('learn_share','Time');
            $about_me = $common->data_ob('about_me','Time');
            $excellent_blogs = $common->data_ob('excellent_blogs','Time');
            $result_life_dribs = $common->Fuzzy_query('life_dribs',$keyWords);
            $result_learn_share = $common->Fuzzy_query('learn_share',$keyWords);
            $skin = $common->data_some('skin','CurClass',1,'ClassName');
            $common->Smarty->assign(array('skin'=>$skin));// 风格皮肤
            $common->Smarty->assign(array('life_dribs'=>$life_dribs));
            $common->Smarty->assign(array('learn_share'=>$learn_share));
            $common->Smarty->assign(array('about_me'=>$about_me));
            $common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            $common->Smarty->assign(array('result_life_dribs'=>$result_life_dribs));
            $common->Smarty->assign(array('result_learn_share'=>$result_learn_share));
            $common->Smarty->display('searchResult.html');
        }

        // 游客提交链接
        public function handInSite(){
            global $blog_name,$blog_url,$blog_email;
            $blog_name = (!empty($_POST['blog_name']))?$_POST['blog_name']:'';
            $blog_url = (!empty($_POST['blog_url']))?$_POST['blog_url']:'';
            $blog_email = (!empty($_POST['blog_email']))?$_POST['blog_email']:'';
            $common = new commonController();
            $common->connect();
            $common->init();
            $msg = M('mysql')->query($common->conn,M('news')->Insert($blog_name,$blog_url,$blog_email));
            if($msg) {
                echo "<script>alert('提交成功！感谢您的推荐！');location.href='http://localhost/newBlog/excellentBlogs/'</script>";
            }
            else{
                echo "<script>alert('对不起！提交失败！');location.href='http://localhost/newBlog/excellentBlogs/'</script>";
            }
        }
    }
?>