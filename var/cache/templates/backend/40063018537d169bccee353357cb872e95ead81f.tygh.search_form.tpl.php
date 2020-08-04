<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:21
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\storefronts\components\search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13667719475f27e341526170-66681651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40063018537d169bccee353357cb872e95ead81f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\storefronts\\components\\search_form.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13667719475f27e341526170-66681651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'class' => 0,
    'select_mode' => 0,
    'extra' => 0,
    'search' => 0,
    'languages' => 0,
    'language' => 0,
    'lang' => 0,
    'currencies' => 0,
    'currency' => 0,
    'all_countries' => 0,
    'country_code' => 0,
    'country' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e34156a7b4_90069014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e34156a7b4_90069014')) {function content_5f27e34156a7b4_90069014($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','name','url','status','all','languages','currencies','countries','companies','all_companies'));
?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
        <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>
<form name="storefronts_search_form"
      action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
      method="get"
      class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden"
           name="select_mode"
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_mode']->value, ENT_QUOTES, 'UTF-8');?>
"
    />

    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


        <div class="sidebar-field">
            <label for="elm_name"
            ><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text"
                   name="name"
                   id="elm_name"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="sidebar-field">
            <label for="elm_url"
            ><?php echo $_smarty_tpl->__("url");?>
</label>
            <input type="text"
                   name="url"
                   id="elm_url"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="sidebar-field">
            <label for="elm_status"
            ><?php echo $_smarty_tpl->__("status");?>
</label>
            <select name="status"
                    id="elm_status"
            >
                <option value=""
                ><?php echo $_smarty_tpl->__("all");?>
</option>
                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['status']===smarty_modifier_enum("StorefrontStatuses::OPEN")) {?>
                            selected
                        <?php }?>
                ><?php echo htmlspecialchars("ON", ENT_QUOTES, 'UTF-8');?>
</option>
                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['status']===smarty_modifier_enum("StorefrontStatuses::CLOSED")) {?>
                            selected
                        <?php }?>
                ><?php echo htmlspecialchars("OFF", ENT_QUOTES, 'UTF-8');?>
</option>
            </select>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
        <div class="row-fluid">
            <div class="group span6 form-horizontal">
                <div class="control-group">
                    <label class="control-label"
                           for="elm_languages"
                    ><?php echo $_smarty_tpl->__("languages");?>
</label>
                    <div class="controls">
                        <select name="language_ids[]"
                                multiple="multiple"
                                id="elm_languages"
                        >
                            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['lang']->value['lang_id'],$_smarty_tpl->tpl_vars['search']->value['language_ids'])) {?>
                                            selected
                                        <?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="group span6 form-horizontal">
                <div class="control-group">
                    <label class="control-label"
                           for="elm_currencies"
                    ><?php echo $_smarty_tpl->__("currencies");?>
</label>
                    <div class="controls">
                        <select name="currency_ids[]"
                                multiple="multiple"
                                id="elm_currencis"
                        >
                            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['currency']->value['currency_id'],$_smarty_tpl->tpl_vars['search']->value['currency_ids'])) {?>
                                            selected
                                        <?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="group span12 form-horizontal">
                <div class="control-group">
                    <label for="elm_countries"
                           class="control-label"
                    ><?php echo $_smarty_tpl->__("countries");?>
</label>
                    <div class="controls">
                        <select name="country_codes[]"
                                multiple="multiple"
                                id="elm_countries"
                                size="10"
                        >
                            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['country_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['country_code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_code']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['country_code']->value,$_smarty_tpl->tpl_vars['search']->value['country_codes'])) {?>
                                            selected
                                        <?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="group span12 form-horizontal">
                <div class="control-group">
                    <label for="elm_companies"
                           class="control-label"
                    ><?php echo $_smarty_tpl->__("companies");?>
</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_ids'],'view_mode'=>"list",'input_name'=>"company_ids",'checkbox_name'=>"company_ids",'no_item_text'=>$_smarty_tpl->__("all_companies")), 0);?>

                    </div>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"storefronts",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value,'not_saved'=>true), 0);?>

</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div>
<?php }?>
<?php }} ?>
