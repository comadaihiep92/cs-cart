<?php /* Smarty version Smarty-3.1.21, created on 2020-08-01 14:44:36
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\orders\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17551680105f2554ff630029-77581347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12652765b1733e6195bd5ca64f3e3754d6a1d39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\orders\\manage.tpl',
      1 => 1595506636,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17551680105f2554ff630029-77581347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2554ff72a0a8_25351807',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2554ff72a0a8_25351807')) {function content_5f2554ff72a0a8_25351807($_smarty_tpl) {?><?php if (@constant('ACCOUNT_TYPE')=="vendor") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("views/orders/manage_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("views/orders/manage_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
