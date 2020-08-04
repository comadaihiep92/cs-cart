<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:39
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\profile_fields\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19859004255f27e35323e8b1-80974254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301b9eb9158538e2cd72df6088512fd3444c5e87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\profile_fields\\manage.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19859004255f27e35323e8b1-80974254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_inputs' => 0,
    'profile_type' => 0,
    'profile_fields_areas' => 0,
    'profile_fields' => 0,
    'check_items_col_width' => 0,
    'position_col_width' => 0,
    'description_col_width' => 0,
    'type_col_width' => 0,
    'tools_col_width' => 0,
    'total_width' => 0,
    'rest_width' => 0,
    'profile_types' => 0,
    'area_col_width' => 0,
    'area' => 0,
    'section' => 0,
    'profile_fields_sections' => 0,
    '_colspan' => 0,
    'is_deprecated' => 0,
    'fields' => 0,
    'field' => 0,
    '_show' => 0,
    '_required' => 0,
    'custom_fields' => 0,
    'update_link_text' => 0,
    'extra_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e35332cf04_50247023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e35332cf04_50247023')) {function content_5f27e35332cf04_50247023($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sizeof')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.sizeof.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cs-cart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','position_short','description','type','show','required','expand_section','expand_section','collapse_section','collapse_section','deprecated','position_short','description','type','checkbox','input_field','radiogroup','selectbox','textarea','date','email','zip_postal_code','phone','country','state','address_type','vendor_terms','show','required','delete','no_items','add_field','profile_fields'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->tpl_vars["update_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
    <?php if (fn_check_form_permissions('')) {?>
        <?php $_smarty_tpl->tpl_vars["update_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php }?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="fields_form" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="profile_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <?php echo smarty_function_math(array('equation'=>"x + 5",'assign'=>"_colspan",'x'=>smarty_modifier_sizeof($_smarty_tpl->tpl_vars['profile_fields_areas']->value)),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
        <?php $_smarty_tpl->tpl_vars['check_items_col_width'] = new Smarty_variable(5, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['position_col_width'] = new Smarty_variable(10, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['description_col_width'] = new Smarty_variable(30, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['type_col_width'] = new Smarty_variable(10, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tools_col_width'] = new Smarty_variable(5, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['check_items_col_width']->value+$_smarty_tpl->tpl_vars['position_col_width']->value+$_smarty_tpl->tpl_vars['description_col_width']->value+$_smarty_tpl->tpl_vars['type_col_width']->value+$_smarty_tpl->tpl_vars['tools_col_width']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['rest_width'] = new Smarty_variable(100-$_smarty_tpl->tpl_vars['total_width']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['area_col_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['rest_width']->value/smarty_modifier_count($_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"]), null, 0);?>
        <div class="table-responsive-wrapper" id="profile_fields">
            <table width="100%" class="table table-middle table--relative table-responsive">
                <thead>
                <tr>
                    <th class="mobile-hide" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['check_items_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
                    <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("description");?>
</th>
                    <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("type");?>
</th>
                    <?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
                        <th class="center" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['area']->value);?>
<br/><?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>

                        </th>
                    <?php } ?>
                    <th class="mobile-hide" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tools_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">&nbsp;</th>
                </tr>
                </thead>
            </table>
            <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['fields']->key;
?>
            <table width="100%" class="table table-middle table--relative table-responsive profile-fields__section">
                <?php if ($_smarty_tpl->tpl_vars['section']->value!=smarty_modifier_enum("ProfileFieldSections::ESSENTIALS")) {?>
                    <input class="js-profile-field-position" type="hidden" name="profile_field_sections[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["section_id"], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["position"], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php $_smarty_tpl->tpl_vars['is_deprecated'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["status"]==smarty_modifier_enum("ProfileFieldSections::STATUS_DEPRECATED"), null, 0);?>
                    <tr>
                        <td colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-header">
                            <h5>
                                <span alt="<?php echo $_smarty_tpl->__("expand_section");?>
" title="<?php echo $_smarty_tpl->__("expand_section");?>
" id="on_section_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if (!$_smarty_tpl->tpl_vars['is_deprecated']->value) {?>hidden<?php }?>"><span class="icon-caret-right"> </span></span>
                                <span alt="<?php echo $_smarty_tpl->__("collapse_section");?>
" title="<?php echo $_smarty_tpl->__("collapse_section");?>
" id="off_section_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if ($_smarty_tpl->tpl_vars['is_deprecated']->value) {?> hidden<?php }?>"><span class="icon-caret-down"> </span></span>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["section_name"], ENT_QUOTES, 'UTF-8');?>

                                <?php if ($_smarty_tpl->tpl_vars['is_deprecated']->value) {?>
                                    (<?php echo mb_strtolower($_smarty_tpl->__("deprecated"), 'UTF-8');?>
)
                                <?php }?>
                            </h5>
                        </td>
                    </tr>
                    <tbody id="section_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['is_deprecated']->value) {?>class="hidden"<?php }?>>
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <tr data-ca-profile-fields-row="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" data-ca-profile-fields-section="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <td class="center mobile-hide" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['check_items_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <?php if ($_smarty_tpl->tpl_vars['section']->value!=smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")&&$_smarty_tpl->tpl_vars['field']->value['is_default']!="Y") {?>
                                    <?php $_smarty_tpl->tpl_vars["extra_fields"] = new Smarty_variable(true, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["custom_fields"] = new Smarty_variable(true, null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['matching_id']) {?>
                                        <input type="hidden" name="matches[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                    <?php }?>
                                    <input type="checkbox" name="field_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item"/>
                                <?php }?>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <input class="input-micro input-hidden" type="text" size="3" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("description");?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <a href="<?php echo htmlspecialchars(fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ct-field-section="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </td>
                            <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("type");?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profile_fields:field_type_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profile_fields:field_type_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::CHECKBOX"), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp1) {
echo $_smarty_tpl->__("checkbox");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::INPUT"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp2) {
echo $_smarty_tpl->__("input_field");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::RADIO"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp3) {
echo $_smarty_tpl->__("radiogroup");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp4) {
echo $_smarty_tpl->__("selectbox");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA"), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp5) {
echo $_smarty_tpl->__("textarea");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::DATE"), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp6) {
echo $_smarty_tpl->__("date");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::EMAIL"), ENT_QUOTES, 'UTF-8');
$_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp7) {
echo $_smarty_tpl->__("email");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE"), ENT_QUOTES, 'UTF-8');
$_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp8) {
echo $_smarty_tpl->__("zip_postal_code");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::PHONE"), ENT_QUOTES, 'UTF-8');
$_tmp9=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp9) {
echo $_smarty_tpl->__("phone");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::COUNTRY"), ENT_QUOTES, 'UTF-8');
$_tmp10=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp10) {?><a href="<?php echo htmlspecialchars(fn_url("countries.manage"), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("country");?>
&nbsp;&rsaquo;&rsaquo;</a>
                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::STATE"), ENT_QUOTES, 'UTF-8');
$_tmp11=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp11) {?><a href="<?php echo htmlspecialchars(fn_url("states.manage"), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("state");?>
&nbsp;&rsaquo;&rsaquo;</a>
                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE"), ENT_QUOTES, 'UTF-8');
$_tmp12=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp12) {
echo $_smarty_tpl->__("address_type");?>

                                <?php } else {?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS"), ENT_QUOTES, 'UTF-8');
$_tmp13=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==$_tmp13) {
echo $_smarty_tpl->__("vendor_terms");?>

                                <?php }}}}}}}}}}}}}?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profile_fields:field_type_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][section]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][matching_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </td>

                            <?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['_show'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['area']->value)."_show", null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_required'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['area']->value)."_required", null, 0);?>
                                <td class="center" data-th="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['area']->value);?>
 (<?php echo $_smarty_tpl->__("show");?>
 / <?php echo $_smarty_tpl->__("required");?>
)" data-ca-profile-fields-area-group="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profile_fields:field_settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profile_fields:field_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="company"&&$_smarty_tpl->tpl_vars['field']->value['profile_type']==smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
                                        <input type="radio" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-switch-availability"/>
                                    <?php } else { ?>
                                        <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-switch-availability" data-ca-profile-fields-area="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                    <?php }?>
                                    <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="company"&&$_smarty_tpl->tpl_vars['field']->value['profile_type']==smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>Y<?php } else { ?>N<?php }?>"/>
                                    <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="N"||($_smarty_tpl->tpl_vars['field']->value['field_name']=="company"&&$_smarty_tpl->tpl_vars['field']->value['profile_type']==smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>disabled="disabled"<?php }?> data-ca-profile-fields-area="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                    </span>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profile_fields:field_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </td>
                            <?php } ?>
                            <td class="nowrap mobile-hide" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tools_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profile_fields.delete?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."&profile_type=".((string)$_smarty_tpl->tpl_vars['profile_type']->value),'method'=>"POST"));?>
</li>
                                    <?php }?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['update_link_text']->value,'href'=>fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']))));?>
</li>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <div class="hidden-tools">
                                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                </div>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->tpl_vars["custom_fields"] = new Smarty_variable(false, null, 0);?>
                    <?php } ?>
                    </tbody>
                <?php }?>
                <?php } ?>
            </table>
            <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
            <?php }?>
        </div>
    </form>
    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['profile_type']->value) {?><?php echo "?profile_type=";?><?php echo (string)$_smarty_tpl->tpl_vars['profile_type']->value;?><?php }
$_tmp14=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"profile_fields.add".$_tmp14,'prefix'=>"top",'title'=>$_smarty_tpl->__("add_field"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['extra_fields']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[profile_fields.m_delete]",'form'=>"fields_form"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profile_fields.m_update]",'but_role'=>"action",'but_target_form'=>"fields_form",'but_meta'=>"cm-submit"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/profile_fields.js"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("profile_fields"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
