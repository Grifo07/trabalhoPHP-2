<?php /* Smarty version Smarty-3.1.15, created on 2017-01-11 00:38:46
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151026133258495e579a7ce2-70859211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04360089400cccc4be8297d1847a9a0f121c28f2' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1484095121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151026133258495e579a7ce2-70859211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495e579b7506_20462343',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495e579b7506_20462343')) {function content_58495e579b7506_20462343($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
 -->

<nav id="navigation">
            <ul class="parent">
              <li id="username">Username
                <ul class="child">
                  <li><a href="http://www.google.pt">Perfil</a></li>
                  <li><a href="http://www.google.pt">Encomendas</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                </ul>
                </li>
              <li id="carrinho">Carrinho
                <ul class="child">
                  <li><a href="http://www.google.pt">Ver Carrinho</a></li>
                  <li><a href="http://www.google.pt">Pagamento</a></li>
                </ul>
                </li>
            </ul>
         </nav><?php }} ?>
