<?php
/* Smarty version 4.3.4, created on 2024-10-03 17:42:08
  from '/var/www/html/admin5577fpkgfbnld7e2l2s/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66febb504de2c0_38687126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f55ba3cd7e328d146e8b11d937f6c676c8a7c7' => 
    array (
      0 => '/var/www/html/admin5577fpkgfbnld7e2l2s/themes/default/template/content.tpl',
      1 => 1727103393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66febb504de2c0_38687126 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
