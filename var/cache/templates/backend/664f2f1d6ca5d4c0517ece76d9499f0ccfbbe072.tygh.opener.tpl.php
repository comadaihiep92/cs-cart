<?php /* Smarty version Smarty-3.1.21, created on 2020-08-01 14:39:36
         compiled from "C:\xampp\htdocs\cs-cart\design\backend\templates\components\notifications_center\opener.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652603385f255478ee6b57-21160189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '664f2f1d6ca5d4c0517ece76d9499f0ccfbbe072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-cart\\design\\backend\\templates\\components\\notifications_center\\opener.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1652603385f255478ee6b57-21160189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f255478f110e3_22206095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f255478f110e3_22206095')) {function content_5f255478f110e3_22206095($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cs-cart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notifications_center.notifications','notifications_center.no_notifications','loading','notifications_center.notifications','show_more','show_less'));
?>
<li class="dropdown hover-show--disabled notifications-center__opener-wrapper cm-dropdown-skip-processing">
    <a class="dropdown-toggle" data-toggle="dropdown">
        <span
            class="icon icon-bell-alt cc-notify" 
            title="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
"
            data-ca-notifications-center-counter
        >
        </span>
        <span class="" ></span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        
    </ul>
</li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
    $.ceEvent('one', 'ce.commoninit', function () {
        var inited = false;

        $(_.doc).on('click', '.notifications-center__opener-wrapper a', function () {
            if (!inited) {
                $.ceEvent('trigger', 'ce.notifications_center.enabled', [{
                  noData: '<?php echo strtr($_smarty_tpl->__("notifications_center.no_notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                  loading: '<?php echo strtr($_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                  notifications: '<?php echo strtr($_smarty_tpl->__("notifications_center.notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                  showMore: '<?php echo strtr($_smarty_tpl->__("show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                  showLess: '<?php echo strtr($_smarty_tpl->__("show_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                }]);
                inited = !inited;
            }
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/notifications_center.js"),$_smarty_tpl);?>

<?php }} ?>
