<?php /* Smarty version Smarty-3.1.16, created on 2019-09-19 11:26:17
         compiled from "templates\learnShare.html" */ ?>
<?php /*%%SmartyHeaderCode:177695d75d2a893c490-68940462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6c3e9a15072e988206b0d1d4bc75b8d8bc258f' => 
    array (
      0 => 'templates\\learnShare.html',
      1 => 1568102411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177695d75d2a893c490-68940462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5d75d2a8a15b65_13251926',
  'variables' => 
  array (
    'skin' => 0,
    'value' => 0,
    'seo_data' => 0,
    'root' => 0,
    'results_learnShare' => 0,
    'page_learnShare' => 0,
    'pages_learnShare' => 0,
    'foo' => 0,
    'learn_share' => 0,
    'excellent_blogs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d75d2a8a15b65_13251926')) {function content_5d75d2a8a15b65_13251926($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="skin<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['value']->value['ClassName'];?>
<?php } ?>">
<head>
    <meta charset="UTF-8">
    <title>技术分享</title>
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
/templates/Css/learnShare.css"/>
</head>
<?php $_smarty_tpl->tpl_vars['NavId'] = new Smarty_variable('learnShare', null, 0);?>
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
        <!--lb_hot_share-->
        <div class="lb_hot_share">
            <span class="lb_hot_share_title">技术分享</span>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results_learnShare']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
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
                <?php } ?>
            </ul>
        </div>
        <!--end_lb_hot_share-->
        <!--lb_hot_share_page-->
        <div class="lb_hot_share_page">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare/page_<?php if ($_smarty_tpl->tpl_vars['page_learnShare']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['page_learnShare']->value-1;?>
<?php } else { ?><?php echo 1;?>
<?php }?>/">上一页</a></li>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pages_learnShare']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages_learnShare']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),6);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare/page_<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/" class="<?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['page_learnShare']->value) {?>page On<?php } else { ?>page<?php }?>"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                <?php }} ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
learnShare/page_<?php if ($_smarty_tpl->tpl_vars['page_learnShare']->value<$_smarty_tpl->tpl_vars['pages_learnShare']->value) {?><?php echo $_smarty_tpl->tpl_vars['page_learnShare']->value+1;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['pages_learnShare']->value;?>
<?php }?>/">下一页</a></li>
            </ul>
        </div>
        <!--end_lb_hot_share_page-->
    </div>
    <!--left_box-->
    <!--right_box-->
    <div class="right_box">
        <!--rb_hot_click-->
        <div class="rb_hot_click">
            <span class="rb_hot_click_title">点击排行</span>
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
/templates/Js/learnShare.js"></script>
</body>
</html><?php }} ?>
