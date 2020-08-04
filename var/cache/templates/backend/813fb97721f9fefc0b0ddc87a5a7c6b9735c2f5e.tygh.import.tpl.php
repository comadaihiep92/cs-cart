<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:31:48
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\exim\import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10071463685f2793347bb135-99421667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '813fb97721f9fefc0b0ddc87a5a7c6b9735c2f5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\exim\\import.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10071463685f2793347bb135-99421667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pattern' => 0,
    'p_id' => 0,
    'note' => 0,
    'splitted_fields' => 0,
    'fields' => 0,
    'field' => 0,
    'f' => 0,
    'label' => 0,
    'o' => 0,
    'k' => 0,
    'vk' => 0,
    'vi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f279334835940_15588866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f279334835940_15588866')) {function content_5f279334835940_15588866($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\function.split.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_exim_import_notice','import_options','csv_delimiter','select_file','import','import_data'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["p_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['pattern']->value['pattern_id'], null, 0);?>
<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['notes']) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("local_notes", null, null); ob_start(); ?>
            <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pattern']->value['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->__($_smarty_tpl->tpl_vars['note']->value), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
                <hr />
            <?php } ?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['pattern']->value['name'],'notes'=>Smarty::$_smarty_vars['capture']['local_notes'],'notes_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'target'=>"#import_fields_".((string)$_smarty_tpl->tpl_vars['p_id']->value)), 0);?>

    <div id="import_fields_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
        <p class="p-notice"><?php echo $_smarty_tpl->__("text_exim_import_notice");?>
</p>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['pattern']->value['export_fields'],'size'=>5,'assign'=>"splitted_fields",'simple'=>true,'size_is_horizontal'=>true),$_smarty_tpl);?>

        <table class="table table-striped table--relative table-exim">
            <tr>
            <?php  $_smarty_tpl->tpl_vars["fields"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["fields"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["fields"]->key => $_smarty_tpl->tpl_vars["fields"]->value) {
$_smarty_tpl->tpl_vars["fields"]->_loop = true;
?>
                <td>
                    <ul class="unstyled">
                    <?php  $_smarty_tpl->tpl_vars["f"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["f"]->_loop = false;
 $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["f"]->key => $_smarty_tpl->tpl_vars["f"]->value) {
$_smarty_tpl->tpl_vars["f"]->_loop = true;
 $_smarty_tpl->tpl_vars["field"]->value = $_smarty_tpl->tpl_vars["f"]->key;
?>
                        <?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable(fn_exim_get_field_label($_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                        <li class="table-import-field"><?php if ($_smarty_tpl->tpl_vars['f']->value['required']) {?><strong><?php }?><p class="import-field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php if ($_smarty_tpl->tpl_vars['label']->value) {?><p class="import-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }
if ($_smarty_tpl->tpl_vars['f']->value['required']) {?></strong><?php }?></li>
                    <?php } ?>
                    </ul>
                </td>
            <?php } ?>
            </tr>
        </table>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("import_options"),'target'=>"#import_options_".((string)$_smarty_tpl->tpl_vars['p_id']->value)), 0);?>

    <div id="import_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_manage_layout_form" enctype="multipart/form-data" class="cm-ajax cm-comet form-horizontal form-edit">
    <input type="hidden" name="section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="pattern_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['pattern']->value['options']) {?>
    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pattern']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['o']->key;
?>
    <?php if (!$_smarty_tpl->tpl_vars['o']->value['export_only']) {?>
    <div class="control-group">
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['title']);
if ($_smarty_tpl->tpl_vars['o']->value['description']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['description'])), 0);
}?>:
        </label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['o']->value['type']=="checkbox") {?>
                <input type="hidden" name="import_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox" type="checkbox" name="import_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['o']->value['default_value']=="Y") {?>checked="checked"<?php }?> />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="input") {?>
                <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large" type="text" name="import_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="select") {?>
                <select name="import_options[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_smarty_tpl->tpl_vars['vk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['o']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['vk']->value = $_smarty_tpl->tpl_vars['vi']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value==$_smarty_tpl->tpl_vars['o']->value['default_value']) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['vi']->value);?>
</option>
                    <?php } ?>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['o']->value['notes']) {?>
                <p class="muted"><?php echo $_smarty_tpl->tpl_vars['o']->value['notes'];?>
</p>
            <?php }?>
        </div>
    </div>
    <?php }?>
    <?php } ?>
    <?php }?>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
        <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"import_options[delimiter]"), 0);?>
</div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("select_file");?>
:</label>
        <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"csv_file[0]",'prefix'=>$_smarty_tpl->tpl_vars['p_id']->value), 0);?>
</div>
    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <div class="cm-tab-tools" id="tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[exim.import]",'but_role'=>"submit-link",'but_target_form'=>((string)$_smarty_tpl->tpl_vars['p_id']->value)."_manage_layout_form",'but_meta'=>"cm-tab-tools"), 0);?>

            <!--tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    </form>
    </div>
<!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_smarty_tpl->tpl_vars['p_id']->value), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("import_data"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>
<?php }} ?>
