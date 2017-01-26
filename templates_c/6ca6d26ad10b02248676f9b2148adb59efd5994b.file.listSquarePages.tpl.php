<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 02:32:55
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquarePages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213286435058895a0ea262d5-98382432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ca6d26ad10b02248676f9b2148adb59efd5994b' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquarePages.tpl',
      1 => 1485397972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213286435058895a0ea262d5-98382432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58895a0eabfec6_33548553',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58895a0eabfec6_33548553')) {function content_58895a0eabfec6_33548553($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="linha">



        <center><div class="coluna" style="width: 70%;">
                <h2 style="text-align: center;">TODOS OS PRODUTOS</h2>
                <div class="linha">

                <form>

                    <label>items per page: </label>
                    <select>
                        <option>8</option>
                        <option>16</option>
                        <option>32</option>
                    </select>
                </form>

                <!-- navigation holder -->
                <div class="holder">
                </div>

                <!-- item container -->
                <!-- <ul id="itemContainer"> -->
                
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    
                    <!-- <li> -->
                        <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" alt="image"> -->


                        <div class="card">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" alt="Avatar" style="width:100%"></a>
                              <div class="containercard">
                                <h4><b><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</b></h4> 
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
 €</strong></p> 
                              </div>

                                        <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
);" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

                        </div>
                    <!-- </li> -->
                    
                <?php } ?>

                </ul>

                
                </div>
                <div class="linha" style="margin-right: 1%; margin-bottom: 1%">
                <a href="#" style="float: right; color: black;">Mostrar todos >></a>
                </div>


        </div></center>
</div><?php }} ?>
