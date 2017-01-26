<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 02:31:25
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156550731958494bfdf04343-41678115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff54e1bf05d75421970c86c927979f5487db1539' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl',
      1 => 1485397869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156550731958494bfdf04343-41678115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58494bfe024601_53354771',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58494bfe024601_53354771')) {function content_58494bfe024601_53354771($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>RG Peças</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/menus/showmenu.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart/cart.js" type="text/javascript"></script>
    <!-- <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/products/listPages.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
  

  </head>
  
    <header>
    <div class="linha">
      <div class="coluna">
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img id="headerLogo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/headerLogo.png"></a>
       </div>
       <div class="coluna" id="container_botoes">
       


         <nav id="navigation">
            <ul class="parent">
              <li id="categorias">Categorias
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProducts.php">Periféricos</a></li>
                  <li><a href="http://www.google.pt">Monitores</a></li>
                  <li><a href="http://www.google.pt">Torres</a></li>
                  <li><a href="http://www.google.pt">Componentes</a></li>
                </ul>
                </li>
              <li id="destaques">Destaques
                <ul class="child">
                  <li><a href="http://www.google.pt">Periféricos</a></li>
                  <li><a href="http://www.google.pt">Monitores</a></li>
                  <li><a href="http://www.google.pt">Torres</a></li>
                  <li><a href="http://www.google.pt">Componentes</a></li>
                </ul>
                </li>
            </ul>
         </nav>
        

        <div class="coluna">
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/search/livesearch.js" type="text/javascript"></script>

        <form>
          <input type="text" id="caixapesquisa" placeholder="Pesquisa" size="30" onkeyup="showResult(this.value)" />
          <div id="livesearch"></div>
        </form>
        </div>


        </div>
       </div>

        <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    
          <nav id="navigation">
           <ul class="parent">
            <li id="carrinho">Carrinho: <div id="precototal" onload="updateCart()"></div>
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/seeCart.php">Ver Carrinho</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/checkout.php">Pagamento</a></li>
                </ul>
            </li>
          </ul>
          </nav>

    </header>
   <body>
 
<?php }} ?>
