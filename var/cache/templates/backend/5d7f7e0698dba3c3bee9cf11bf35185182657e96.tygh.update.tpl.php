<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:26
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\payments\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919475865f27e346c632d1-59384355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7f7e0698dba3c3bee9cf11bf35185182657e96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\payments\\update.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1919475865f27e346c632d1-59384355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment' => 0,
    'id' => 0,
    'allow_save' => 0,
    'is_sharing_enabled' => 0,
    'payment_processors' => 0,
    'processor' => 0,
    'templates' => 0,
    'full_path' => 0,
    'template' => 0,
    'usergroups' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'taxes' => 0,
    'tax' => 0,
    'add_storefront_text' => 0,
    'runtime' => 0,
    'hide_for_vendor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e346d12577_15155072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e346d12577_15155072')) {function content_5f27e346d12577_15155072($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','configure','storefronts','share','name','processor','offline','checkout','gateways','tools_addons_additional_payment_methods','template','tt_views_payments_update_template','none','usergroups','description','surcharge','surcharge_title','tt_views_payments_update_surcharge_title','taxes','tt_views_payments_update_taxes','payment_instructions','icon','add_storefronts','add_companies','all_storefronts'));
?>
<?php if ($_smarty_tpl->tpl_vars['payment']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['payment']->value['payment_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['payment']->value,"payments"), null, 0);?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="payments_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" class=" form-horizontal<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>">
<input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js cm-ajax <?php if (!$_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>hidden<?php }?>"><a <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>href="<?php echo htmlspecialchars(fn_url("payments.processor?payment_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->__("configure");?>
</a></li>
        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")) {?>
            <li id="tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("storefronts");?>
</a></li>
        <?php } elseif ($_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
            <li id="tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("share");?>
</a></li>
        <?php }?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:tabs_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:tabs_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:tabs_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>

<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset  data-ca-form-group="main">
        <div class="control-group" data-ca-form-group="name">
            <label for="elm_payment_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input id="elm_payment_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[payment]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div data-ca-form-group="company">
        <?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"payment_data[company_id]",'id'=>"payment_data_".((string)$_REQUEST['payment_id']),'selected'=>$_smarty_tpl->tpl_vars['payment']->value['company_id']), 0);?>

        <?php }?>
        </div>

        <div class="control-group" data-ca-form-group="processor">
            <label class="control-label" for="elm_payment_processor_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("processor");?>
:</label>
            <div class="controls">
                <select id="elm_payment_processor_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_data[processor_id]" onchange="fn_switch_processor(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, this.value);">
                    <option value=""><?php echo $_smarty_tpl->__("offline");?>
</option>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:processors_optgroups")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:processors_optgroups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <optgroup label="<?php echo $_smarty_tpl->__("checkout");?>
">
                        <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['processor']->value['type']=="C"||$_smarty_tpl->tpl_vars['processor']->value['type']=="B") {?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['processor']->value['processor_status']=="D") {?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php } ?>
                    </optgroup>
                    <optgroup label="<?php echo $_smarty_tpl->__("gateways");?>
">
                        <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['processor']->value['type']=="P") {?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['processor']->value['processor_status']=="D") {?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php } ?>
                    </optgroup>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:processors_optgroups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </select>
                <?php if (fn_check_permissions("addons","manage","admin")) {?>
                    <div class="well well-small help-block">
                        <?php echo $_smarty_tpl->__("tools_addons_additional_payment_methods",array("[url]"=>fn_url("addons.manage?type=not_installed")));?>

                    </div>
                <?php }?>
                <p id="elm_processor_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="description <?php if (!$_smarty_tpl->tpl_vars['payment_processors']->value[$_smarty_tpl->tpl_vars['payment']->value['processor_id']]['description']) {?>hidden<?php }?>"><br>
                    <small><?php echo $_smarty_tpl->tpl_vars['payment_processors']->value[$_smarty_tpl->tpl_vars['payment']->value['processor_id']]['description'];?>
</small>
                </p>
            </div>
        </div>

        <div class="control-group" data-ca-form-group="tpl">
            <label class="control-label" for="elm_payment_tpl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("template");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_payments_update_template")), 0);?>
:</label>
            <div class="controls">
                <select id="elm_payment_tpl_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_data[template]" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>disabled="disabled"<?php }?>>
                    <option value="views/orders/components/payments/empty.tpl"><?php echo $_smarty_tpl->__("none");?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['full_path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['full_path']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['full_path']->key => $_smarty_tpl->tpl_vars['full_path']->value) {
$_smarty_tpl->tpl_vars['full_path']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['full_path']->key;
?>
                        <?php if (!strpos($_smarty_tpl->tpl_vars['full_path']->value,"empty.tpl")) {?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['full_path']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']==$_smarty_tpl->tpl_vars['full_path']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
            <div class="control-group" data-ca-form-group="usergroup">
                <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"elm_payment_usergroup_".((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"payment_data[usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['payment']->value['usergroup_ids'],'list_mode'=>false), 0);?>

                </div>
            </div>
        <?php }?>

        <div class="control-group" data-ca-form-group="description">
            <label class="control-label" for="elm_payment_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <input id="elm_payment_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <div data-ca-form-group="update_divider"></div>

        <div class="control-group" data-ca-form-group="surcharge">
            <label class="control-label" for="elm_payment_surcharge_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("surcharge");?>
:</label>
                <div class="controls">
                    <input id="elm_payment_surcharge_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[p_surcharge]" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['p_surcharge'], ENT_QUOTES, 'UTF-8');?>
" size="4"> % + <input type="text" name="payment_data[a_surcharge]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['a_surcharge'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" size="4"> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</div>
        </div>

        <div class="control-group" data-ca-form-group="surcharge_title">
            <label class="control-label" for="elm_payment_surcharge_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("surcharge_title");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_payments_update_surcharge_title")), 0);?>
:</label>
            <div class="controls">
                <input id="elm_payment_surcharge_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[surcharge_title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['surcharge_title'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div class="control-group" data-ca-form-group="taxes">
        <label class="control-label"><?php echo $_smarty_tpl->__("taxes");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_payments_update_taxes")), 0);?>
:</label>
            <div class="controls">
                    <?php  $_smarty_tpl->tpl_vars["tax"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tax"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tax"]->key => $_smarty_tpl->tpl_vars["tax"]->value) {
$_smarty_tpl->tpl_vars["tax"]->_loop = true;
?>
                        <label for="elm_payment_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                            <input type="checkbox" name="payment_data[tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="elm_payment_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['payment']->value['tax_ids'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php }
if (!$_smarty_tpl->tpl_vars["tax"]->_loop) {
?>
                        <div class="text-type-value">&mdash;</div>
                    <?php } ?>
            </div>
        </div>

        <div class="control-group" data-ca-form-group="instructions">
            <label class="control-label" for="elm_payment_instructions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("payment_instructions");?>
:</label>
            <div class="controls">
                <textarea id="elm_payment_instructions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_data[instructions]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['instructions'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
            
        </div>

        <div data-ca-form-group="status">
        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"payment_data[status]",'id'=>"elm_payment_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['payment']->value), 0);?>

        <?php }?>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"payment_data[localization]",'id'=>"elm_payment_localization_".((string)$_smarty_tpl->tpl_vars['id']->value),'data_from'=>$_smarty_tpl->tpl_vars['payment']->value['localization']), 0);?>


        <div class="control-group" data-ca-form-group="icon">
            <label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
:</label>
            <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"payment_image",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'image_object_type'=>"payment",'image_pair'=>$_smarty_tpl->tpl_vars['payment']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>
</div>
        </div>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:properties")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </fieldset>
    <!--content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")||$_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
        <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_storefronts"), null, 0);?>
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_companies"), null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'input_name'=>"payment_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['payment']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0);?>

        <!--content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:tabs_extra_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:tabs_extra_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
-->
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:tabs_extra_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[payments.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>
<?php }?>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
