<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:13:20
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\storefronts\components\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5515539755f27e340898c08-61212941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4a76944e10d1a2190ab91c372ce744849943fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\storefronts\\components\\list.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5515539755f27e340898c08-61212941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefronts' => 0,
    'select_mode' => 0,
    'sort_url' => 0,
    'search' => 0,
    'sort_active_icon_class' => 0,
    'sort_dummy_icon_class' => 0,
    'is_readonly' => 0,
    'storefront' => 0,
    'force_selector_display' => 0,
    'get_company_ids' => 0,
    'get_language_ids' => 0,
    'get_currency_ids' => 0,
    'get_country_codes' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f27e3408d6734_24561750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f27e3408d6734_24561750')) {function content_5f27e3408d6734_24561750($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','url','storefront_status','ttc_stores_status','no_data'));
?>

<?php if ($_smarty_tpl->tpl_vars['storefronts']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
            <thead>
            <tr>
                <th class="mobile-hide" width="1%">
                    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value==="multiple") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                </th>
                <th>
                    <a class="cm-ajax"
                       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['sort_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-target-id="pagination_contents"
                    >
                        <?php echo $_smarty_tpl->__("name");?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_active_icon_class']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_dummy_icon_class']->value;?>

                        <?php }?>
                    </a>
                </th>

                <th>
                    <a class="cm-ajax"
                       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['sort_url']->value)."&sort_by=url&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-target-id="pagination_contents"
                    >
                        <?php echo $_smarty_tpl->__("url");?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="url") {?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_active_icon_class']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_dummy_icon_class']->value;?>

                        <?php }?>
                    </a>
                </th>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"storefronts:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"storefronts:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"storefronts:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php if (!$_smarty_tpl->tpl_vars['is_readonly']->value) {?>
                    <th width="5%" class="nowrap" >
                        &nbsp;
                    </th>
                <?php }?>

                <th width="15%" class="right">
                    <a class="cm-ajax"
                       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['sort_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                       data-ca-target-id="pagination_contents"
                    >
                        <?php echo $_smarty_tpl->__("storefront_status");?>

                        <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_stores_status")), 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_active_icon_class']->value;?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['sort_dummy_icon_class']->value;?>

                        <?php }?>
                    </a>
                </th>
            </tr>
            </thead>

            <?php  $_smarty_tpl->tpl_vars['storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->key => $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['is_readonly']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/list_item_readonly.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront'=>$_smarty_tpl->tpl_vars['storefront']->value,'select_mode'=>$_smarty_tpl->tpl_vars['select_mode']->value,'force_selector_display'=>$_smarty_tpl->tpl_vars['force_selector_display']->value,'get_company_ids'=>$_smarty_tpl->tpl_vars['get_company_ids']->value,'get_language_ids'=>$_smarty_tpl->tpl_vars['get_language_ids']->value,'get_currency_ids'=>$_smarty_tpl->tpl_vars['get_currency_ids']->value,'get_country_codes'=>$_smarty_tpl->tpl_vars['get_country_codes']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/list_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront'=>$_smarty_tpl->tpl_vars['storefront']->value,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'select_mode'=>$_smarty_tpl->tpl_vars['select_mode']->value,'force_selector_display'=>$_smarty_tpl->tpl_vars['force_selector_display']->value,'get_company_ids'=>$_smarty_tpl->tpl_vars['get_company_ids']->value,'get_language_ids'=>$_smarty_tpl->tpl_vars['get_language_ids']->value,'get_currency_ids'=>$_smarty_tpl->tpl_vars['get_currency_ids']->value,'get_country_codes'=>$_smarty_tpl->tpl_vars['get_country_codes']->value), 0);?>

                <?php }?>
            <?php } ?>
        </table>
    </div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<?php }} ?>
