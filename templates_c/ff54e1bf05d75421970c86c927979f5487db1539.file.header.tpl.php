<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 12:03:09
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156550731958494bfdf04343-41678115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff54e1bf05d75421970c86c927979f5487db1539' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl',
      1 => 1480940636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156550731958494bfdf04343-41678115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58494bfe024601_53354771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58494bfe024601_53354771')) {function content_58494bfe024601_53354771($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Fritter</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
  </head>
  <body>
    <header>
      <h1><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Fritter</a></h1>
      <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php }?>
    </header>
    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <div id="tweet_form">
      <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/tweets/tweet.php" method="post">
        <textarea name="tweet" placeholder="Say something"></textarea>
        <input type="submit">
      </form>
    </div>
    <?php }?>
    <div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
      <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
    </div>
    <div id="success_messages">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
      <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
    </div>
<?php }} ?>
