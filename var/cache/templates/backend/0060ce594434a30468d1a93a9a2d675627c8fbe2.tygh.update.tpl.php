<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:18:49
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\companies\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10502722635f2790290cde76-97456827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0060ce594434a30468d1a93a9a2d675627c8fbe2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\companies\\update.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10502722635f2790290cde76-97456827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'form_class' => 0,
    'id' => 0,
    'runtime' => 0,
    'clone_schema' => 0,
    'splitted_objects' => 0,
    's_object' => 0,
    'object_data' => 0,
    'object' => 0,
    'label' => 0,
    'theme' => 0,
    'current_theme' => 0,
    'current_style' => 0,
    'languages' => 0,
    'lang_code' => 0,
    'language' => 0,
    'excluded_fields' => 0,
    'company_settings' => 0,
    'item' => 0,
    'section' => 0,
    'countries_list' => 0,
    'shippings' => 0,
    'shipping_id' => 0,
    'shipping' => 0,
    'time_from' => 0,
    'time_to' => 0,
    'settings' => 0,
    'is_companies_limit_reached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2790291ca1d5_89100778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2790291ca1d5_89100778')) {function content_5f2790291ca1d5_89100778($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\function.split.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_puny_decode')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.puny_decode.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('use_existing_store','store','none','recommended','information','vendor_name','storefront_url','ttc_storefront_url','design','status','active','pending','new','disabled','language','create_administrator_account','settings','company','description','redirect_customer_from_storefront','entry_page','none','index','all_pages','countries','shipping_methods','available_for_vendor','shipping_methods','disabled','available_for_vendor','no_data','menu','view_vendor_products','view_vendor_categories','view_vendor_users','view_vendor_orders','vendors_statistics','balance','orders','sales','income','active_products','out_of_stock_products','delete','editing_vendor','new_vendor'));
?>
<?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['company_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>


<form class="form-horizontal form-edit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!fn_check_view_permissions("companies.update","POST")) {?>cm-hide-inputs<?php }?> <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>cm-ajax cm-comet cm-disable-check-changes<?php }?>" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="company_update_form" enctype="multipart/form-data"> 

<input type="hidden" name="fake" value="1" />
<input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="company_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />


<div id="content_detailed" class="hidden"> 
<fieldset>

<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['id']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("use_existing_store")), 0);?>


    <div class="control-group">
        <label class="control-label" for="elm_company_exists_store"><?php echo $_smarty_tpl->__("store");?>
:</label>
        <div class="controls">
            <input type="hidden" name="company_data[clone_from]" id="elm_company_exists_store" value="" onchange="fn_switch_store_settings(this);" />
            <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"companies.get_companies_list?show_all=Y&default_label=none",'text'=>$_smarty_tpl->__("none"),'result_elm'=>"elm_company_exists_store",'id'=>"exists_store_selector"), 0);?>

        </div>
    </div>

    <div id="clone_settings_container" class="hidden">

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['clone_schema']->value,'size'=>ceil(sizeof($_smarty_tpl->tpl_vars['clone_schema']->value)/2),'assign'=>"splitted_objects",'vertical_delimition'=>false,'preverse_keys'=>true),$_smarty_tpl);?>

    <div class="control-group">
        <div class="controls">
            <table cellpadding="10">
            <tr valign="top">
                <?php  $_smarty_tpl->tpl_vars["s_object"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s_object"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s_object"]->key => $_smarty_tpl->tpl_vars["s_object"]->value) {
$_smarty_tpl->tpl_vars["s_object"]->_loop = true;
?>
                    <td>
                    <ul class="unstyled">
                        <?php  $_smarty_tpl->tpl_vars["object_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["object_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["object"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_object']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["object_data"]->key => $_smarty_tpl->tpl_vars["object_data"]->value) {
$_smarty_tpl->tpl_vars["object_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["object"]->value = $_smarty_tpl->tpl_vars["object_data"]->key;
?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['object_data']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars["label"] = new Smarty_variable("clone_".((string)$_smarty_tpl->tpl_vars['object']->value), null, 0);?>
                                    <label class="checkbox">

                                        <input type="checkbox" name="company_data[clone][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['object_data']->value['checked_by_default']) {?>checked="checked"<?php }?> class="cm-item-s cm-dependence-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" <?php if ($_smarty_tpl->tpl_vars['object_data']->value['dependence']) {?>onchange="fn_check_dependence('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_data']->value['dependence'], ENT_QUOTES, 'UTF-8');?>
', this.checked)"<?php }?> />
                                    <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['label']->value);
if ($_smarty_tpl->tpl_vars['object_data']->value['tooltip']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['object_data']->value['tooltip'])), 0);
}
if ($_smarty_tpl->tpl_vars['object_data']->value['checked_by_default']) {?>&nbsp;<span class="muted">(<?php echo $_smarty_tpl->__("recommended");?>
)</span><?php }?></label>
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                    </td>
                <?php } ?>
            </tr></table>
            <p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"s",'style'=>"links"), 0);?>

            </p>
        </div>
    </div>
    </div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("information")), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:general_information")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:general_information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if (fn_allowed_for("ULTIMATE")) {?>
<div class="control-group">
    <label for="elm_company_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("vendor_name");?>
:</label>
    <div class="controls">
        <input type="text" name="company_data[company]" id="elm_company_name" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:storefronts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:storefronts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <label for="elm_company_storefront" class="control-label cm-required"><?php echo $_smarty_tpl->__("storefront_url");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_storefront_url")), 0);?>
:</label>
    <div class="controls">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        http://<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['company_data']->value['storefront']), ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
        <input type="text" name="company_data[storefront]" id="elm_company_storefront" size="32" value="<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['company_data']->value['storefront']), ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    <?php }?>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:storefronts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:storefronts_design")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:storefronts_design"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['company_data']->value['storefront_status'],'input_name'=>"company_data[storefront_status]"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/access_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'access_key'=>$_smarty_tpl->tpl_vars['company_data']->value['store_access_key'],'input_name'=>"company_data[store_access_key]"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/access_only_for_authorized_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_accessible_for_authorized_customers_only'=>$_smarty_tpl->tpl_vars['company_data']->value['is_accessible_for_authorized_customers_only'],'input_name'=>"company_data[is_accessible_for_authorized_customers_only]"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("design")), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'theme_url'=>"themes.manage?switch_company_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'theme'=>$_smarty_tpl->tpl_vars['theme']->value,'current_theme'=>$_smarty_tpl->tpl_vars['current_theme']->value,'current_style'=>$_smarty_tpl->tpl_vars['current_style']->value,'input_name'=>"company_data[theme_name]"), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:storefronts_design"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"C",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'include'=>array("company"),'nothing_extra'=>true), 0);?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"company_data[status]",'id'=>"company_data",'obj'=>$_smarty_tpl->tpl_vars['company_data']->value,'items_status'=>fn_get_predefined_statuses("companies",$_smarty_tpl->tpl_vars['company_data']->value['status'])), 0);?>

    <?php } else { ?>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <label class="radio"><input type="radio" checked="checked" /><?php if ($_smarty_tpl->tpl_vars['company_data']->value['status']=="A") {
echo $_smarty_tpl->__("active");
} elseif ($_smarty_tpl->tpl_vars['company_data']->value['status']=="P") {
echo $_smarty_tpl->__("pending");
} elseif ($_smarty_tpl->tpl_vars['company_data']->value['status']=="N") {
echo $_smarty_tpl->__("new");
} elseif ($_smarty_tpl->tpl_vars['company_data']->value['status']=="D") {
echo $_smarty_tpl->__("disabled");
}?></label>
            </div>
        </div>
    <?php }?>

    <div class="control-group">
        <label class="control-label" for="elm_company_language"><?php echo $_smarty_tpl->__("language");?>
:</label>
        <div class="controls">
        <select name="company_data[lang_code]" id="elm_company_language">
            <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_smarty_tpl->tpl_vars["lang_code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
 $_smarty_tpl->tpl_vars["lang_code"]->value = $_smarty_tpl->tpl_vars["language"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['lang_code']->value==$_smarty_tpl->tpl_vars['company_data']->value['lang_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
        </div>
    </div>
<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    function fn_switch_store_settings(elm)
    {
        jelm = Tygh.$(elm);
        var close = true;
        if (jelm.val() != 'all' && jelm.val() != '' && jelm.val() != 0) {
            close = false;
        }

        Tygh.$('#clone_settings_container').toggleBy(close);
    }

    function fn_check_dependence(object, enabled)
    {
        if (enabled) {
            Tygh.$('.cm-dependence-' + object).prop('checked', true).prop('readonly', true).on('click', function(e) {
                return false
            });
        } else {
            Tygh.$('.cm-dependence-' + object).prop('readonly', false).off('click');
        }
    }
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    

    <?php if (!fn_allowed_for("ULTIMATE")) {?>
        <div class="control-group">
            <label class="control-label" for="elm_company_vendor_admin"><?php echo $_smarty_tpl->__("create_administrator_account");?>
:</label>
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[is_create_vendor_admin]" id="elm_company_vendor_admin" checked="checked" value="Y" />
                </label>
            </div>
        </div>
    <?php }?>
<?php }?>


<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['excluded_fields'] = new Smarty_variable(array("company","company_description","accept_terms","admin_firstname","admin_lastname"), null, 0);?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:contact_information")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:contact_information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"C",'default_data_name'=>"company_data",'profile_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'exclude'=>$_smarty_tpl->tpl_vars['excluded_fields']->value,'nothing_extra'=>true), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:contact_information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:shipping_address")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:shipping_address"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:shipping_address"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php ob_start();
echo $_smarty_tpl->__("settings");
$_tmp1=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("company");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1.": ".$_tmp2), 0);?>


    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["field_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['company_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["field_id"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'section'=>"Company",'html_id'=>"field_".((string)$_smarty_tpl->tpl_vars['section']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['item']->value['object_id']),'html_name'=>"update[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]"), 0);?>

    <?php } ?>
<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:general_information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</fieldset>
</div> 





<div id="content_description" class="hidden"> 
<fieldset>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <label class="control-label" for="elm_company_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
    <div class="controls">
        <textarea id="elm_company_description" name="company_data[company_description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</fieldset>
</div> 



<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    
    <div id="content_logos" class="hidden">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:logos")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:logos"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/logos_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('logos'=>$_smarty_tpl->tpl_vars['company_data']->value['logos'],'company_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:logos"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    
<?php }?>


<?php if (fn_allowed_for("ULTIMATE")) {?>

<div id="content_regions" class="hidden">
    <fieldset>
        <div class="control-group">
            <div class="controls">
            <input type="hidden" name="company_data[redirect_customer]" value="N" checked="checked"/>
            <label class="checkbox"><input type="checkbox" name="company_data[redirect_customer]" id="sw_company_redirect" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['redirect_customer']=="Y") {?>checked="checked"<?php }?> value="Y" class="cm-switch-availability cm-switch-inverse" /><?php echo $_smarty_tpl->__("redirect_customer_from_storefront");?>
</label>
            </div>
        </div>

        <div class="control-group" id="company_redirect">
            <label class="control-label" for="elm_company_entry_page"><?php echo $_smarty_tpl->__("entry_page");?>
</label>
            <div class="controls">
            <select name="company_data[entry_page]" id="elm_company_entry_page" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['redirect_customer']=="Y") {?>disabled="disabled"<?php }?>>
                <option value="none" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['entry_page']=="none") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
                <option value="index" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['entry_page']=="index") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("index");?>
</option>
                <option value="all_pages" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['entry_page']=="all_pages") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all_pages");?>
</option>
            </select>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>"company_data[countries_list]",'first_data'=>$_smarty_tpl->tpl_vars['company_data']->value['countries_list'],'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['countries_list']->value), 0);?>

    </fieldset>
</div>


<?php }?>

<?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>

<div id="content_shipping_methods" class="hidden">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:shipping_methods")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:shipping_methods"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
        <input type="hidden" name="company_data[shippings]" value="" />
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead>
            <tr>
                <th width="50%"><?php echo $_smarty_tpl->__("shipping_methods");?>
</th>
                <th class="center"><?php echo $_smarty_tpl->__("available_for_vendor");?>
</th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shippings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping_id"]->value = $_smarty_tpl->tpl_vars["shipping"]->key;
?>
            <tr>
                <td data-th="<?php echo $_smarty_tpl->__("shipping_methods");?>
"><a href="<?php echo htmlspecialchars(fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipping']->value['status']=="D") {?> (<?php echo mb_strtolower($_smarty_tpl->__("disabled"), 'UTF-8');?>
)<?php }?></a></td>
                <td class="center" data-th="<?php echo $_smarty_tpl->__("available_for_vendor");?>
">
                    <input type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['id']->value||smarty_modifier_in_array($_smarty_tpl->tpl_vars['shipping_id']->value,$_smarty_tpl->tpl_vars['company_data']->value['shippings_ids'])) {?> checked="checked"<?php }?> name="company_data[shippings][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                </td>
            </tr>
            <?php } ?>
            </table>
        </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:shipping_methods"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php }?>

<div id="content_addons" class="hidden">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</form> 

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>"companies",'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:update_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:update_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("menu");?>
</h6>
    <ul class="nav nav-list">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:sidebar_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:sidebar_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li><a href="<?php echo htmlspecialchars(fn_url("products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>
</a></li>
        <?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <li><a href="<?php echo htmlspecialchars(fn_url("categories.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_categories");?>
</a></li>
        <?php }?>
        <li><a href="<?php echo htmlspecialchars(fn_url("profiles.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_users");?>
</a></li>
        <li><a href="<?php echo htmlspecialchars(fn_url("orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_orders");?>
</a></li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:sidebar_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div class="sidebar-row sidebar-vendor-statistics">
    <h6><?php echo $_smarty_tpl->__("vendors_statistics");?>
</h6>
    <ul class="unstyled">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:accounting_sidebar_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:accounting_sidebar_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars(fn_url("companies.balance?vendor=".((string)$_smarty_tpl->tpl_vars['id']->value)."&selected_section=withdrawals"), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['company_data']->value['balance']), 0);?>
</a>
                <span><?php echo $_smarty_tpl->__("balance");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars(fn_url("orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['orders_count'], ENT_QUOTES, 'UTF-8');?>
</a>
                <span><?php echo $_smarty_tpl->__("orders");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars(fn_url("orders.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&is_search=Y&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['company_data']->value['sales']), 0);?>
</a>
                <span><?php echo $_smarty_tpl->__("sales");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars(fn_url("companies.balance?vendor=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['company_data']->value['income']), 0);?>
</a>
                <span><?php echo $_smarty_tpl->__("income");?>
</span>
            </li>
            <li class="vendor-statistics">
                <a href="<?php echo htmlspecialchars(fn_url("products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&status=A&product_type[]=P"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</a>
                <span><?php echo $_smarty_tpl->__("active_products");?>
</span>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                <li class="vendor-statistics">
                    <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITHOUT_OPTIONS"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&amount_from=&amount_to=0&tracking[0]=".$_tmp3."&tracking[1]=".$_tmp4), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['out_of_stock'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                    <span><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</span>
                </li>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:accounting_sidebar_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<?php }?>
<?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:update_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"companies.delete?company_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.update]",'but_target_form'=>"company_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['is_companies_limit_reached']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"btn cm-promo-popup"), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.add]",'but_target_form'=>"company_update_form",'but_meta'=>"cm-comet"), 0);?>

        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->__("editing_vendor"),'title_end'=>$_smarty_tpl->tpl_vars['company_data']->value['company'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("new_vendor"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }?>
<?php }} ?>
