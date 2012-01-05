<?php /* Smarty version Smarty-3.1.7, created on 2012-01-05 15:50:08
         compiled from "/home/gefferey/Eng/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19741884144f02f035a24448-35109931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f71e88ecf6460f12260c464253e14d1f3e5028c6' => 
    array (
      0 => '/home/gefferey/Eng/templates/index.tpl',
      1 => 1325749801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19741884144f02f035a24448-35109931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f02f035af1a9',
  'variables' => 
  array (
    'title' => 0,
    'arr' => 0,
    'val' => 0,
    'articleTitle' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f02f035af1a9')) {function content_4f02f035af1a9($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/gefferey/Eng/libs/plugins/modifier.truncate.php';
?><!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['val']->value['entity_media_id'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['val']->value['entity_id'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['val']->value['path'];?>
<br>
	<?php } ?>
	
	===============================<br>
	the older version<br>
	===============================<br/>
	
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['val']->value['entity_media_id'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['val']->value['entity_id'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['val']->value['path'];?>
<br>
	<?php } ?>
	
	
	
	<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value);?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30);?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'');?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"---");?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'',true);?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"...",true);?>
<br>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'..',true,true);?>
<br>
	
	
	<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
<br>
	<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['number']->value);?>
<br>
	<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['number']->value);?>
<br>
</body>
</html>
<?php }} ?>