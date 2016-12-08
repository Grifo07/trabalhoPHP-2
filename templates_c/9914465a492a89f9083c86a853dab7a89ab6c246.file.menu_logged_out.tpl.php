<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 12:03:10
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171599162758494bfe039368-58670220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9914465a492a89f9083c86a853dab7a89ab6c246' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_out.tpl',
      1 => 1480940636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171599162758494bfe039368-58670220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58494bfe0485a6_61495720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58494bfe0485a6_61495720')) {function content_58494bfe0485a6_61495720($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
