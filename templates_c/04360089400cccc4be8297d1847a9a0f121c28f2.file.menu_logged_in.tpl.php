<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 13:21:27
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151026133258495e579a7ce2-70859211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04360089400cccc4be8297d1847a9a0f121c28f2' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1480940636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151026133258495e579a7ce2-70859211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495e579b7506_20462343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495e579b7506_20462343')) {function content_58495e579b7506_20462343($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
