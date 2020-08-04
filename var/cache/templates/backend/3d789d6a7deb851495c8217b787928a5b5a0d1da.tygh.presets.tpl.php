<?php /* Smarty version Smarty-3.1.21, created on 2020-08-01 14:41:54
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\storefronts\components\picker\presets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13033657525f255502a0ecf0-73231741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d789d6a7deb851495c8217b787928a5b5a0d1da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\storefronts\\components\\picker\\presets.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13033657525f255502a0ecf0-73231741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'is_enabled' => 0,
    'is_available_for_disaptch' => 0,
    'selected_storefront_id' => 0,
    'storefront_switcher_param_name' => 0,
    'show_all_storefront' => 0,
    'config' => 0,
    'preset_data' => 0,
    'storefront_picker_logo_img_class' => 0,
    'storefront' => 0,
    '_storefront_picker_logo_img_class' => 0,
    'storefront_switcher_data_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f255502a73733_93040864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f255502a73733_93040864')) {function content_5f255502a73733_93040864($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('show_all_storefronts','all_storefronts_short','all_storefronts_short','select_storefront','show_all_storefronts_with_count','all_storefronts'));
?>
<?php $_smarty_tpl->tpl_vars['is_enabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value["storefront.switcher.is_enabled"], null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_available_for_disaptch'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront.switcher.is_available_for_dispatch'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['is_enabled']->value&&$_smarty_tpl->tpl_vars['is_available_for_disaptch']->value) {?>
    <?php if ((fn_allowed_for("MULTIVENDOR:ULTIMATE"))) {?>
        <?php $_smarty_tpl->tpl_vars['selected_storefront_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['selected_storefront_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"] : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['storefront_switcher_param_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)===null||$tmp==='' ? "s_storefront" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['storefront_switcher_data_name'] = new Smarty_variable("storefront_id", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['selected_storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['storefront_switcher_param_name'] = new Smarty_variable("switch_company_id", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['storefront_switcher_data_name'] = new Smarty_variable("company_id", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['show_all_storefront'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_all_storefront']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['preset_data'] = new Smarty_variable(call_user_func($_smarty_tpl->tpl_vars['app']->value["storefront.switcher.preset_data.factory"],$_smarty_tpl->tpl_vars['selected_storefront_id']->value), null, 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("storefronts_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['show_all_storefront']->value) {?>
            <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],((string)$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)."=0")), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link"
                title="<?php echo $_smarty_tpl->__("show_all_storefronts");?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if (!$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
                        storefront__picker-logo-wrapper--active
                    <?php }?>">
                    <div class="storefront__picker-logo-text
                        <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->__("all_storefronts_short"), $tmp)>3) {?>storefront__picker-logo-text--small<?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>storefront__picker-logo-text--active<?php }?>">
                        <?php echo $_smarty_tpl->__("all_storefronts_short");?>

                    </div>
                </div>
            </a>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preset_data']->value['storefronts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->key => $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                <?php $_smarty_tpl->tpl_vars['storefront_picker_logo_img_class'] = new Smarty_variable("storefront__picker-logo-img--active ".((string)$_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class']->value), null, 0);?>
            <?php }?>

            <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],((string)$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)."=".((string)$_smarty_tpl->tpl_vars['storefront']->value[$_smarty_tpl->tpl_vars['storefront_switcher_data_name']->value]))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>storefront__picker-logo-link--active<?php }?>"
                title="<?php echo $_smarty_tpl->__("select_storefront",array("[store]"=>$_smarty_tpl->tpl_vars['storefront']->value['name']));?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>storefront__picker-logo-wrapper--active<?php }?>">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['storefront']->value['images'],'image_height'=>"64",'image_css_class'=>"storefront__picker-logo-img ".((string)$_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value),'show_detailed_link'=>false), 0);?>

                </div>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                <?php $_smarty_tpl->tpl_vars['storefront_picker_logo_img_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class']->value, null, 0);?>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['preset_data']->value['count']>$_smarty_tpl->tpl_vars['preset_data']->value['threshold']) {?>
        <div class="storefront__picker-logo-list js-storefront-switcher"
            data-ca-switcher-param-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-switcher-data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_switcher_data_name']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo Smarty::$_smarty_vars['capture']['storefronts_list'];?>

            <div class="dropdown storefront__picker-dropdown">
                <a class="dropdown-toggle storefront__picker-logo-link"
                    data-toggle="dropdown"
                    data-ca-dropdown-object-picker-autoopen=".object-picker__select--storefronts"
                    title="<?php echo $_smarty_tpl->__("show_all_storefronts_with_count",array("[count]"=>$_smarty_tpl->tpl_vars['preset_data']->value['count']));?>
">
                    <div class="storefront__picker-logo-wrapper">
                        <div class="storefront__picker-logo-text">
                            +<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['preset_data']->value['count']-$_smarty_tpl->tpl_vars['preset_data']->value['threshold']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu storefront__picker-dropdown-menu" id="storefront_picker_dropdown_menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>'','item_ids'=>array($_smarty_tpl->tpl_vars['selected_storefront_id']->value),'show_empty_variant'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value,'dropdown_parent_selector'=>"#storefront_picker_dropdown_menu",'empty_variant_text'=>$_smarty_tpl->__("all_storefronts"),'show_advanced'=>false), 0);?>

                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['preset_data']->value['count']>1) {?>
        <div class="storefront__picker-logo-list">
            <?php echo Smarty::$_smarty_vars['capture']['storefronts_list'];?>

        </div>
    <?php }?>
<?php }?><?php }} ?>
