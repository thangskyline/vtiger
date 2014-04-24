<?php /* Smarty version Smarty-3.1.7, created on 2014-04-21 08:18:37
         compiled from "D:\xampp\htdocs\igrow\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\ListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101945354d45da315d2-65707688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84529183db35c15512fbd023c96db78c2b1b0327' => 
    array (
      0 => 'D:\\xampp\\htdocs\\igrow\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\ListView.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101945354d45da315d2-65707688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5354d45da9ad5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354d45da9ad5')) {function content_5354d45da9ad5($_smarty_tpl) {?>
<div><div class="listViewTopMenuDiv"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewHeader.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="listViewContentDiv" id="listViewContents"><br><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewContents.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>