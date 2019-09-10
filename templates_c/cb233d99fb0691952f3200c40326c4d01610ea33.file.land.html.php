<?php /* Smarty version Smarty-3.1.16, created on 2019-09-06 18:36:35
         compiled from "templates\admin\land.html" */ ?>
<?php /*%%SmartyHeaderCode:87165d7236b3ebd9b5-82894824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb233d99fb0691952f3200c40326c4d01610ea33' => 
    array (
      0 => 'templates\\admin\\land.html',
      1 => 1555662986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87165d7236b3ebd9b5-82894824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d7236b3edce53_86057048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7236b3edce53_86057048')) {function content_5d7236b3edce53_86057048($_smarty_tpl) {?><!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>博客管理登录</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
templates/admin/Css/public.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
templates/admin/Css/land.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/admin/Js/land.js"></script>
</head>
<body>
<!------land------>
<form action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
admin/index/" method="POST" class="land">
    <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
templates/admin/Images/land.png" class="land_img"/>
    <ul>
        <li><input type="text" name="adminID" placeholder="账号：" id="adminID"/></li>
        <li><input type="password" name="adminPW" placeholder="密码：" id="adminPW"/></li>
        <li><input type="submit" name="submit" value="登陆" class="submit"/></li>
    </ul>
</form>
<!------end_land------>
</body>
</html><?php }} ?>
