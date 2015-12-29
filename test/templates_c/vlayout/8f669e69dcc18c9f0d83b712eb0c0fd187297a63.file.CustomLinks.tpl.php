<?php /* Smarty version Smarty-3.1.7, created on 2015-12-29 15:05:22
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/CustomLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20596324265682a1322dc8d8-42749116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f669e69dcc18c9f0d83b712eb0c0fd187297a63' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/CustomLinks.tpl',
      1 => 1451401500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20596324265682a1322dc8d8-42749116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5682a13232d7f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682a13232d7f')) {function content_5682a13232d7f($_smarty_tpl) {?><table id="md-custom-links-table">
<tr>
<td>
<div id="md-custom-links-toolbar">
	<h2><?php echo vtranslate('LBL_CUSTOM_LINKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>
	
	<ul id="md-custom-links-list">
	<li><?php echo vtranslate('HEADERSCRIPT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('HEADERCSS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('HEADERLINK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('LISTVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('LISTVIEWBASIC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('DETAILVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('DETAILVIEWBASIC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('DETAILVIEWWIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	</ul>
</div>
</td>
<td>
<div>
<ul id="md-custom-links-ul" class="md-custom-links-ul">
<!-- Custom links added with JS -->
</ul>
</div>
</td>
</table><?php }} ?>