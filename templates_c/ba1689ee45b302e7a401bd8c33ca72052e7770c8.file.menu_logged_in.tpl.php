<?php /* Smarty version Smarty-3.1.15, created on 2016-12-15 19:15:38
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14964217455852db922acef2-58941228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1689ee45b302e7a401bd8c33ca72052e7770c8' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1481825736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14964217455852db922acef2-58941228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5852db922c4d63_26610843',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852db922c4d63_26610843')) {function content_5852db922c4d63_26610843($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
 -->

<nav id="navigation">
            <ul class="parent">
              <li id="username">Username
                <ul class="child">
                  <li><a href="http://www.google.pt">Perfil</a></li>
                  <li><a href="http://www.google.pt">Encomendas</a></li>
                  <li><a href="http://www.google.pt">Logout</a></li>
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
