<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:18:50
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_plans\hooks\profiles\profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18535051245f27902a058c51-53479681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f89c3542a67c122e041a5662163006363724942' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profiles\\profile_fields.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18535051245f27902a058c51-53479681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27902a05bb60_50766545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27902a05bb60_50766545')) {function content_5f27902a05bb60_50766545($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <!--hide vendor plan field in admin area-->
<?php }?>
<?php }} ?>
