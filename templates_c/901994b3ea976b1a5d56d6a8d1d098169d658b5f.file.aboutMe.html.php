<?php /* Smarty version Smarty-3.1.16, created on 2019-09-09 12:15:21
         compiled from "templates\aboutMe.html" */ ?>
<?php /*%%SmartyHeaderCode:32085d75d1d9329b48-21946436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '901994b3ea976b1a5d56d6a8d1d098169d658b5f' => 
    array (
      0 => 'templates\\aboutMe.html',
      1 => 1567763371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32085d75d1d9329b48-21946436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'skin' => 0,
    'value' => 0,
    'seo_data' => 0,
    'root' => 0,
    'about_me' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d75d1d9407382_41660782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d75d1d9407382_41660782')) {function content_5d75d1d9407382_41660782($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="skin<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['ClassName'];?>
<?php } ?>">
<head>
    <meta charset="UTF-8">
    <title>关于我</title>
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
/templates/Css/aboutMe.css"/>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('aboutMe', null, 0);?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('./canvasBackground.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--top-->
<div class="top">
    <?php echo $_smarty_tpl->getSubTemplate ('./topMenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_top-->
<!--center-->
<div class="center">
    <!--aboutMe-->
    <div class="aboutMe">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about_me']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <div class="aboutMe_title">
            <i>
                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/back_logo.jpg"/></a>
            </i>
            <span class="aboutMe_title1"><?php echo $_smarty_tpl->tpl_vars['value']->value['Name'];?>
</span>
            <span class="aboutMe_title2"><?php echo $_smarty_tpl->tpl_vars['value']->value['Title'];?>
</span>
            <span class="aboutMe_title3"><?php echo $_smarty_tpl->tpl_vars['value']->value['SmallTitle'];?>
</span>
        </div>
        <div class="aboutMe_content">
            <span class="aboutMe_content_title"></span>
            <span class="aboutMe_content_text"><?php echo $_smarty_tpl->tpl_vars['value']->value['Content'];?>
</span>
        </div>
        <?php } ?>
    </div>
    <!--end_aboutMe-->
</div>
<!--end_center-->
<!--bottom-->
<div class="bottom">
    <?php echo $_smarty_tpl->getSubTemplate ('./bottomFoot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_bottom-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/scrollReveal.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/public.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/aboutMe.js"></script>
</body>
</html><?php }} ?>
