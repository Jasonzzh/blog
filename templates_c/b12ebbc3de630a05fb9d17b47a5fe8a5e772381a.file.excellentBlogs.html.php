<?php /* Smarty version Smarty-3.1.16, created on 2019-09-09 12:16:03
         compiled from "templates\excellentBlogs.html" */ ?>
<?php /*%%SmartyHeaderCode:216915d75d2030e1311-26252333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b12ebbc3de630a05fb9d17b47a5fe8a5e772381a' => 
    array (
      0 => 'templates\\excellentBlogs.html',
      1 => 1567763385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216915d75d2030e1311-26252333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'skin' => 0,
    'value' => 0,
    'seo_data' => 0,
    'root' => 0,
    'excellent_blogs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d75d2031c4955_46496487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d75d2031c4955_46496487')) {function content_5d75d2031c4955_46496487($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="skin<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['ClassName'];?>
<?php } ?>">
<head>
    <meta charset="UTF-8">
    <title>张先森个人博客-博客推荐</title>
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
/templates/Css/excellentBlogs.css"/>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('excellentBlogs', null, 0);?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('./canvasBackground.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--top-->
<div class="top">
    <?php echo $_smarty_tpl->getSubTemplate ('./topMenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_top-->
<!--center-->
<div class="center">
    <!--excellentBlogs_box-->
    <div class="excellentBlogs_box">
        <div class="excellentBlogs_box_title">
            <span>优秀个人博客</span>
            <dl class="openSubmitBolgs" id="openSubmitBolgs">提交链接</dl>
        </div>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['excellent_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['SiteUrl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <span class="optimism">
            成功的路上虽然艰辛，但你不是孤军奋战！
    </span>
    <!--end_excellentBlogs_box-->
    <!---handIn_Sites--->
    <div class="handIn_Sites" id="wind">
        <form action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
handInSite/" method="POST">
            <div class="title" id="change_wind">
                <span>提交链接</span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/close.png" class="closeSubmitBolgs" id="closeSubmitBolgs"/>
            </div>
            <ul>
                <li><input type="text" name="blog_name" placeholder="博客名：" class="blog_name"/></li>
                <li><input type="text" name="blog_url" placeholder="博客地址：" class="blog_url"/></li>
                <li><input type="text" name="blog_email" placeholder="博主邮箱：" class="blog_email"/></li>
                <li><input type="submit" name="submit" value="确认提交" class="handInSite"/></li>
            </ul>
        </form>
    </div>
    <div class="cover"></div>
    <!---end_handIn_Sites--->
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
/templates/Js/scrollReveal.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/public.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/excellentBlogs.js"></script>
</html><?php }} ?>
