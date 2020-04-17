<?php /* Smarty version Smarty-3.1.16, created on 2020-02-29 00:22:59
         compiled from "templates\feedBack.html" */ ?>
<?php /*%%SmartyHeaderCode:206775dd89a7a5eafe4-10168606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d26dcd064bd92ac8e8a789d33d97cb0559706b' => 
    array (
      0 => 'templates\\feedBack.html',
      1 => 1577096622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206775dd89a7a5eafe4-10168606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5dd89a7a66a182_70050756',
  'variables' => 
  array (
    'skin' => 0,
    'value' => 0,
    'seo_data' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd89a7a66a182_70050756')) {function content_5dd89a7a66a182_70050756($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="skin<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['ClassName'];?>
<?php } ?>">
<head>
    <meta charset="UTF-8">
    <title>留言</title>
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
/templates/Css/feedback.css"/>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('feedBack', null, 0);?>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('./canvasBackground.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--top-->
<div class="top">
    <?php echo $_smarty_tpl->getSubTemplate ('./topMenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--end_top-->
<!--center-->
<div class="center">
    <!--feedback-->
    <div class="feedback">
        
        <div id="SOHUCS" sid="{id}"></div>
        
        <script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
        <script type="text/javascript">
            window.changyan.api.config({
                appid: 'cytxb2v7O',
                conf: 'prod_3daed7b84583c5cb0f716f807a102ed5'
            });
        </script>
    </div>
    <!--end_feedback-->
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
/templates/Js/public.js"></script>
</body>
</html><?php }} ?>
