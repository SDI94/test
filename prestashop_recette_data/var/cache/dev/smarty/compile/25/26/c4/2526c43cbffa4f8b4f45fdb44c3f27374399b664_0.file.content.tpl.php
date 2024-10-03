<?php
/* Smarty version 4.3.4, created on 2024-10-03 17:43:45
  from '/var/www/html/admin5577fpkgfbnld7e2l2s/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66febbb14bd169_23235510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2526c43cbffa4f8b4f45fdb44c3f27374399b664' => 
    array (
      0 => '/var/www/html/admin5577fpkgfbnld7e2l2s/themes/new-theme/template/content.tpl',
      1 => 1727103393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66febbb14bd169_23235510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
