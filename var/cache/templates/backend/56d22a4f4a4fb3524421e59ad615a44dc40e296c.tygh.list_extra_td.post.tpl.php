<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:17:15
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_plans\hooks\companies\list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9480378755f278fcbaf0fb5-77530424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d22a4f4a4fb3524421e59ad615a44dc40e296c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\companies\\list_extra_td.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9480378755f278fcbaf0fb5-77530424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f278fcbaf2545_72637152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f278fcbaf2545_72637152')) {function content_5f278fcbaf2545_72637152($_smarty_tpl) {?><td class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>
