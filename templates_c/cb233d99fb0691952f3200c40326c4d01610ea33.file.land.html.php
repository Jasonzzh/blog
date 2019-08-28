<?php /* Smarty version Smarty-3.1.16, created on 2019-04-28 01:06:40
         compiled from "templates\admin\land.html" */ ?>
<?php /*%%SmartyHeaderCode:314335cc48c2077eea5-12818840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb233d99fb0691952f3200c40326c4d01610ea33' => 
    array (
      0 => 'templates\\admin\\land.html',
      1 => 1555662985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314335cc48c2077eea5-12818840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5cc48c2084fc73_18386812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc48c2084fc73_18386812')) {function content_5cc48c2084fc73_18386812($_smarty_tpl) {?><!DOCTYPE html>
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
