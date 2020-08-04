<?php /* Smarty version Smarty-3.1.21, created on 2020-08-01 14:39:36
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\help_tutorial\hooks\index\actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8102242615f2554781360e9-35229526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '366ad0d74c210bb7b3cb506dd8cb51a4d1eb4dbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\help_tutorial\\hooks\\index\\actions.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8102242615f2554781360e9-35229526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'sidebar_content' => 0,
    'sidebar_position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f255478159396_18890824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f255478159396_18890824')) {function content_5f255478159396_18890824($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('help_tutorial.need_help','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
<div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click <?php if (trim($_smarty_tpl->tpl_vars['sidebar_content']->value)!='') {
if ($_smarty_tpl->tpl_vars['sidebar_position']->value=="right") {?>pulled-left<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_position']->value=="left") {?>pulled-right<?php }
}?>" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
</div>
<?php }?><?php }} ?>
