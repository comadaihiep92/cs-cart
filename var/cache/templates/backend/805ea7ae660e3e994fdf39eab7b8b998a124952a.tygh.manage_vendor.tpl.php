<?php /* Smarty version Smarty-3.1.21, created on 2020-08-05 13:24:52
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\views\orders\manage_vendor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19441088035f25567fbc0ba8-29059318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805ea7ae660e3e994fdf39eab7b8b998a124952a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\views\\orders\\manage_vendor.tpl',
      1 => 1596623090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19441088035f25567fbc0ba8-29059318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f25567fcec6c9_20914847',
  'variables' => 
  array (
    'runtime' => 0,
    'statuses' => 0,
    'config' => 0,
    'search' => 0,
    'orders' => 0,
    'total_pages' => 0,
    'display_totals' => 0,
    'totals' => 0,
    'page_title' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f25567fcec6c9_20914847')) {function content_5f25567fcec6c9_20914847($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_admin_new_orders','orders','for_this_page_orders','gross_total','totally_paid','for_all_found_orders','gross_total','totally_paid','add_order','bulk_print_invoice','bulk_print_pdf','bulk_print_packing_slip','view_purchased_products','export_selected'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="new") {?>
    <p><?php echo $_smarty_tpl->__("text_admin_new_orders");?>
</p>
<?php }?>

<?php $_smarty_tpl->tpl_vars['order_status_descr'] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),true,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_statuses'] = new Smarty_variable(fn_get_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['statuses']->value,true,true), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.manage",'view_type'=>"orders"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.manage"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="orders__header">
    <div class="row">
        <div class="col-xs-7">
            <ul class="nav nav-tabs">
                <li class="tab__li active" data-tab="tab1">
                    <a href="#new" class="tab__link" title="New"  >
                        <span class="icon new-orders-icon"></span>
                        <span>New</span>
                        <span class="number number--order">1</span>
                    </a>
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab2" >
                    <a href="#packing" class="tab__link" title="Packing" >
                        <span class="icon preparing-orders-icon"></span>
                        <span>Packing</span>
                        <span class="number number--packing">1</span>
                    </a>

                    
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab3" >
                    <a href="#ready" class="tab__link" title="Ready" >
                        <span class="icon ready-orders-icon"></span>
                        <span>Ready</span>
                        <span class="number number--ready">1</span>
                    </a>

                
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab4">
                    <a href="#past" class="tab__link" title="More"  >
                        <span class="icon more-orders-icon"></span>
                        <span>Past Orders</span>
                        <span class="number number--past">1</span>
                    </a>

                    
                </li>
            </ul>
        </div>

    </div>
</div>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="orders_list_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars["page_title"] = new Smarty_variable($_smarty_tpl->__("orders"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["extra_status"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['orders']->value) {?>

<div class="have-content">
    <!-- order -->
    <div class="have-tab have-order" id="new" data-tab="tab1">
        <div class="have-order__left search-order" >
            <div class="search-order__box-input">
            
            <input class="search-order__input" type="search" placeholder="Search">
            </div>
            <ul class="search-order__list">
                <li class="search-order__box" data-order="order9161">
                    <div class="search-order__left">
                        <h3 class="search-order__id">
                            9161
                        </h3>
                        <p class="search-order__desc">1 items for #127</p>
                        <p class="search-order__time">Received a minute ago</p>
                    </div>
                    <div class="search-order__right">
                        <div class="search-order__img-box">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <p class="search-order__assign">Assigning...</p>
                    </div>
                </li>
                <li class="search-order__box" data-order="order9162">
                    <div class="search-order__left">
                        <h3 class="search-order__id">
                            9162
                        </h3>
                        <p class="search-order__desc">1 items for #127</p>
                        <p class="search-order__time">Received a minute ago</p>
                    </div>
                    <div class="search-order__right">
                        <div class="search-order__img-box">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <p class="search-order__assign">Assigning...</p>
                    </div>
                </li>
            
            </ul>
        </div>
        <div class="have-order__content">
            <div class="have-order__mid">
                <div class="have-order__mid--rel" data-order="order9161">
                    <div class="search-order__box search-order__box--mid">
                        <div class="search-order__left">
                            <h3 class="search-order__id search-order__id--bold">
                                #78395909161<span class="search-order__new">New</span>
                            </h3>
                            <p class="search-order__desc search-order__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-order__right">
                            
                            <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-order__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <ul class="search-order__list-details">
                        <li class="search-order__details">
                            <div class="search-order__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-order__dish">
                                    <p class="search-order__title">Chicken Biryani</p>
                                    <p class="search-order__type">Biryani</p>
                                    <p class="search-order__price">$150</p>
                                </div>
                            </div>
                            <div class="search-order__details--right">
                                <p class="search-order__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-order__details">
                            <div class="search-order__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-order__dish">
                                    <p class="search-order__title">Chicken Biryani</p>
                                    <p class="search-order__type">Biryani</p>
                                    <p class="search-order__price">$150</p>
                                </div>
                            </div>
                            <div class="search-order__details--right">
                                <p class="search-order__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-order__details">
                            <div class="search-order__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-order__dish">
                                    <p class="search-order__title">Chicken Biryani</p>
                                    <p class="search-order__type">Biryani</p>
                                    <p class="search-order__price">$150</p>
                                </div>
                            </div>
                            <div class="search-order__details--right">
                                <p class="search-order__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                    
                    <div class="search-order__buttons">
                        <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#showStork" value="Mark out of stork" />

                        <input type="button" class="search-order__buttons--btn search-order__buttons--confirm" onclick="openPacking()" value="Confirm order" />
                    </div>
                </div>
                <div class="have-order__mid--rel" data-order="order9162">
                    <div class="search-order__box search-order__box--mid">
                        <div class="search-order__left">
                            <h3 class="search-order__id search-order__id--bold">
                                #78395909162<span class="search-order__new">New</span>
                            </h3>
                            <p class="search-order__desc search-order__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-order__right">
                            
                            <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-order__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <ul class="search-order__list-details">
                        <li class="search-order__details">
                            <div class="search-order__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-order__dish">
                                    <p class="search-order__title">Chicken Biryani</p>
                                    <p class="search-order__type">Biryani</p>
                                    <p class="search-order__price">$180</p>
                                </div>
                            </div>
                            <div class="search-order__details--right">
                                <p class="search-order__amount">X2</p>
                            </div>
                        </li>
                        <li class="search-order__details">
                            <div class="search-order__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-order__dish">
                                    <p class="search-order__title">Chicken Biryani</p>
                                    <p class="search-order__type">Biryani</p>
                                    <p class="search-order__price">$180</p>
                                </div>
                            </div>
                            <div class="search-order__details--right">
                                <p class="search-order__amount">X2</p>
                            </div>
                        </li>
                    
                        
                    </ul>

                    
                    <div class="search-order__buttons">
                        <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#showStork" value="Mark out of stork" />
                        <input type="button" class="search-order__buttons--btn search-order__buttons--confirm" value="Confirm order" onclick="openPacking()" />
                    </div>
                </div>
            </div>
            <div class="have-order__right">
                <div class="search-order__right-top" data-order="order9161">
                    <div class="search-order__right-box">
                        <div class="search-order__img-box search-order__img-box--big">
                            <img src="https://i.imgur.com/CYDfvhi.png" />
                        </div>
                        <div class="search-order__right-content">
                            <h4 class="search-order__right-title">
                                Packing Time
                            </h4>
                            <p class="search-order__right-time">
                                20 mins
                            </p>
                            <p class="search-order__right-status">
                                Packing not started
                            </p>
                        </div>
                    </div>
                    
                    <div class="search-order__right-box">
                        <div class="search-order__img-box search-order__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-order__right-content">
                            <h4 class="search-order__right-title">
                                Delivery Executive
                            </h4>
                            <p class="search-order__right-assign">
                                Pending assignent...
                            </p>
                            
                        </div>
                    </div>

                    <div class="search-order__right-box">
                        <div class="search-order__img-box search-order__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-order__right-content">
                            <h4 class="search-order__right-title">
                                Grand Total
                            </h4>
                            <p class="search-order__right-price">
                                $127
                            </p>
                            <div class="search-order__right-info">
                                <div class="search-order__right-row">
                                    <p class="search-order__right-label">Item total</p>
                                    <p class="search-order__right-money">$127</p>
                                </div>
                                <div class="search-order__right-row">
                                    <p class="search-order__right-label">GST</p>
                                    <p class="search-order__right-money">$0</p>
                                </div>
                                <div class="search-order__right-row">
                                    <p class="search-order__right-label">Discount</p>
                                    <p class="search-order__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-order__right-box">
                        <a class="search-order__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
                <div class="search-order__right-top" data-order="order9162">
                    <div class="search-order__right-box">
                        <div class="search-order__img-box search-order__img-box--big">
                            <img src="https://i.imgur.com/CYDfvhi.png" />
                        </div>
                        <div class="search-order__right-content">
                            <h4 class="search-order__right-title">
                                Packing Time
                            </h4>
                            <p class="search-order__right-time">
                                19 mins
                            </p>
                            <p class="search-order__right-status">
                                Packing not started
                            </p>
                        </div>
                    </div>
                    
                    <div class="search-order__right-box">
                        <div class="search-order__img-box search-order__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-order__right-content">
                            <h4 class="search-order__right-title">
                                Delivery Executive
                            </h4>
                            <p class="search-order__right-assign">
                                Pending assignent...
                            </p>
                            
                        </div>
                    </div>

                    <div class="search-order__right-box">
                        <div class="search-order__img-box search-order__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-order__right-content">
                            <h4 class="search-order__right-title">
                                Grand Total
                            </h4>
                            <p class="search-order__right-price">
                                $150
                            </p>
                            <div class="search-order__right-info">
                                <div class="search-order__right-row">
                                    <p class="search-order__right-label">Item total</p>
                                    <p class="search-order__right-money">$150</p>
                                </div>
                                <div class="search-order__right-row">
                                    <p class="search-order__right-label">GST</p>
                                    <p class="search-order__right-money">$0</p>
                                </div>
                                <div class="search-order__right-row">
                                    <p class="search-order__right-label">Discount</p>
                                    <p class="search-order__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-order__right-box">
                        <a class="search-order__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- packing -->
    <div class="have-tab have-packing" id="packing" data-tab="tab2">
        <div class="have-packing__left search-packing" >
            <div class="search-packing__box-input">
            
            <input class="search-packing__input" type="search" placeholder="Search">
            </div>
            <ul class="search-packing__list">
                <li class="search-packing__box search-packing__box--column search-packing__box--nopd" data-order="order9161">
                    <div class="search-packing__container">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--packing">
                                9161
                            </h3>
                            <p class="search-packing__desc">1 items for #127</p>
                            <p class="search-packing__time">Received a minute ago</p>
                        </div>
                        <div class="search-packing__right">
                            <div class="search-packing__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-packing__assign">Assigning...</p>
                        </div>
                    </div>
                    <div class="search-packing__notcf">
                        <img src="https://i.imgur.com/QBVp9RA.png" />
                        <span>Order not confirmed within 6 mins</span>
                    </div>
                </li>
                <li class="search-packing__box search-packing__box--column search-packing__box--nopd" data-order="order9162">
                    <div class="search-packing__container">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--packing">
                                9162
                            </h3>
                            <p class="search-packing__desc">1 items for #127</p>
                            <p class="search-packing__time">Received a minute ago</p>
                        </div>
                        <div class="search-packing__right">
                            <div class="search-packing__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-packing__assign">Assigning...</p>
                        </div>
                    </div>
                    <div class="search-packing__notcf">
                        <img src="https://i.imgur.com/QBVp9RA.png" />
                        <span>Order not confirmed within 6 mins</span>
                    </div>
                </li>
            
            </ul>
        </div>
        <div class="have-packing__content">
            <div class="have-packing__mid">
                <div class="have-packing__mid--rel" data-order="order9161">
                    <div class="search-packing__box search-packing__box--mid">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--bold search-packing__id--packing">
                                #78395909161<span class="search-packing__new search-packing__new--packing">Packing</span>
                            </h3>
                            <p class="search-packing__desc search-packing__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-packing__right">
                            
                            <img class="search-packing__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-packing__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <ul class="search-packing__list-details">
                        <li class="search-packing__details">
                            <div class="search-packing__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-packing__dish">
                                    <p class="search-packing__title">Chicken Biryani</p>
                                    <p class="search-packing__type">Biryani</p>
                                    <p class="search-packing__price">$150</p>
                                </div>
                            </div>
                            <div class="search-packing__details--right">
                                <p class="search-packing__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-packing__details">
                            <div class="search-packing__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-packing__dish">
                                    <p class="search-packing__title">Chicken Biryani</p>
                                    <p class="search-packing__type">Biryani</p>
                                    <p class="search-packing__price">$150</p>
                                </div>
                            </div>
                            <div class="search-packing__details--right">
                                <p class="search-packing__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-packing__details">
                            <div class="search-packing__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-packing__dish">
                                    <p class="search-packing__title">Chicken Biryani</p>
                                    <p class="search-packing__type">Biryani</p>
                                    <p class="search-packing__price">$150</p>
                                </div>
                            </div>
                            <div class="search-packing__details--right">
                                <p class="search-packing__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                
                    <div class="search-packing__buttons">
                        <input type="button" class="search-packing__buttons--btn search-packing__buttons--packing" value="Mark order packed" onclick="openReady()"/>
                    </div>
                </div>
                <div class="have-packing__mid--rel" data-order="order9162">
                    <div class="search-packing__box search-packing__box--mid">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--bold search-packing__id--packing">
                                #78395909162<span class="search-packing__new search-packing__new--packing">Packing</span>
                            </h3>
                            <p class="search-packing__desc search-packing__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-packing__right">
                            
                            <img class="search-packing__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-packing__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <ul class="search-packing__list-details">
                        <li class="search-packing__details">
                            <div class="search-packing__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-packing__dish">
                                    <p class="search-packing__title">Chicken Biryani</p>
                                    <p class="search-packing__type">Biryani</p>
                                    <p class="search-packing__price">$120</p>
                                </div>
                            </div>
                            <div class="search-packing__details--right">
                                <p class="search-packing__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-packing__details">
                            <div class="search-packing__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-packing__dish">
                                    <p class="search-packing__title">Chicken Biryani</p>
                                    <p class="search-packing__type">Biryani</p>
                                    <p class="search-packing__price">$120</p>
                                </div>
                            </div>
                            <div class="search-packing__details--right">
                                <p class="search-packing__amount">X2</p>
                            </div>
                        </li>
                        <li class="search-packing__details">
                            <div class="search-packing__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-packing__dish">
                                    <p class="search-packing__title">Chicken Biryani</p>
                                    <p class="search-packing__type">Biryani</p>
                                    <p class="search-packing__price">$180</p>
                                </div>
                            </div>
                            <div class="search-packing__details--right">
                                <p class="search-packing__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                
                    <div class="search-packing__buttons">
                        <input type="button" class="search-packing__buttons--btn search-packing__buttons--packing" value="Mark order packed" onclick="openReady()"/>
                    </div>
                </div>
            
            </div>
            <div class="have-packing__right">
                <div class="search-packing__right-top" data-order="order9161">
                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/CYDfvhi.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Packing Time
                            </h4>
                            <p class="search-packing__right-time">
                                10 mins remaning
                            </p>
                            <p class="search-packing__right-status">
                                Packin started
                            </p>
                        </div>
                    </div>
                    
                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Delivery Executive
                            </h4>
                            <p class="search-packing__right-assign">
                                Pending assignent...
                            </p>
                            
                        </div>
                    </div>

                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Grand Total
                            </h4>
                            <p class="search-packing__right-price">
                                $122
                            </p>
                            <div class="search-packing__right-info">
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Item total</p>
                                    <p class="search-packing__right-money">$122</p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">GST</p>
                                    <p class="search-packing__right-money">$0</p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Discount</p>
                                    <p class="search-packing__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-packing__right-box">
                        <a class="search-packing__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
                <div class="search-packing__right-top" data-order="order9162">
                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/CYDfvhi.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Packing Time
                            </h4>
                            <p class="search-packing__right-time">
                                15 mins remaning
                            </p>
                            <p class="search-packing__right-status">
                                Packin started
                            </p>
                        </div>
                    </div>
                    
                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Delivery Executive
                            </h4>
                            <p class="search-packing__right-assign">
                                Pending assignent...
                            </p>
                            
                        </div>
                    </div>

                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Grand Total
                            </h4>
                            <p class="search-packing__right-price">
                                $188
                            </p>
                            <div class="search-packing__right-info">
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Item total</p>
                                    <p class="search-packing__right-money">$188</p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">GST</p>
                                    <p class="search-packing__right-money">$0</p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Discount</p>
                                    <p class="search-packing__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-packing__right-box">
                        <a class="search-packing__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ready -->
    <div class="have-tab have-ready" id="ready" data-tab="tab3">
        <div class="have-ready__left search-ready" >
            <div class="search-ready__box-input">
            
            <input class="search-ready__input" type="search" placeholder="Search">
            </div>
            <ul class="search-ready__list">
                <li class="search-ready__box search-ready__box--column search-ready__box--nopd" data-order="order9161">
                    <div class="search-ready__container">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--packing">
                                9161
                            </h3>
                            <p class="search-ready__desc">1 items for #127</p>
                            <p class="search-ready__time">Received a minute ago</p>
                        </div>
                        <div class="search-ready__right">
                            <div class="search-ready__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-ready__assign">Assigned</p>
                        </div>
                    </div>
                
                </li>
                <li class="search-ready__box search-ready__box--column search-ready__box--nopd" data-order="order9162">
                    <div class="search-ready__container">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--packing">
                                9162
                            </h3>
                            <p class="search-ready__desc">1 items for #127</p>
                            <p class="search-ready__time">Received a minute ago</p>
                        </div>
                        <div class="search-ready__right">
                            <div class="search-ready__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-ready__assign">Assigned</p>
                        </div>
                    </div>
                    
                </li>
            
            </ul>
        </div>
        <div class="have-ready__content">
            <div class="have-ready__mid">
                <div class="have-ready__mid--rel" data-order="order9161">
                    <div class="search-ready__box search-ready__box--mid">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--bold search-ready__id--packing">
                                #78395909162<span class="search-ready__new search-ready__new--packing">Ready</span>
                            </h3>
                            <p class="search-ready__desc search-ready__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-ready__right">
                            
                            <img class="search-ready__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-ready__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <ul class="search-ready__list-details">
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">Chicken Biryani</p>
                                    <p class="search-ready__type">Biryani</p>
                                    <p class="search-ready__price">$150</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">Chicken Biryani</p>
                                    <p class="search-ready__type">Biryani</p>
                                    <p class="search-ready__price">$150</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">Chicken Biryani</p>
                                    <p class="search-ready__type">Biryani</p>
                                    <p class="search-ready__price">$150</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                
                    
                </div>
                <div class="have-ready__mid--rel" data-order="order9162">
                    <div class="search-ready__box search-ready__box--mid">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--bold search-ready__id--packing">
                                #78395909162<span class="search-ready__new search-ready__new--packing">Ready</span>
                            </h3>
                            <p class="search-ready__desc search-ready__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-ready__right">
                            
                            <img class="search-ready__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-ready__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <ul class="search-ready__list-details">
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">Chicken Biryani</p>
                                    <p class="search-ready__type">Biryani</p>
                                    <p class="search-ready__price">$120</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">Chicken Biryani</p>
                                    <p class="search-ready__type">Biryani</p>
                                    <p class="search-ready__price">$120</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X2</p>
                            </div>
                        </li>
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">Chicken Biryani</p>
                                    <p class="search-ready__type">Biryani</p>
                                    <p class="search-ready__price">$180</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                
                    
                </div>
            
            </div>
            <div class="have-ready__right">
                <div class="search-ready__right-top" data-order="order9161">
                    
                    
                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Delivery Executive
                            </h4>
                            
                            <p class="search-ready__right-person">
                                Utpal Choudhury
                            </p>
                            <p class="search-ready__right-phone">
                                <img src="https://i.imgur.com/xbHY2sf.png"><span class="search-ready__right-first-num">+91</span><span>5647867875</span>
                            </p>
                            <div class="search-ready__right-pickup">
                                <p class="search-ready__right-pickup-text">Pick up arriving in</p>
                                <div>Spin</div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Grand Total
                            </h4>
                            <p class="search-ready__right-price">
                                $122
                            </p>
                            <div class="search-ready__right-info">
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Item total</p>
                                    <p class="search-ready__right-money">$122</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">GST</p>
                                    <p class="search-ready__right-money">$0</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Discount</p>
                                    <p class="search-ready__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-ready__right-box">
                        <a class="search-ready__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
                <div class="search-ready__right-top" data-order="order9162">
                    
                    
                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Delivery Executive
                            </h4>
                            <p class="search-ready__right-person">
                                Utpal Choudhury
                            </p>
                            <p class="search-ready__right-phone">
                                <img src="https://i.imgur.com/xbHY2sf.png"><span class="search-ready__right-first-num">+91</span><span>5647867875</span>
                            </p>
                            <div class="search-ready__right-pickup">
                                <p class="search-ready__right-pickup-text">Pick up arriving in</p>
                                <div>Spin</div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Grand Total
                            </h4>
                            <p class="search-ready__right-price">
                                $188
                            </p>
                            <div class="search-ready__right-info">
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Item total</p>
                                    <p class="search-ready__right-money">$188</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">GST</p>
                                    <p class="search-ready__right-money">$0</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Discount</p>
                                    <p class="search-ready__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-ready__right-box">
                        <a class="search-ready__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- past -->
    <div class="have-tab have-past" id="past" data-tab="tab4">
        <div class="have-past__left search-past" >
            <div class="search-past__box-input">
            
            <input class="search-past__input" type="search" placeholder="Search">
            </div>
            <ul class="search-past__list">
                <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order9161">
                    <div class="search-past__container">
                        <div class="search-past__left">
                            <h3 class="search-past__id search-past__id--delevered">
                                9161
                            </h3>
                            <p class="search-past__desc">1 items for #127</p>
                            <p class="search-past__time">Received a minute ago</p>
                        </div>
                        <div class="search-past__right">
                            <div class="search-past__img-box">
                                <img src="https://i.imgur.com/tOnmHoj.png" />
                            </div>
                            <p class="search-past__assign">Delevered</p>
                        </div>
                    </div>
                    <div class="search-past__notcf">
                        <img src="https://i.imgur.com/tYGS0xL.png" />
                        <span class="search-past__notcf--past">Order packing correct</span>
                    </div>
                </li>
                <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order9162">
                    <div class="search-past__container">
                        <div class="search-past__left">
                            <h3 class="search-past__id search-past__id--delevered">
                                9162
                            </h3>
                            <p class="search-past__desc">1 items for #127</p>
                            <p class="search-past__time">Received a minute ago</p>
                        </div>
                        <div class="search-past__right">
                            <div class="search-past__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-past__assign">Out for delivery</p>
                        </div>
                    </div>
                    <div class="search-past__notcf">
                        <img src="https://i.imgur.com/tYGS0xL.png" />
                        <span class="search-past__notcf--past">Order packing correct</span>
                    </div>
                </li>
                <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order9163">
                    <div class="search-past__container">
                        <div class="search-past__left">
                            <h3 class="search-past__id search-past__id--delevered">
                                9163
                            </h3>
                            <p class="search-past__desc">1 items for #127</p>
                            <p class="search-past__time">Received a minute ago</p>
                        </div>
                        <div class="search-past__right">
                            <div class="search-past__img-box">
                                <img src="https://i.imgur.com/KtN88Ni.png" />
                            </div>
                            <p class="search-past__assign">Cancelled</p>
                        </div>
                    </div>
                    <div class="search-past__notcf">
                        <img src="https://i.imgur.com/QBVp9RA.png" />
                        <span>Food ready not pressed</span>
                    </div>
                </li>
            
            </ul>
        </div>
        <div class="have-past__content">
            <div class="have-past__mid">
                <div class="have-past__mid--rel" data-order="order9161">
                    <div class="search-past__box search-past__box--mid search-past__box--nomg">
                        <div class="search-past__left">
                            <h3 class="search-past__id search-past__id--bold search-past__id--packing">
                                #78395909161<span class="search-past__new search-past__new--packing">Delivered</span>
                            </h3>
                            <p class="search-past__desc search-past__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-past__right">
                            
                            <img class="search-past__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-past__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <div class="search-past__box-time">
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p class="search-past__box-time-h">02:08 PM</p>
                                <p class="search-past__box-time-p">Placed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Confirmed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Packed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Delivered</p>
                            </div>
                        </div>
                    </div>
                    <ul class="search-past__list-details">
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$150</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$150</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$150</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="have-past__mid--rel" data-order="order9162">
                    <div class="search-past__box search-past__box--mid search-past__box--nomg">
                        <div class="search-past__left">
                            <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                #78395909162<span class="search-past__new search-past__new--delevered">Out for delivery</span>
                            </h3>
                            <p class="search-past__desc search-past__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-past__right">
                            
                            <img class="search-past__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-past__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <div class="search-past__box-time">
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:08 PM</p>
                                <p class="search-past__box-time-p">Placed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Confirmed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Packed</p>
                            </div>
                        </div>
                        
                    </div>
                    <ul class="search-past__list-details">
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$120</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$120</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X2</p>
                            </div>
                        </li>
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$180</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                </div>

                 <div class="have-past__mid--rel" data-order="order9163">
                    <div class="search-past__box search-past__box--mid search-past__box--nomg">
                        <div class="search-past__left">
                            <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                #78395909163<span class="search-past__new search-past__new--delevered">Cancelled</span>
                            </h3>
                            <p class="search-past__desc search-past__desc--gray">1 items for #127</p>
                            
                        </div>
                        <div class="search-past__right">
                            
                            <img class="search-past__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-past__date">21 Jul 2020 02:08 PM</p>
                        </div>
                    </div>
                    <div class="search-past__box-time">
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:08 PM</p>
                                <p class="search-past__box-time-p">Placed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Canceled</p>
                            </div>
                        </div>
                        
                        
                    </div>
                    <ul class="search-past__list-details">
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$120</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$120</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X2</p>
                            </div>
                        </li>
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="search-past__dish">
                                    <p class="search-past__title">Chicken Biryani</p>
                                    <p class="search-past__type">Biryani</p>
                                    <p class="search-past__price">$180</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X1</p>
                            </div>
                        </li>
                        
                    </ul>

                </div>
            
            </div>
            <div class="have-past__right">
                <div class="search-past__right-top" data-order="order9161">

                    <div class="search-past__right-box">
                        <div class="search-past__img-box search-past__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-past__right-content">
                            <h4 class="search-past__right-title">
                                Grand Total
                            </h4>
                            <p class="search-past__right-price">
                                $122
                            </p>
                            <div class="search-past__right-info">
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Item total</p>
                                    <p class="search-past__right-money">$122</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">GST</p>
                                    <p class="search-past__right-money">$0</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Discount</p>
                                    <p class="search-past__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                   
                </div>
                <div class="search-past__right-top" data-order="order9162">
                    <div class="search-past__right-box">
                        <div class="search-past__img-box search-past__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-past__right-content">
                            <h4 class="search-past__right-title">
                                Grand Total
                            </h4>
                            <p class="search-past__right-price">
                                $158
                            </p>
                            <div class="search-past__right-info">
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Item total</p>
                                    <p class="search-past__right-money">$158</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">GST</p>
                                    <p class="search-past__right-money">$0</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Discount</p>
                                    <p class="search-past__right-money">$30</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                   
                </div>

                 <div class="search-past__right-top" data-order="order9163">

                    <div class="search-past__right-box">
                        <div class="search-past__img-box search-past__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-past__right-content">
                            <h4 class="search-past__right-title">
                                Grand Total
                            </h4>
                            <p class="search-past__right-price">
                                $111
                            </p>
                            <div class="search-past__right-info">
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Item total</p>
                                    <p class="search-past__right-money">$111</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">GST</p>
                                    <p class="search-past__right-money">$0</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Discount</p>
                                    <p class="search-past__right-money">$11</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Modal -->
<div class="modal fade" id="showStork" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="order-modal">
            <div class="order-modal__top">Enter your desired quantily and click continue</div>
            <div class="order-modal__list">
                <p class="order-modal__label">Enter Quantity</p>
                <div class="order-modal__box"> 
                    <span class="order-modal__index">1</span>
                    <div class="order-modal__details--left">
                        <img src="https://i.imgur.com/76y9dFM.png" />
                        <div class="order-modal__dish">
                            <p class="order-modal__title">Chicken Biryani</p>
                            <p class="order-modal__type">Biryani</p>
                        </div>
                    </div>
                    <div class="order-modal__details--right">
                        <p class="order-modal__amount">$127</p>
                    </div>
                    <div class="order-modal__input">
                        <input class="order-modal__quantity" value="1" type="number" />
                        <div class="order-modal__grand-total">
                            <p class="order-modal__grand">Grand total</p>
                            <p class="order-modal__amount order-modal__amount--big">$127</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="order-modal__buttons">
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-dismiss="modal">Cancel</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--continue">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>



<?php } else { ?>
    
    <p class="no-items no-data-new">
    
    You Are Offline
        <span>Due to the outlet inactivity, we have switched OFF your outlet. If you wish to receive orders at this time, please turn your restaurant ON, by using the toggle in your Partner App. You will not be able to receive any orders until you turn your restaurant ON</span>
    </p>
    
        
        
        
    
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <div class="statistic clearfix" id="orders_total">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:statistic_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:statistic_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="table-wrapper">
            <table class="pull-right ">
                <?php if ($_smarty_tpl->tpl_vars['total_pages']->value>1&&$_smarty_tpl->tpl_vars['search']->value['page']!="full_list") {?>
                    <tr>
                        <td>&nbsp;</td>
                        <td width="100px"><?php echo $_smarty_tpl->__("for_this_page_orders");?>
:</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['gross_total']), 0);?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("totally_paid");?>
:</td>
                        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['totally_paid']), 0);?>
</td>
                    </tr>
                    <hr />
                    <tr>
                        <td><?php echo $_smarty_tpl->__("for_all_found_orders");?>
:</td>
                    </tr>
                <?php }?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['gross_total']), 0);?>
</td>
                </tr>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_stats")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_stats"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("totally_paid");?>
:</h4></td>
                    <td class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['totally_paid']), 0);?>
</td>
                </tr>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_stats"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </table>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:statistic_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--orders_total--></div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"order_management.new",'prefix'=>"bottom",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_order"),'icon'=>"icon-plus"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("bulk_print_invoice");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'dispatch'=>"dispatch[orders.bulk_print]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>
</li>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("bulk_print_pdf");?>
<?php $_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[orders.bulk_print..pdf]",'form'=>"orders_list_form"));?>
</li>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("bulk_print_packing_slip");?>
<?php $_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[orders.packing_slip]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>
</li>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("view_purchased_products");?>
<?php $_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp4,'dispatch'=>"dispatch[orders.products_range]",'form'=>"orders_list_form"));?>
</li>

            <li class="divider"></li>
            <li class="mobile-hide"><?php ob_start();?><?php echo $_smarty_tpl->__("export_selected");?>
<?php $_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp5,'dispatch'=>"dispatch[orders.export_range]",'form'=>"orders_list_form"));?>
</li>

            <?php if ($_smarty_tpl->tpl_vars['orders']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <li class="divider mobile-hide"></li>
                <li class="mobile-hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[orders.m_delete]",'form'=>"orders_list_form"));?>
</li>
            <?php }?>
        <?php }?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'content_id'=>"manage_orders",'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>

    document.querySelector('.tab__li[data-tab=tab1]').classList.add('active');
    document.querySelector('.have-tab[data-tab=tab1]').classList.add('activeTab');

    let tabs = {
    list: document.querySelector('ul.nav-tabs'),
    all: document.querySelectorAll('.nav-tabs .tab__li'),

    },
    tabsContent = {
        container: document.querySelector('.have-content'),
        current: null,
        tab: null,
    }

    console.log("tabs list: ",tabs.list, "all: ",tabs.all);
    console.log("tabs container: ",tabsContent.container, "current: ",tabsContent.current, "tab: ",tabsContent.tab);
    

    tabs.all.forEach(f => {
    f.addEventListener('mousedown', () => {
        f.classList.contains('activeTab') || setAciveTabs(f);
        console.log("func: ",f)
         console.log("tabs list: ",tabs.list, "all: ",tabs.all);
        console.log("tabs container: ",tabsContent.container, "current tab: ",tabsContent.current, "tab: ",tabsContent.tab);
    })
    });

    function setAciveTabs(f) {
        tabs.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        tabsContent.current = tabsContent.container.querySelector('.activeTab')
        tabsContent.tab = f.getAttribute('data-tab')
        tabsContent.current.classList.remove('activeTab')
        tabsContent.container.querySelector('[data-tab="' + tabsContent.tab + '"]').classList.add('activeTab')
    
    }


<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    document.querySelector('.search-order__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-order__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-order__right-top[data-order=order9161]').classList.add('active')

    let orders = {
    list: document.querySelector('ul.search-order__list'),
    all: document.querySelectorAll('.search-order .search-order__box'),

    },
    ordersContent = {
        container: document.querySelector('.have-order .have-order__mid'),
        current: null,
        order: null,
    },
    detailContent = {
        container: document.querySelector('.have-order .have-order__right'),
        current: null,
        order: null,
    }

  console.log("list: ",orders.list, "all: ",orders.all);
    console.log("ordersContent: ",ordersContent.container, "current: ",ordersContent.current, "order: ",ordersContent.order);
    console.log("detailContent: ",detailContent.container, "current: ",detailContent.current, "order: ",detailContent.order);

    orders.all.forEach(f => {
    f.addEventListener('mousedown', () => {
        
        f.classList.contains('active') || setAciveChat(f);
   
    })
    });

    function setAciveChat(f) {
        orders.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        ordersContent.current = ordersContent.container.querySelector('.active')
        ordersContent.order = f.getAttribute('data-order')
        ordersContent.current.classList.remove('active')
        ordersContent.container.querySelector('[data-order="' + ordersContent.order + '"]').classList.add('active')

        detailContent.current = detailContent.container.querySelector('.active')
        detailContent.order = f.getAttribute('data-order')
        detailContent.current.classList.remove('active')
        detailContent.container.querySelector('[data-order="' + detailContent.order + '"]').classList.add('active')
    
    }

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    document.querySelector('.search-packing__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-packing__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-packing__right-top[data-order=order9161]').classList.add('active')

    let packings = {
    list: document.querySelector('ul.search-packing__list'),
    all: document.querySelectorAll('.search-packing .search-packing__box'),

    },
    packingsContent = {
        container: document.querySelector('.have-packing .have-packing__mid'),
        current: null,
        packing: null,
    },
    detailPacking = {
        container: document.querySelector('.have-packing .have-packing__right'),
        current: null,
        packing: null,
    }

    /*console.log("list: ",packings.list, "all: ",packings.all);
    console.log("ordersContent: ",packingsContent.container, "current: ",packingsContent.current, "packing: ",packingsContent.packing);
    console.log("detailContent: ",detailPacking.container, "current: ",detailPacking.current, "packing: ",detailPacking.packing);
*/
    packings.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAcivePacking(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAcivePacking(f) {
        packings.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        packingsContent.current = packingsContent.container.querySelector('.active')
        packingsContent.packing = f.getAttribute('data-order')
        packingsContent.current.classList.remove('active')
        packingsContent.container.querySelector('[data-order="' + packingsContent.packing + '"]').classList.add('active')

        detailPacking.current = detailPacking.container.querySelector('.active')
        detailPacking.packing = f.getAttribute('data-order')
        detailPacking.current.classList.remove('active')
        detailPacking.container.querySelector('[data-order="' + detailPacking.packing + '"]').classList.add('active')
    
    }

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>

    function openPacking() {
        
        console.log('open packing')
        document.getElementById("new").style.display="none";
        document.getElementById("packing").style.display="flex";

    }
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    document.querySelector('.search-ready__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-ready__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-ready__right-top[data-order=order9161]').classList.add('active')

    let readys = {
    list: document.querySelector('ul.search-ready__list'),
    all: document.querySelectorAll('.search-ready .search-ready__box'),

    },
    readysContent = {
        container: document.querySelector('.have-ready .have-ready__mid'),
        current: null,
        ready: null,
    },
    detailReadys = {
        container: document.querySelector('.have-ready .have-ready__right'),
        current: null,
        ready: null,
    }
/*
    console.log("readys: ",readys.list, "all: ",readys.all);
    console.log("ordersContent: ",readysContent.container, "current: ",readysContent.current, "ready: ",readysContent.ready);
    console.log("detailContent: ",detailReadys.container, "current: ",detailReadys.current, "ready: ",detailReadys.ready);
*/
    readys.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAciveReady(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAciveReady(f) {
        readys.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        readysContent.current = readysContent.container.querySelector('.active')
        readysContent.ready = f.getAttribute('data-order')
        readysContent.current.classList.remove('active')
        readysContent.container.querySelector('[data-order="' + readysContent.ready + '"]').classList.add('active')

        detailReadys.current = detailReadys.container.querySelector('.active')
        detailReadys.ready = f.getAttribute('data-order')
        detailReadys.current.classList.remove('active')
        detailReadys.container.querySelector('[data-order="' + detailReadys.ready + '"]').classList.add('active')
    
    }

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    function openReady() {
        console.log('open ready')
        document.getElementById("packing").style.display="none";
        document.getElementById("ready").style.display="flex";

    }
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    document.querySelector('.search-past__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-past__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-past__right-top[data-order=order9161]').classList.add('active')

    let pasts = {
    list: document.querySelector('ul.search-past__list'),
    all: document.querySelectorAll('.search-past .search-past__box'),

    },
    pastsContent = {
        container: document.querySelector('.have-past .have-past__mid'),
        current: null,
        past: null,
    },
    detailPasts = {
        container: document.querySelector('.have-past .have-past__right'),
        current: null,
        past: null,
    }
/*
    console.log("readys: ",readys.list, "all: ",readys.all);
    console.log("ordersContent: ",readysContent.container, "current: ",readysContent.current, "ready: ",readysContent.ready);
    console.log("detailContent: ",detailReadys.container, "current: ",detailReadys.current, "ready: ",detailReadys.ready);
*/
    pasts.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAcivePast(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAcivePast(f) {
        pasts.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        pastsContent.current = pastsContent.container.querySelector('.active')
        pastsContent.past = f.getAttribute('data-order')
        pastsContent.current.classList.remove('active')
        pastsContent.container.querySelector('[data-order="' + pastsContent.past + '"]').classList.add('active')

        detailPasts.current = detailPasts.container.querySelector('.active')
        detailPasts.past = f.getAttribute('data-order')
        detailPasts.current.classList.remove('active')
        detailPasts.container.querySelector('[data-order="' + detailPasts.past + '"]').classList.add('active')
    
    }

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    function openPast() {
        console.log('open ready')
        document.getElementById("ready").style.display="none";
        document.getElementById("past").style.display="flex";

    }
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
