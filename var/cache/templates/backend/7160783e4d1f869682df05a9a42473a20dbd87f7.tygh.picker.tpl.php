<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:21
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\pickers\companies\picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6279796875f27e3416cbf95-74848737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7160783e4d1f869682df05a9a42473a20dbd87f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\pickers\\companies\\picker.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6279796875f27e3416cbf95-74848737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'start_pos' => 0,
    'item_ids' => 0,
    'multiple' => 0,
    'show_add_button' => 0,
    'but_text' => 0,
    'lang_choose' => 0,
    'display' => 0,
    'picker_for' => 0,
    'extra_var' => 0,
    'checkbox_name' => 0,
    'default_name' => 0,
    'except_id' => 0,
    'extra_url' => 0,
    '_but_text' => 0,
    '_but_role' => 0,
    'runtime' => 0,
    'no_container' => 0,
    'positions' => 0,
    'input_id' => 0,
    'input_name' => 0,
    '_item_ids' => 0,
    'extra' => 0,
    'c_id' => 0,
    'hide_link' => 0,
    'hide_delete_button' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'radio_input_name' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e341753999_00423826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e341753999_00423826')) {function content_5f27e341753999_00423826($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cs-cart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_companies','choose','add_companies','choose','add_companies','add_companies','add_companies','position_short','name','no_items'));
?>
<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data_id']->value)===null||$tmp==='' ? "companies_list" : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['rnd']->value) {
echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);
}?>
<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["start_pos"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['start_pos']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value=='') {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(null, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&$_smarty_tpl->tpl_vars['multiple']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_add_button']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("add", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["lang_choose"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable("<i class=\"icon-\" title=\"".((string)$_smarty_tpl->tpl_vars['lang_choose']->value)."\"></i>", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("icon", null, 0);?>
    <?php }?>
    <div class="pull-right">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("companies.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener btn",'but_icon'=>"icon-plus"), 0);?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <?php if ($_smarty_tpl->tpl_vars['multiple']->value==true) {?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("checkbox", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("radio", null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_url"] = new Smarty_variable("&get_tree=multi_level", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['controller']!="companies") {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>choose-icon<?php } else { ?>button-container<?php }?>"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("add", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["lang_choose"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable("<i class=\"icon-\" title=\"".((string)$_smarty_tpl->tpl_vars['lang_choose']->value)."\"></i>", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("icon", null, 0);?>
        <?php }?>
    <div class="pull-right">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("companies.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_role'=>$_smarty_tpl->tpl_vars['_but_role']->value,'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"btn cm-dialog-opener"), 0);?>

    </div>
    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
    <?php }?>
    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("checkbox", null, 0);?>

    <?php if (!$_smarty_tpl->tpl_vars['extra_url']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_url"] = new Smarty_variable("&get_tree=multi_level", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['controller']!="companies") {?>
        <?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_but_role"] = new Smarty_variable("add", null, 0);?>
    <?php }?>
    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_companies") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['extra_var']->value&&$_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
    <div class="table-wrapper">
        <table width="100%" class="table table-middle table--relative">
        <thead>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
            <th width="100%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <?php } else { ?>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&!$_smarty_tpl->tpl_vars['item_ids']->value) {?>hidden<?php } elseif (!$_smarty_tpl->tpl_vars['multiple']->value) {
if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>cm-display-radio<?php }
}?> choose-category">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        <tr class="hidden">
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>">
    <?php }?>
            <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>m<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {
$_smarty_tpl->tpl_vars["_item_ids"] = new Smarty_variable($_smarty_tpl->tpl_vars['item_ids']->value, null, 0);
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['_item_ids']->value), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item_ids']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            </td>
        </tr>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="list") {?>
                <?php  $_smarty_tpl->tpl_vars["c_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c_id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c_id"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c_id"]->key => $_smarty_tpl->tpl_vars["c_id"]->value) {
$_smarty_tpl->tpl_vars["c_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_id"]->index++;
 $_smarty_tpl->tpl_vars["c_id"]->first = $_smarty_tpl->tpl_vars["c_id"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["c_id"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']++;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>false,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first'],'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration']+$_smarty_tpl->tpl_vars['start_pos']->value), 0);?>

                <?php }
if (!$_smarty_tpl->tpl_vars["c_id"]->_loop) {
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value), 0);?>

                <?php } ?>
            <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars["c_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c_id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c_id"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c_id"]->key => $_smarty_tpl->tpl_vars["c_id"]->value) {
$_smarty_tpl->tpl_vars["c_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_id"]->index++;
 $_smarty_tpl->tpl_vars["c_id"]->first = $_smarty_tpl->tpl_vars["c_id"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["c_id"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']++;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>$_smarty_tpl->tpl_vars['c_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first'],'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration']+$_smarty_tpl->tpl_vars['start_pos']->value), 0);?>

                <?php }
if (!$_smarty_tpl->tpl_vars["c_id"]->_loop) {
?>
                    <?php if (!$_smarty_tpl->tpl_vars['multiple']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>'','holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value), 0);?>

                    <?php }?>
                <?php } ?>
            <?php }?>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."company_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'radio_input_name'=>$_smarty_tpl->tpl_vars['radio_input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_delete_button'=>$_smarty_tpl->tpl_vars['hide_delete_button']->value,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0);?>

        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr class="no-items">
            <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>"><p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p></td>
        </tr>
        </tbody>
    </table>
    </div>
    <?php } else { ?></div><?php }?>
<?php }?>
<?php }} ?>
