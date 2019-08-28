<?php /* Smarty version Smarty-3.1.16, created on 2019-05-07 12:28:20
         compiled from "templates\searchResult.html" */ ?>
<?php /*%%SmartyHeaderCode:297505cd10964261b08-81012192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f8f2bc8f05bff94442f6af13ada9d79b6bb7a1' => 
    array (
      0 => 'templates\\searchResult.html',
      1 => 1555668517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297505cd10964261b08-81012192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'result_life_dribs' => 0,
    'value' => 0,
    'result_learn_share' => 0,
    'about_me' => 0,
    'life_dribs' => 0,
    'learn_share' => 0,
    'excellent_blogs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5cd10964359193_42367087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd10964359193_42367087')) {function content_5cd10964359193_42367087($_smarty_tpl) {?><head>
    <meta charset="UTF-8">
    <title>搜索结果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="个人博客,张先森个人博客,张先森，个人网站" />
    <meta name="description" content="张先森个人博客，是一个计算机系的在校生个人网站"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Css/public.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Css/searchResult.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/scrollReveal.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/public.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/searchResult.js"></script>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('searchResult', null, 0);?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('./canvasBackground.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--top-->
<div class="top">
    <?php echo $_smarty_tpl->getSubTemplate ('./topMenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_top-->
<!--center-->
<div class="center">
    <!--left_box-->
    <div class="left_box">
        <!--lb_recommend_share-->
        <div class="lb_recommend_share">
            <span class="lb_recommend_share_title">搜索结果</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_life_dribs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value!=='') {?>
                        <li data-scroll-reveal='enter bottom over 1s'>
                            <div class="blog_title">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
                                </a>
                            </div>
                            <div class="blog_content">
                                <i class="blog_content_img">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['SmallImageUrl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
"/>
                                    </a>
                                </i>
                                <span class="blog_text"><?php echo $_smarty_tpl->tpl_vars['value']->value['Content'];?>
</span>
                                <span class="blog_info">
                                        <span class="author"><?php echo $_smarty_tpl->tpl_vars['value']->value['Author'];?>
</span>
                                        <span class="time"><?php echo $_smarty_tpl->tpl_vars['value']->value['Time'];?>
</span>
                                        <span class="see"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/see.png"/><span><?php echo $_smarty_tpl->tpl_vars['value']->value['ReadCount'];?>
</span></span>
                                        <span class="giveLike"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/giveLike.png"/><span title="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ClickLike'];?>
</span></span>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank" class="readMore">阅读文章</a>
                                    </span>
                            </div>
                        </li>
                    <?php }?>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_learn_share']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value!=='') {?>
                        <li data-scroll-reveal='enter bottom over 1s'>
                            <div class="blog_title">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
                                </a>
                            </div>
                            <div class="blog_content">
                                <i class="blog_content_img">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['SmallImageUrl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
"/>
                                    </a>
                                </i>
                                <span class="blog_text"><?php echo $_smarty_tpl->tpl_vars['value']->value['Content'];?>
</span>
                                <span class="blog_info">
                                        <span class="author"><?php echo $_smarty_tpl->tpl_vars['value']->value['Author'];?>
</span>
                                        <span class="time"><?php echo $_smarty_tpl->tpl_vars['value']->value['Time'];?>
</span>
                                        <span class="see"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/see.png"/><span><?php echo $_smarty_tpl->tpl_vars['value']->value['ReadCount'];?>
</span></span>
                                        <span class="giveLike"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/giveLike.png"/><span title="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ClickLike'];?>
</span></span>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank" class="readMore">阅读文章</a>
                                    </span>
                            </div>
                        </li>
                <?php }?>
                <?php } ?>
            </ul>
        </div>
        <!--end_lb_recommend_share-->
    </div>
    <!--left_box-->
    <!--right_box-->
    <div class="right_box">
        <!--myself_card-->
        <div class="myself_card">
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about_me']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->key<1) {?>
            <h2>张先森个人简介</h2>
            <p>职业：<?php echo $_smarty_tpl->tpl_vars['value']->value['Perfession'];?>
</p>
            <p>现居：<?php echo $_smarty_tpl->tpl_vars['value']->value['Address'];?>
</p>
            <p>Email：<?php echo $_smarty_tpl->tpl_vars['value']->value['Email'];?>
</p>
            <?php }?>
            <?php } ?>
            <ul class="contact_link">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
" target="_self" class="iconfont home" title="张先森个人博客"></a>
                </li><!--seo关键字//单独建表-->
                <li>
                    <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=987354940@qq.com" target="_blank" class="iconfont Email" title="邮箱"></a>
                </li>
                <li>
                    <a href="tencent://Message/?Uin=987354940&websiteName=www.oicqzone.com&Menu=yes" target="_blank" class="iconfont qq"  title="qq"></a>
                </li>
                <li>
                    <a href="" target="_blank" class="iconfont weixin"  title="关注我的微信"></a>
                    <img src=""/>
                </li>
            </ul>
        </div>
        <!--end_myself_card-->
        <!--rb_hot_click-->
        <div class="rb_hot_click">
            <span class="rb_hot_click_title">点击排行</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['life_dribs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->key<8) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                        <span class="serialNumber"></span>
                        <span class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
                    </a>
                </li>
                <?php }?>
                <?php } ?>
            </ul>
        </div>
        <!--end_rb_hot_click-->
        <!--station_recommend-->
        <div class="station_recommend">
            <span class="station_recommend_title">站长推荐</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['learn_share']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->key<8) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                        <i><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['SmallImageUrl'];?>
"/></i>
                        <span><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
                    </a>
                </li>
                <?php }?>
                <?php } ?>
            </ul>
        </div>
        <!--end_station_recommend-->
        <!--rb_excellentBlogs-->
        <div class="rb_excellentBlogs">
            <span class="rb_excellentBlogs_title">优秀博客</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['excellent_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['SiteUrl'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</a></li>
                <?php } ?>
            </ul>
        </div>
        <!--end_rb_excellentBlogs-->
        <!--rb_QRcode-->
        <div class="rb_QRcode">
            <span class="rb_QRcode_title">关注我们</span>
            <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/weixin_code.png" class="rb_QRcode_img"/>
        </div>
        <!--end_rb_QRcode-->
    </div>
    <!--end_right_box-->
</div>
<!--end_center-->
<!--bottom-->
<div class="bottom">
    <?php echo $_smarty_tpl->getSubTemplate ('./bottomFoot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_bottom-->
</body>
</html><?php }} ?>
