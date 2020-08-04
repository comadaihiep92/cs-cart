{capture name="mainbox"}

{if $runtime.mode == "new"}
    <p>{__("text_admin_new_orders")}</p>
{/if}

{$order_status_descr = $smarty.const.STATUSES_ORDER|fn_get_simple_statuses:true:true}
{$order_statuses = $smarty.const.STATUSES_ORDER|fn_get_statuses:$statuses:true:true}

{capture name="sidebar"}
    {hook name="orders:manage_sidebar"}
    {include file="common/saved_search.tpl" dispatch="orders.manage" view_type="orders"}
    {include file="views/orders/components/orders_search_form.tpl" dispatch="orders.manage"}
    {/hook}
{/capture}

<div class="orders__header">
    <div class="row">
        <div class="col-xs-7">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#new" title="New" data-toggle="tab" >
                        <span class="icon new-orders-icon"></span>
                        <span>New</span>
                        <span class="number">1</span>
                    </a>
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li>
                    <a href="#packing" title="Packing" data-toggle="tab" >
                        <span class="icon preparing-orders-icon"></span>
                        <span>Packing</span>
                        
                    </a>

                    
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li>
                    <a href="#ready" title="Ready" data-toggle="tab" >
                        <span class="icon ready-orders-icon"></span>
                        <span>Ready</span>
                    
                    </a>

                
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li>
                    <a href="#more" title="More" data-toggle="tab" >
                        <span class="icon more-orders-icon"></span>
                        <span>Past Orders</span>
                        
                    </a>

                    
                </li>
            </ul>
        </div>

    </div>
</div>

{* <form action="{""|fn_url}" method="post" target="_self" name="orders_list_form"> *}
<form action="{""|fn_url}" method="post" target="_self" name="orders_list_form">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}

{assign var="page_title" value=__("orders")}
{assign var="extra_status" value=$config.current_url|escape:"url"}

{if !$orders}
{* <div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr>
        <th width="50" class="left mobile-hide">
        {include file="common/check_items.tpl" check_statuses=$order_status_descr}
        </th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=order_id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("id")}{if $search.sort_by == "order_id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=date&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("date")}{if $search.sort_by == "date"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
{if $account_type!='vendor'}        
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=customer&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("customer")}{if $search.sort_by == "customer"}{$c_icon nofilter}{/if}</a></th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=phone&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("phone")}{if $search.sort_by == "phone"}{$c_icon nofilter}{/if}</a></th>
{/if}
        {hook name="orders:manage_header"}{/hook}

        <th class="mobile-hide">&nbsp;</th>
        <th class="right"><a class="cm-ajax{if $search.sort_by == "total"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=total&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("total")}</a></th>

    </tr>
    </thead>
    {foreach from=$orders item="o"}
    {hook name="orders:order_row"}
    <tr>
        <td class="left mobile-hide">
            <input type="checkbox" name="order_ids[]" value="{$o.order_id}" class="cm-item cm-item-status-{$o.status|lower}" /></td>
        <td data-th="{__("id")}">
            <a href="{"orders.details?order_id=`$o.order_id`"|fn_url}" class="underlined">{__("order")} <bdi>#{$o.order_id}</bdi></a>
            {if $order_statuses[$o.status].params.appearance_type == "I" && $o.invoice_id}
                <p class="muted">{__("invoice")} #{$o.invoice_id}</p>
            {elseif $order_statuses[$o.status].params.appearance_type == "C" && $o.credit_memo_id}
                <p class="muted">{__("credit_memo")} #{$o.credit_memo_id}</p>
            {/if}
            {include file="views/companies/components/company_name.tpl" object=$o}
        </td>
        <td data-th="{__("status")}">
            {if "MULTIVENDOR"|fn_allowed_for}
                {assign var="notify_vendor" value=true}
            {else}
                {assign var="notify_vendor" value=false}
            {/if}
{if $account_type!='vendor'}
            {include file="common/select_popup.tpl"
                     suffix="o"
                     order_info=$o
                     id=$o.order_id
                     status=$o.status
                     items_status=$order_status_descr
                     update_controller="orders"
                     notify=true
                     notify_department=true
                     notify_vendor=$notify_vendor
                     status_target_id="orders_total,`$rev`"
                     extra="&return_url=`$extra_status`"
                     statuses=$order_statuses
                     btn_meta="btn btn-info o-status-`$o.status` btn-small"|lower
                     text_wrap=true
            }
{else}
{include file="views/orders/components/select_popup.tpl"
                     suffix="o"
                     order_info=$o
                     id=$o.order_id
                     status=$o.status
                     items_status=$order_status_descr
                     update_controller="orders"
                     notify=true
                     notify_department=true
                     notify_vendor=$notify_vendor
                     status_target_id="orders_total,`$rev`"
                     extra="&return_url=`$extra_status`"
                     statuses=$order_statuses
                     btn_meta="btn btn-info o-status-`$o.status` btn-small"|lower
                     text_wrap=true
            }
{/if}
            {if $o.issuer_name}
            <p class="muted shift-left">{$o.issuer_name}</p>
            {/if}
        </td>
        <td class="nowrap" data-th="{__("date")}">{$o.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
{if $account_type!='vendor'}        
        <td data-th="{__("customer")}">
            {if $o.email}<a href="mailto:{$o.email|escape:url}">@</a> {/if}
            {if $o.user_id}<a href="{"profiles.update?user_id=`$o.user_id`"|fn_url}">{/if}{$o.lastname} {$o.firstname}{if $o.user_id}</a>{/if}
            {if $o.company}<p class="muted">{$o.company}</p>{/if}
        </td>
        <td {if $o.phone}data-th="{__("phone")}"{/if}><bdi><a href="tel:{$o.phone}">{$o.phone}</a></bdi></td>
{/if}
        {hook name="orders:manage_data"}{/hook}

        <td width="5%" class="center" data-th="{__("tools")}">
            {capture name="tools_items"}
                <li>{btn type="list" href="orders.details?order_id=`$o.order_id`" text={__("view")}}</li>
                {hook name="orders:list_extra_links"}
                    <li>{btn type="list" href="order_management.edit?order_id=`$o.order_id`" text={__("edit")}}</li>
                    <li>{btn type="list" href="order_management.edit?order_id=`$o.order_id`&copy=1" text={__("copy")}}</li>
                    {assign var="current_redirect_url" value=$config.current_url|escape:url}
                    <li>{btn type="list" href="orders.delete?order_id=`$o.order_id`&redirect_url=`$current_redirect_url`" class="cm-confirm" text={__("delete")} method="POST"}</li>
                {/hook}
            {/capture}
            <div class="hidden-tools">
                {dropdown content=$smarty.capture.tools_items}
            </div>
        </td>
        <td class="right" data-th="{__("total")}">
            {include file="common/price.tpl" value=$o.total}
        </td>
    </tr>
    {/hook}
    {/foreach}
    </table>
</div> *}
<div class="have-order" id="new">
    <div class="have-order__left search-order" >
        <div class="search-order__box-input">
        {* <i class="icon-search"></i> *}
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

                {* <div class="search-order__buttons">
                    <button class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#exampleModal">Mark out of stork</button>
                    <button class="search-order__buttons--btn search-order__buttons--confirm">Confirm order</button>
                </div> *}
                <div class="search-order__buttons">
                    <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#exampleModal" value="Mark out of stork" />
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

                {* <div class="search-order__buttons">
                    <button class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#exampleModal">Mark out of stork</button>
                    <button class="search-order__buttons--btn search-order__buttons--confirm">Confirm order</button>
                </div> *}
                <div class="search-order__buttons">
                    <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#exampleModal" value="Mark out of stork" />
                    <input type="button" class="search-order__buttons--btn search-order__buttons--confirm" value="Confirm order" />
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
<div class="have-packing" id="packing">
    <div class="have-packing__left search-packing" >
        <div class="search-packing__box-input">
        {* <i class="icon-search"></i> *}
        <input class="search-packing__input" type="search" placeholder="Search">
        </div>
        <ul class="search-packing__list">
            <li class="search-packing__box search-packing__box--column" data-order="order9161">
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
            <li class="search-packing__box" data-order="order9162">
                <div class="search-packing__left">
                    <h3 class="search-packing__id">
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

                {* <div class="search-packing__buttons">
                    <button class="search-packing__buttons--btn search-packing__buttons--mark"  data-toggle="modal" data-target="#exampleModal">Mark out of stork</button>
                    <button class="search-packing__buttons--btn search-packing__buttons--confirm">Confirm order</button>
                </div> *}
                <div class="search-packing__buttons">
                    {* <input type="button" class="search-packing__buttons--btn search-packing__buttons--mark"  data-toggle="modal" data-target="#exampleModal" value="Mark out of stork" /> *}
                    <input type="button" class="search-packing__buttons--btn search-packing__buttons--packing" value="Mark order packed" />
                </div>
            </div>
            <div class="have-packing__mid--rel" data-order="order9162">
                <div class="search-packing__box search-packing__box--mid">
                    <div class="search-packing__left">
                        <h3 class="search-packing__id search-packing__id--bold">
                            #78395909162<span class="search-packing__new">New</span>
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
                                <p class="search-packing__price">$180</p>
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
                            <p class="search-packing__amount">X2</p>
                        </div>
                    </li>
                
                    
                </ul>

                {* <div class="search-packing__buttons">
                    <button class="search-packing__buttons--btn search-packing__buttons--mark"  data-toggle="modal" data-target="#exampleModal">Mark out of stork</button>
                    <button class="search-packing__buttons--btn search-packing__buttons--confirm">Confirm order</button>
                </div> *}
                <div class="search-packing__buttons">
                    <input type="button" class="search-packing__buttons--btn search-packing__buttons--mark"  data-toggle="modal" data-target="#exampleModal" value="Mark out of stork" />
                    <input type="button" class="search-packing__buttons--btn search-packing__buttons--confirm" value="Confirm order" />
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
                            14 mins remaning
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
                            $127
                        </p>
                        <div class="search-packing__right-info">
                            <div class="search-packing__right-row">
                                <p class="search-packing__right-label">Item total</p>
                                <p class="search-packing__right-money">$127</p>
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
                            19 mins
                        </p>
                        <p class="search-packing__right-status">
                            Packing not started
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
                            $150
                        </p>
                        <div class="search-packing__right-info">
                            <div class="search-packing__right-row">
                                <p class="search-packing__right-label">Item total</p>
                                <p class="search-packing__right-money">$150</p>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

{else}
    {* stork edit *}
    <p class="no-items no-data-new">
    {* {__("no_data")}  *}
    You Are Offline
        <span>Due to the outlet inactivity, we have switched OFF your outlet. If you wish to receive orders at this time, please turn your restaurant ON, by using the toggle in your Partner App. You will not be able to receive any orders until you turn your restaurant ON</span>
    </p>
    
        
        
        
    
{/if}

{if $orders}
    <div class="statistic clearfix" id="orders_total">
        {hook name="orders:statistic_list"}
        <div class="table-wrapper">
            <table class="pull-right ">
                {if $total_pages > 1 && $search.page != "full_list"}
                    <tr>
                        <td>&nbsp;</td>
                        <td width="100px">{__("for_this_page_orders")}:</td>
                    </tr>
                    <tr>
                        <td>{__("gross_total")}:</td>
                        <td>{include file="common/price.tpl" value=$display_totals.gross_total}</td>
                    </tr>
                    <tr>
                        <td>{__("totally_paid")}:</td>
                        <td>{include file="common/price.tpl" value=$display_totals.totally_paid}</td>
                    </tr>
                    <hr />
                    <tr>
                        <td>{__("for_all_found_orders")}:</td>
                    </tr>
                {/if}
                <tr>
                    <td class="shift-right">{__("gross_total")}:</td>
                    <td>{include file="common/price.tpl" value=$totals.gross_total}</td>
                </tr>
                {hook name="orders:totals_stats"}
                <tr>
                    <td class="shift-right"><h4>{__("totally_paid")}:</h4></td>
                    <td class="price">{include file="common/price.tpl" value=$totals.totally_paid}</td>
                </tr>
                {/hook}
            </table>
        </div>
        {/hook}
    <!--orders_total--></div>
{/if}

{include file="common/pagination.tpl" div_id=$smarty.request.content_id}


{capture name="adv_buttons"}
    {hook name="orders:manage_tools"}
        {include file="common/tools.tpl" tool_href="order_management.new" prefix="bottom" hide_tools="true" title=__("add_order") icon="icon-plus"}
    {/hook}
{/capture}

</form>
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $orders}
            <li>{btn type="list" text={__("bulk_print_invoice")} dispatch="dispatch[orders.bulk_print]" form="orders_list_form" class="cm-new-window"}</li>
            <li>{btn type="list" text={__("bulk_print_pdf")} dispatch="dispatch[orders.bulk_print..pdf]" form="orders_list_form"}</li>
            <li>{btn type="list" text={__("bulk_print_packing_slip")} dispatch="dispatch[orders.packing_slip]" form="orders_list_form" class="cm-new-window"}</li>
            <li>{btn type="list" text={__("view_purchased_products")} dispatch="dispatch[orders.products_range]" form="orders_list_form"}</li>

            <li class="divider"></li>
            <li class="mobile-hide">{btn type="list" text={__("export_selected")} dispatch="dispatch[orders.export_range]" form="orders_list_form"}</li>

            {if $orders && !$runtime.company_id}
                <li class="divider mobile-hide"></li>
                <li class="mobile-hide">{btn type="delete_selected" dispatch="dispatch[orders.m_delete]" form="orders_list_form"}</li>
            {/if}
        {/if}
        {hook name="orders:list_tools"}
        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{include file="common/mainbox.tpl"
    title=$page_title
    sidebar=$smarty.capture.sidebar
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    adv_buttons=$smarty.capture.adv_buttons
    content_id="manage_orders"
    select_storefront=true
    storefront_switcher_param_name="storefront_id"
    selected_storefront_id=$selected_storefront_id
}




{* tab *}
<script>
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
        person: null,
    },
    detailContent = {
        container: document.querySelector('.have-order .have-order__right'),
        current: null,
        person: null,
    }

    console.log("list: ",orders.list, "all: ",orders.all);
    console.log("ordersContent: ",ordersContent.container, "current: ",ordersContent.current, "person: ",ordersContent.person);
    console.log("detailContent: ",detailContent.container, "current: ",detailContent.current, "person: ",detailContent.person);

    orders.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAciveChat(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAciveChat(f) {
        orders.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        ordersContent.current = ordersContent.container.querySelector('.active')
        ordersContent.person = f.getAttribute('data-order')
        ordersContent.current.classList.remove('active')
        ordersContent.container.querySelector('[data-order="' + ordersContent.person + '"]').classList.add('active')

        detailContent.current = detailContent.container.querySelector('.active')
        detailContent.person = f.getAttribute('data-order')
        detailContent.current.classList.remove('active')
        detailContent.container.querySelector('[data-order="' + detailContent.person + '"]').classList.add('active')
    
    }

</script>

<script>
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
        person: null,
    },
    detailPacking = {
        container: document.querySelector('.have-packing .have-packing__right'),
        current: null,
        person: null,
    }

    console.log("list: ",packings.list, "all: ",packings.all);
    console.log("ordersContent: ",packingsContent.container, "current: ",packingsContent.current, "person: ",packingsContent.person);
    console.log("detailContent: ",detailPacking.container, "current: ",detailPacking.current, "person: ",detailPacking.person);

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
        packingsContent.person = f.getAttribute('data-order')
        packingsContent.current.classList.remove('active')
        packingsContent.container.querySelector('[data-order="' + packingsContent.person + '"]').classList.add('active')

        detailPacking.current = detailPacking.container.querySelector('.active')
        detailPacking.person = f.getAttribute('data-order')
        detailPacking.current.classList.remove('active')
        detailPacking.container.querySelector('[data-order="' + detailPacking.person + '"]').classList.add('active')
    
    }

</script>

<script>
    function openPacking() {
        console.log('open packing')
        document.getElementById("new").style.display="none";
        document.getElementById("packing").style.display="flex";

    }
</script>
