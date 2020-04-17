<?php /* Smarty version Smarty-3.1.16, created on 2020-02-28 22:24:07
         compiled from "templates\lifeDribs_View.html" */ ?>
<?php /*%%SmartyHeaderCode:234235d79c2a05f5548-77062511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f30ef7020decd8f1e2292706fb51ab3e11491d48' => 
    array (
      0 => 'templates\\lifeDribs_View.html',
      1 => 1577096643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234235d79c2a05f5548-77062511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d79c2a069fd90_16461466',
  'variables' => 
  array (
    'skin' => 0,
    'value' => 0,
    'lifeDribs_View' => 0,
    'seo_data' => 0,
    'root' => 0,
    'learn_share_view' => 0,
    'life_dribs' => 0,
    'excellent_blogs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d79c2a069fd90_16461466')) {function content_5d79c2a069fd90_16461466($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="skin<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['ClassName'];?>
<?php } ?>">
<head>
    <meta charset="UTF-8">
    <title><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lifeDribs_View']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
<?php } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
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
/templates/Css/lifeDribs_View.css"/>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('lifeDribs', null, 0);?>
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
        <!--lb_view-->
        <div class="lb_view">
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lifeDribs_View']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <div class="lb_view_nav">您现在的位置是：<span><a href="">首页</a>><a href="">学习分享</a></span></div>
            <div class="lb_view_content">
                <span class="lb_view_title"><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
                <span class="lb_view_time"><?php echo $_smarty_tpl->tpl_vars['value']->value['Time'];?>
</span>
                <span class="ReadCount"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/see.png"/><span data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['ReadCount'];?>
</span></span>
                <span class="lb_view_text"><?php echo $_smarty_tpl->tpl_vars['value']->value['Content'];?>
</span>
            </div>
            <?php } ?>
        </div>
        <!--end_lb_view-->
        <!--lb_comment-->
        <div class="lb_comment">
            <div class="lb_comment_title">
                <span>文章评论</span>
            </div>
            <div id="SOHUCS" sid="<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['learn_share_view']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
<?php } ?>" style="width:96%"></div>
            <script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
            <script type="text/javascript">
                window.changyan.api.config({
                    appid: 'cytxb2v7O',
                    conf: 'prod_3daed7b84583c5cb0f716f807a102ed5'
                });
            </script>
        </div>
        <!--end_lb_comment-->
    </div>
    <!--left_box-->
    <!--right_box-->
    <div class="right_box">
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
 $_from = $_smarty_tpl->tpl_vars['life_dribs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->key<8) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
lifeDribs_View/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/public.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/lifeDribs_View.js"></script>
</html><?php }} ?>
