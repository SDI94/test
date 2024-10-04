<?php
/* Smarty version 4.3.4, created on 2024-10-04 10:09:25
  from '/var/www/html/admin584nyforu6wy8dk9gbu/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ffa2b52160b9_60392954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86fdb5cd9acc06326ca9961ce4625bd942ffce1b' => 
    array (
      0 => '/var/www/html/admin584nyforu6wy8dk9gbu/themes/default/template/content.tpl',
      1 => 1727103393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ffa2b52160b9_60392954 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
