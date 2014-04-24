<?php /* Smarty version Smarty-3.1.7, created on 2014-04-23 13:38:55
         compiled from "/opt/lampp/htdocs/igrow/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewTypes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13424617825357c26f6140c9-65998806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c479086e167936bee592da8e3d84311235693515' => 
    array (
      0 => '/opt/lampp/htdocs/igrow/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewTypes.tpl',
      1 => 1373768346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13424617825357c26f6140c9-65998806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5357c26f6c3c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357c26f6c3c1')) {function content_5357c26f6c3c1($_smarty_tpl) {?>
<div name='calendarViewTypes'><div id="calendarview-feeds" style="margin-left:10px;"><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Events" data-calendar-feed="Events" data-calendar-feed-css="fc-event-style1" > <span class="label fc-event-style1"><?php echo vtranslate('LBL_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Tasks" data-calendar-feed="Tasks" data-calendar-feed-css="fc-event-style2" > <span class="label fc-event-style2"><?php echo vtranslate('LBL_TODOS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Potentials" data-calendar-feed="Potentials" data-calendar-feed-css="fc-event-style3"> <span class="label fc-event-style3"><?php echo vtranslate('Potentials','Potentials');?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Contacts_Support_End_Date" data-calendar-feed="Contacts" data-calendar-feed-css="fc-event-style4" data-custom-data='{"fieldname":"support_end_date"}' /><span class="label fc-event-style4"><?php echo vtranslate('LBL_CONTACTS_SUPPORT_END_DATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Contacts_Birthday" data-calendar-feed="Contacts" data-calendar-feed-css="fc-event-style6" data-custom-data='{"fieldname":"birthday"}' /><span class="label fc-event-style6"><?php echo vtranslate('LBL_CONTACTS_BIRTH_DAY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Invoice" data-calendar-feed="Invoice" data-calendar-feed-css="fc-event-style5"> <span class="label fc-event-style5"><?php echo vtranslate('SINGLE_Invoice','Invoice');?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="Project" data-calendar-feed="Project" data-calendar-feed-css="fc-event-style7"> <span class="label fc-event-style7"><?php echo vtranslate('SINGLE_Project','Project');?>
</span></label><label class="checkbox"><input type="checkbox" data-calendar-sourcekey="ProjectTask" data-calendar-feed="ProjectTask" data-calendar-feed-css="fc-event-style8"> <span class="label fc-event-style8"><?php echo vtranslate('SINGLE_ProjectTask','ProjectTask');?>
</span></label></div></div>

<script type="text/javascript">
jQuery(document).ready(function() {
	Calendar_CalendarView_Js.initiateCalendarFeeds();
});
</script><?php }} ?>