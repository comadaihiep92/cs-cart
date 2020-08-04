<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:18:51
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_plans\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18755131325f27902b62e860-51948101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9de6ea7f30653d4a75689dce359b45857ee9ff15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18755131325f27902b62e860-51948101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_plans' => 0,
    'company_data' => 0,
    'plan' => 0,
    'current_plan' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27902b645e10_72674707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27902b645e10_72674707')) {function content_5f27902b645e10_72674707($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.choose_your_plan','vendor_plans.plan'));
?>
<div id="content_plan" class="hidden">

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <p><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</p>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/plans_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('plans'=>$_smarty_tpl->tpl_vars['vendor_plans']->value,'current_plan_id'=>$_smarty_tpl->tpl_vars['company_data']->value['plan_id'],'name'=>"company_data[plan_id]"), 0);?>

    <?php } else { ?>
        <div class="control-group">
            <label class="control-label" for="elm_company_plan"><?php echo $_smarty_tpl->__("vendor_plans.plan");?>
:</label>
            <div class="controls">
                <?php $_smarty_tpl->tpl_vars['current_plan'] = new Smarty_variable(null, null, 0);?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("vendor_plans", null, null); ob_start(); ?>
                    <?php  $_smarty_tpl->tpl_vars["plan"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plan"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plan"]->key => $_smarty_tpl->tpl_vars["plan"]->value) {
$_smarty_tpl->tpl_vars["plan"]->_loop = true;
?>
                        <?php if (($_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['company_data']->value['plan_id'])||(!$_smarty_tpl->tpl_vars['company_data']->value['plan_id']&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])) {?>
                            <?php $_smarty_tpl->tpl_vars['current_plan'] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value, null, 0);?>
                        <?php }?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if (($_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['company_data']->value['plan_id'])||(!$_smarty_tpl->tpl_vars['company_data']->value['plan_id']&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])) {?>selected="selected"<?php }?>data-ca-vendor-plans-storefronts="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['plan']->value['storefront_ids']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value->plan, ENT_QUOTES, 'UTF-8');?>
(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->price), 0);?>
)</option>
                    <?php } ?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <select name="company_data[plan_id]"
                        id="elm_company_plan"
                        class="cm-object-selector"
                        data-ca-vendor-plans-is-plan-selector="true"
                        data-ca-vendor-plans-selected-storefronts="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['current_plan']->value['storefront_ids']), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-vendor-plans-vendors-update-dialog-id="update_company_vendors_update_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                >
                    <?php echo Smarty::$_smarty_vars['capture']['vendor_plans'];?>

                </select>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/storefronts_update_for_vendor_dialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php }?>
</div>
<?php }} ?>
