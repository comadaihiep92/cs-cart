<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:20
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\storefronts\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19902658185f27e340696002-07899936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8508a6b36924b119a42cc47bd82abb52c41af08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\storefronts\\manage.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19902658185f27e340696002-07899936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefronts' => 0,
    'search' => 0,
    'config' => 0,
    'is_storefronts_limit_reached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e3407173b3_79080147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e3407173b3_79080147')) {function content_5f27e3407173b3_79080147($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('open_selected_storefronts','close_selected_storefronts','delete_selected','mve_ultimate_license_required','add_storefront','add_storefront','storefronts'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          name="storefronts_list_form"
          class="<?php if (fn_check_form_permissions('')) {?>cm-hide-inputs<?php }?>"
    >

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefronts'=>$_smarty_tpl->tpl_vars['storefronts']->value,'search'=>$_smarty_tpl->tpl_vars['search']->value,'sort_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"),'sort_active_icon_class'=>"<i class='icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."'></i>",'sort_dummy_icon_class'=>"<i class='icon-dummy'></i>",'return_url'=>rawurlencode(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url'])),'is_readonly'=>false,'select_mode'=>"multiple"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"storefronts:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"storefronts:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['storefronts']->value) {?>
            <li>
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("open_selected_storefronts"),'dispatch'=>"dispatch[storefronts.m_open]",'form'=>"storefronts_list_form",'class'=>"cm-process-items cm-submit cm-confirm"));?>

            </li>
            <li>
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("close_selected_storefronts"),'dispatch'=>"dispatch[storefronts.m_close]",'form'=>"storefronts_list_form",'class'=>"cm-process-items cm-submit cm-confirm"));?>

            </li>
            <li>
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'text'=>$_smarty_tpl->__("delete_selected"),'dispatch'=>"dispatch[storefronts.m_delete]",'form'=>"storefronts_list_form"));?>

            </li>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"storefronts:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide"));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['is_storefronts_limit_reached']->value) {?>
        <?php $_smarty_tpl->tpl_vars['promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME'))), null, 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_override_meta'=>"btn cm-dialog-opener cm-dialog-auto-size",'tool_href'=>"functionality_restrictions.mve_ultimate_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("add_storefront"),'icon'=>"icon-plus",'meta_data'=>"data-ca-dialog-title='".((string)$_smarty_tpl->tpl_vars['promo_popup_title']->value)."'"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"storefronts.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_storefront"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"storefronts:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"storefronts:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"storefronts.manage",'search'=>$_smarty_tpl->tpl_vars['search']->value,'in_popup'=>false), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"storefronts:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("storefronts"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
