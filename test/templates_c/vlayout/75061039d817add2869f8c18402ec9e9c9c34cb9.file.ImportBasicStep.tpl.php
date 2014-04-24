<?php /* Smarty version Smarty-3.1.7, created on 2014-04-21 08:13:49
         compiled from "D:\xampp\htdocs\igrow\includes\runtime/../../layouts/vlayout\modules\Import\ImportBasicStep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145785354d33d7723d0-53192201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75061039d817add2869f8c18402ec9e9c9c34cb9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\igrow\\includes\\runtime/../../layouts/vlayout\\modules\\Import\\ImportBasicStep.tpl',
      1 => 1394184180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145785354d33d7723d0-53192201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOR_MODULE' => 0,
    'MODULE' => 0,
    'ERROR_MESSAGE' => 0,
    'DUPLICATE_HANDLING_NOT_SUPPORTED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5354d33d8646d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354d33d8646d')) {function content_5354d33d8646d($_smarty_tpl) {?>
<div class="contentsDiv span10 marginLeftZero"><form onsubmit="" action="index.php" enctype="multipart/form-data" method="POST" name="importBasic"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="view" value="Import" /><input type="hidden" name="mode" value="uploadAndParse" /><table style="margin-left: auto;margin-right: auto;width: 100%;" class="searchUIBasic" cellspacing="12"><tr><td class="font-x-large" align="left" colspan="2"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</strong></td></tr><?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value!=''){?><tr><td class="style1" align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td class="leftFormBorder1 importContents" width="40%" valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Step1.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><td class="leftFormBorder1 importContents" width="40%" valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Step2.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['DUPLICATE_HANDLING_NOT_SUPPORTED']->value!='true'){?><tr><td class="leftFormBorder1 importContents" colspan="2" valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Step3.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><?php }?><tr><td align="right" colspan="2"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Basic_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table></form></div><?php }} ?>