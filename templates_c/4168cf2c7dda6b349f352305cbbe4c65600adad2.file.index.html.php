<?php /* Smarty version Smarty-3.1.16, created on 2019-09-12 11:26:45
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:305065d7236b6aa9de7-47517010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4168cf2c7dda6b349f352305cbbe4c65600adad2' => 
    array (
      0 => 'templates\\index.html',
      1 => 1568258799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305065d7236b6aa9de7-47517010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d7236b6b5e021_44812742',
  'variables' => 
  array (
    'skin' => 0,
    'value' => 0,
    'seo_data' => 0,
    'root' => 0,
    'life_dribs' => 0,
    'banner_data' => 0,
    'learn_share' => 0,
    'results_index' => 0,
    'page_index' => 0,
    'pages_index' => 0,
    'foo' => 0,
    'about_me' => 0,
    'excellent_blogs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7236b6b5e021_44812742')) {function content_5d7236b6b5e021_44812742($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="skin<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['ClassName'];?>
<?php } ?>">
<head>
    <meta charset="UTF-8">
    <title>张先森个人博客_一个程序员的个人博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seo_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['value']->value['keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
"/>
    <?php } ?>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Css/public.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Css/index.css"/>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('index', null, 0);?>
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
        <!--banner-->
        <div class="banner">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['life_dribs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                   <?php if ($_smarty_tpl->tpl_vars['value']->key<4) {?>
                       <li class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['SmallImageUrl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
"/></a></li>
                   <?php }?>
                <?php } ?>
            </ul>
            <div class="banner_controls">
                <div class="page_prev" id="page_prev"></div>
                <div class="page_next" id="page_next"></div>
                <ul class="page_list" id="page_list">
                    <!--<li>js动态按钮创建</li>-->
                </ul>
            </div>
        </div>
        <!--end_banner-->
        <!--lb_header-->
        <div class="lb_header">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->key<2) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['SmallImageUrl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
"/>
                        <span><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
                    </a>
                </li>
                <?php }?>
                <?php } ?>
            </ul>
        </div>
        <!--end_lb_header-->
        <!--lb_hot_share-->
        <div class="lb_hot_share">
            <span class="lb_hot_share_title">技术分享</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['learn_share']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->key<6) {?>
                <li>
                    <i>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['SmallImageUrl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
"/>
                        </a>
                    </i>
                    <b><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</b>
                    <span class="content"><?php echo $_smarty_tpl->tpl_vars['value']->value['Introduce'];?>
</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank" class="readMore"><span>+</span>文章阅读</a>
                    <span class="giveLike"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/giveLike.png"/><span data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ClickLike'];?>
</span></span>
                </li>
                <?php }?>
                <?php } ?>
            </ul>
        </div>
        <!--end_lb_hot_share-->
        <!--lb_recommend_share-->
        <div class="lb_recommend_share">
            <span class="lb_recommend_share_title">程序人生</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <li data-scroll-reveal='enter bottom over 1s'>
                    <div class="blog_title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank">
                            <b>【热】</b>
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
                        <span class="blog_text"><?php echo $_smarty_tpl->tpl_vars['value']->value['Introduce'];?>
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
/templates/Images/giveLike.png"/><span data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ClickLike'];?>
</span></span>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.html" target="_blank" class="readMore">阅读文章</a>
                        </span>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!--end_lb_recommend_share-->
        <!--lb_recommend_share_page-->
        <div class="lb_recommend_share_page">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
index_<?php if ($_smarty_tpl->tpl_vars['page_index']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['page_index']->value-1;?>
<?php } else { ?><?php echo 1;?>
<?php }?>/">上一页</a></li>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pages_index']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages_index']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),6);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
index_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/" class="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['page_index']->value) {?>page On<?php } else { ?>page<?php }?>"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                <?php }} ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
index_<?php if ($_smarty_tpl->tpl_vars['page_index']->value<$_smarty_tpl->tpl_vars['pages_index']->value) {?><?php echo $_smarty_tpl->tpl_vars['page_index']->value+1;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['pages_index']->value;?>
<?php }?>/">下一页</a></li>
            </ul>
        </div>
        <!--end_lb_recommend_share_page-->
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
                </li>
                <li>
                    <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=987354940@qq.com" target="_blank" class="iconfont Email" title="邮箱"></a>
                </li>
                <li>
                    <a href="tencent://Message/?Uin=987354940&websiteName=www.oicqzone.com&Menu=yes" target="_blank" class="iconfont qq"  title="qq"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="iconfont weixin"  title="关注我的微信"></a>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/weixin_code.png" class="codeImg"/>
                </li>
                <div class="clear"></div>
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
<!--sideWindow-->
<div class="sideWindow">
    <?php echo $_smarty_tpl->getSubTemplate ('./sideWindow.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_sideWindow-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/scrollReveal.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/public.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/index.js"></script>
</body>
</html><?php }} ?>
