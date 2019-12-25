<?php /* Smarty version Smarty-3.1.16, created on 2019-12-25 09:39:22
         compiled from "F:\phpStudy\WWW\newBlog\templates\topMenu.html" */ ?>
<?php /*%%SmartyHeaderCode:258105d7236b6e8b7a9-39214555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da114113ef534e385d40e1ebd242470a433e1ca3' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\newBlog\\templates\\topMenu.html',
      1 => 1577096708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258105d7236b6e8b7a9-39214555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d7236b6e9ab68_09791102',
  'variables' => 
  array (
    'root' => 0,
    'nav' => 0,
    'value' => 0,
    'NavId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7236b6e9ab68_09791102')) {function content_5d7236b6e9ab68_09791102($_smarty_tpl) {?><!------top_center//网站公共头部------>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<div class="top_center">
    <!--logo-->
    <div class="logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/top_logo.png"/></a>
    </div>
    <!--end_logo-->
    <!--top_search-->
    <div class="top_search">
        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/search.png"/>
        <div class="top_search_box">
            <form action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
search/" method="POST" class="search_form" id="search_form">
                <input type="text" name="keyWords" class="input_words" placeholder="请输入关键字"/>
                <input type="submit" value="搜索" class="search_submit"/>
            </form>
        </div>
    </div>
    <!--end_top_search-->
    <!--top_nav-->
    <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/templates/Images/menu.png" class="top_nav_open"/>
    <div class="close_window"></div>
    <div class="top_nav" id="top_nav">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['value']->value['name']!='博客首页') {?>menuChildren<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['NavId']==$_smarty_tpl->tpl_vars['NavId']->value) {?>on<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <!--end_top_nav-->
</div>
<!------end_top_center------><?php }} ?>
