<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 07:17:58
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\addons\vendor_communication\views\vendor_communication\threads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14017920255f278ff6a0e383-36931417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120fe8e753bea1c0f4ecca4280c8003a4375b333' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\addons\\vendor_communication\\views\\vendor_communication\\threads.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14017920255f278ff6a0e383-36931417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'config' => 0,
    'auth' => 0,
    'runtime' => 0,
    'threads' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'show_vendor_col' => 0,
    'thread' => 0,
    'has_new_message' => 0,
    'settings' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f278ff6aaaba3_52246499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f278ff6aaaba3_52246499')) {function content_5f278ff6aaaba3_52246499($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','customer','vendor','message','date','id','vendor_communication.ticket','customer','vendor','message','vendor_communication.you','administration','vendor','customer','delete','date','no_data','vendor_communication.message_center'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_vendor_col"] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A"&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="threads_list_form" id="threads_list_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
            <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive">
                <thead>
                <tr>
                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                        <th class="left">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
                    <?php }?>
                    <th width="1%" class="status-label">&nbsp;</th>
                    <th width="15%">
                        <a class="cm-ajax"
                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                            <?php echo $_smarty_tpl->__("id");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="thread") {?>
                                <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                            <?php }?>
                        </a>
                    </th>
                    <th width="15%">
                        <a class="cm-ajax"
                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                            <?php echo $_smarty_tpl->__("customer");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {?>
                                <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                            <?php }?>
                        </a>
                    </th>
                    <?php if ($_smarty_tpl->tpl_vars['show_vendor_col']->value) {?>
                    <th width="15%">
                        <a class="cm-ajax"
                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=company&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                            <?php echo $_smarty_tpl->__("vendor");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="company") {?>
                                <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                            <?php }?>
                        </a>
                    </th>
                    <?php }?>
                    <th width="45%"><?php echo $_smarty_tpl->__("message");?>
</th>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <th>&nbsp;</th>
                    <th width="9%">
                        <a class="cm-ajax"
                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                            <?php echo $_smarty_tpl->__("date");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="last_updated") {?>
                                <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                            <?php }?>
                        </a>
                    </th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['has_new_message'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']&&$_smarty_tpl->tpl_vars['thread']->value['user_status']==@constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE'), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['compnay_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                        <td class="left mobile-hide">
                            <input type="checkbox" name="thread_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
                        </td>
                    <?php }?>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                            <span class="status-new__label"></span>
                        <?php }?>
                    </td>
                    <td class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->__("vendor_communication.ticket");?>
 <bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                        </a>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                    </td>
                    <td class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['customer_email']) {?><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['thread']->value['customer_email']), ENT_QUOTES, 'UTF-8');?>
">@</a><?php }?>
                            <a href="<?php echo htmlspecialchars(fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['show_vendor_col']->value) {?>
                        <td data-th="<?php echo $_smarty_tpl->__("vendor");?>
">
                            <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" class="no-link">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </td>
                    <?php }?>
                    <td class="message-title <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("message");?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" class="no-link">
                            <strong>
                                <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                    <?php echo $_smarty_tpl->__("vendor_communication.you");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']=="A") {?>
                                    <?php echo $_smarty_tpl->__("administration");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']=="V") {?>
                                    <?php echo $_smarty_tpl->__("vendor");?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->__("customer");?>

                                <?php }?>
                            </strong>
                        </a>
                        <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" class="no-link">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </td>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <td class="right">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_delete", null, null); ob_start(); ?>
                                <li>
                                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"vendor_communication.delete_thread?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id']),'method'=>"POST"));?>

                                </li>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                                <?php echo Smarty::$_smarty_vars['capture']['tools_delete'];?>

                            <?php }?>
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
                    <td class="nowrap <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("date");?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" class="no-link">
                            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </td>
                    </tr>
                <?php } ?>
            </table>
            </div>
        </form>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__("vendor_communication.message_center"), null, 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                <li>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[vendor_communication.m_delete_thread]",'form'=>"threads_list_form"));?>

                </li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"vendor_communication.threads",'period'=>$_smarty_tpl->tpl_vars['search']->value['period']), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content_id'=>"manage_threads"), 0);?>

<?php }} ?>
