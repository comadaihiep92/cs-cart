<?php /* Smarty version Smarty-3.1.21, created on 2020-08-01 14:48:12
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_debt_payout\hooks\index\finance_statistic_balance.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13700000605f25567cdbc948-24765462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0448b071bfc621cc590e0770deac9d977d29eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\finance_statistic_balance.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13700000605f25567cdbc948-24765462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_pay_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f25567ce77ee6_74529315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f25567ce77ee6_74529315')) {function content_5f25567ce77ee6_74529315($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_pay_button']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
