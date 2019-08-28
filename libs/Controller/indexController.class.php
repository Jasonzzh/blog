<?php
    require_once './libs/Controller/commonController.class.php';

    class indexController {

        protected $common;//用来存放commonController类实例化后的对象

        //初始化公共方法
        public function init(){
            $this->common = new commonController();
            $this->common->connect();
            $this->common->init();
        }

        public function index(){
            global $page;
            $this->init();
            $life_dribs = $this->common->data_some('life_dribs','ControllShow',0,'Time');//ControllShow控制显示
            $learn_share = $this->common->data_some('learn_share','ControllShow',0,'Time');
            $about_me = $this->common->data_ob('about_me','Time');
            $excellent_blogs = $this->common->data_some('excellent_blogs','ControllShow',1,'Time');
            $this->common->page_fy('life_dribs','ReadCount',$page,16,'index');//ReadCount根据阅读量排序分页
            $this->common->Smarty->assign(array('life_dribs'=>$life_dribs));
            $this->common->Smarty->assign(array('learn_share'=>$learn_share));
            $this->common->Smarty->assign(array('about_me'=>$about_me));
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            /*--------调用View层方法实现数据以什么视图展现--------*/
            $this->common->Smarty->display('index.html');
        }

        public function learnShare(){
            global $page;
            $this->init();
            $learn_share = $this->common->data_some('learn_share','ControllShow',0,'Time');
            $excellent_blogs = $this->common->data_some('excellent_blogs','ControllShow',1,'Time');
            $this->common->page_fy('learn_share','Time',$page,24,'learnShare');
            $this->common->Smarty->assign(array('learn_share'=>$learn_share));
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            $this->common->Smarty->display('learnShare.html');
        }

        public function learnShare_View(){
            global $id;
            $this->init();
            $learn_share = $this->common->data_some('learn_share','ControllShow',0,'Time');
            $excellent_blogs = $this->common->data_some('excellent_blogs','ControllShow',1,'Time');
            $learn_share_view = $this->common->data_one('learn_share',$id);
            $this->common->Smarty->assign(array('learn_share'=>$learn_share));
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            $this->common->Smarty->assign(array('learn_share_view'=>$learn_share_view));
            /*--------调用View层方法实现数据以什么视图展现--------*/
            $this->common->Smarty->display('learnShare_View.html');
        }

        public function lifeDribs()
        {
            global $page;
            $this->init();
            $life_dribs = $this->common->data_some('life_dribs','ControllShow',0,'Time');
            $excellent_blogs = $this->common->data_some('excellent_blogs','ControllShow',1,'Time');
            $this->common->page_fy('life_dribs','Time',$page,16,'lifeDribs');
            $this->common->Smarty->assign(array('life_dribs'=>$life_dribs));
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            /*--------调用View层方法实现数据以什么视图展现--------*/
            $this->common->Smarty->display('lifeDribs.html');
        }

        public function lifeDribs_View(){
            global $id;
            $this->init();
            $life_dribs = $this->common->data_some('life_dribs','ControllShow',0,'Time');
            $excellent_blogs = $this->common->data_some('excellent_blogs','ControllShow',1,'Time');
            $lifeDribs_View = $this->common->data_one('life_dribs',$id);
            $this->common->Smarty->assign(array('life_dribs'=>$life_dribs));
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            $this->common->Smarty->assign(array('lifeDribs_View'=>$lifeDribs_View));
            /*--------调用View层方法实现数据以什么视图展现--------*/
            $this->common->Smarty->display('lifeDribs_View.html');
        }

        public function aboutMe(){
            $this->init();
            $this->common->Smarty->display('aboutMe.html');
        }

        public function excellentBlogs()
        {
            $this->init();
            $excellent_blogs = $this->common->data_some('excellent_blogs','ControllShow',1,'Time');
            $this->common->Smarty->assign(array('excellent_blogs'=>$excellent_blogs));
            /*--------调用View层方法实现数据以什么视图展现--------*/
            $this->common->Smarty->display('excellentBlogs.html');
        }

        public function feedBack(){
            $this->init();
            $this->common->Smarty->display('feedBack.html');
        }
    }
?>