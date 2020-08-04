<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:09
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\manage_mainbox_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16426857565f27e3350a2483-75397175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c46b0e8a9e242096883062dc4bea9fc5afb7edc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\manage_mainbox_title.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16426857565f27e3350a2483-75397175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e3350b5369_64383172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e3350b5369_64383172')) {function content_5f27e3350b5369_64383172($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]['title'], ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php }} ?>
