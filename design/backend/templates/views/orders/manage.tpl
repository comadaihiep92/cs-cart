{if $smarty.const.ACCOUNT_TYPE=="vendor"}
	{include file="views/orders/manage_vendor.tpl"}
{else}
	{include file="views/orders/manage_admin.tpl"}
{/if}