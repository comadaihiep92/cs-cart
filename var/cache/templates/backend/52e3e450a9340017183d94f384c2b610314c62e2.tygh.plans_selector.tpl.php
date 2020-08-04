<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:18:51
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_plans\views\vendor_plans\components\plans_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15645464565f27902b7050e1-33638772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e3e450a9340017183d94f384c2b610314c62e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_plans\\views\\vendor_plans\\components\\plans_selector.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15645464565f27902b7050e1-33638772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'current_plan_id' => 0,
    'plans' => 0,
    'plan' => 0,
    'current' => 0,
    'error' => 0,
    'commissionRound' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27902b72d186_84081942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27902b72d186_84081942')) {function content_5f27902b72d186_84081942($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.current_plan','vendor_plans.not_available','vendor_plans.','vendor_plans.products_limit_value','vendor_plans.products_limit_unlimited','vendor_plans.revenue_up_to_value','vendor_plans.revenue_up_to_unlimited','vendor_plans.vendor_store','vendor_plans.transaction_fee_value','vendor_plans.plan_will_be_change_text'));
?>
<ul class="vendor-plans inline cm-vendor-plans-selector">
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-vendor-plans-selector-value" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_plan_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-default-plan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_plan_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['current_plan_id']->value, null, 0);?>
        <li class="vendor-plans-item <?php if ($_smarty_tpl->tpl_vars['plan']->value['avail_errors']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['current']->value) {?>active <?php }?>" data-ca-plan-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['current']->value) {?>
                <div class="vendor-plans-status">
                   <?php echo $_smarty_tpl->__("vendor_plans.current_plan");?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['plan']->value['avail_errors']) {?>
                <p class="vendor-plans-status not-available"><?php echo $_smarty_tpl->__("vendor_plans.not_available");?>
</p>
            <?php }?>
            <div class="vendor-plan-content<?php if ($_smarty_tpl->tpl_vars['current']->value) {?> vendor-plan-current<?php }?>">
                <?php if (!$_smarty_tpl->tpl_vars['plan']->value['avail_errors']&&$_smarty_tpl->tpl_vars['plan']->value['description']) {?>
                    <p class="vendor-plan-descr"><?php echo $_smarty_tpl->tpl_vars['plan']->value['description'];?>
</p>
                <?php }?>
                
                <h3 class="vendor-plan-header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['plan']->value['avail_errors']) {?>
                    <ul class="unstyled">
                        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plan']->value['avail_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                            <li>
                                <span class="text-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
                
                <span class="vendor-plan-price"><?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['price'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);
} else {
echo $_smarty_tpl->__('free');
}?></span><?php if ($_smarty_tpl->tpl_vars['plan']->value['periodicity']!='onetime') {?><span class="vendor-plan-price-period">/&nbsp;<?php echo $_smarty_tpl->__("vendor_plans.".((string)$_smarty_tpl->tpl_vars['plan']->value['periodicity']));?>
</span><?php }?>
                
                <div class="vendor-plan-params">
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['products_limit']) {?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_value",array("[products]"=>$_smarty_tpl->tpl_vars['plan']->value['products_limit']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'])) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("revenue", null, null); ob_start(); ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['revenue_limit']), 0);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_value",array("[revenue]"=>Smarty::$_smarty_vars['capture']['revenue']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_unlimited");?>

                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?>
                        <p><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
</p>
                    <?php }?>
                    <p>

                        <?php $_smarty_tpl->tpl_vars['commissionRound'] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value->commissionRound(), null, 0);?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("fee_value", null, null); ob_start(); ?>
                            <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value>0) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commissionRound']->value, ENT_QUOTES, 'UTF-8');?>
%
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['plan']->value->fixed_commission>0.0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value>0) {?> + <?php }?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->fixed_commission), 0);?>

                            <?php }?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php if (($_smarty_tpl->tpl_vars['plan']->value->fixed_commission>0.0)||($_smarty_tpl->tpl_vars['commissionRound']->value>0)) {?>
                            <?php ob_start();
echo Smarty::$_smarty_vars['capture']['fee_value'];
$_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_plans.transaction_fee_value",array("[value]"=>$_tmp6));?>

                        <?php }?>
                    </p>
                </div>
                
            </div>
        </li>
    <?php } ?>
</ul>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $){
    $(document).ready(function(){
        $(document).on('click', '.cm-vendor-plans-selector > li[data-ca-plan-id]:not(.disabled)', function(){
            var container = $('.cm-vendor-plans-selector');
            container.find('li').removeClass('active');
            var plan_id = $(this).addClass('active').data('caPlanId');
            var input = container.find('input.cm-vendor-plans-selector-value');
            input.val(plan_id);
            
            // Submit buttons
            var buttons = $('.cm-submit[data-ca-target-form="company_update_form"]');
            if (plan_id != input.data('caDefaultPlan')) {
                buttons.addClass('cm-confirm');
                buttons.data('ca-confirm-text', "<?php echo strtr($_smarty_tpl->__("vendor_plans.plan_will_be_change_text"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
            } else {
                buttons.removeClass('cm-confirm');
            }
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
