<?php /* Smarty version Smarty-3.1.15, created on 2017-01-12 03:44:58
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12284132435876d80b51b618-26269655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf60b7d1eb1d752e1375a4013b7ce743ac1294f6' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquare.tpl',
      1 => 1484192695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12284132435876d80b51b618-26269655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5876d80b70e871_74413213',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876d80b70e871_74413213')) {function content_5876d80b70e871_74413213($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






	<div class="linha">



		<div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">DESTAQUE</h2>

				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						
						<div class="card">
						  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" alt="Avatar" style="width:100%">
						  <div class="containercard">
						    <h4><b><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</b></h4> 
						    <p><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
 €</strong></p> 
						  </div>


						            <button class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				<?php } ?>

				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						
						<div class="card">
						  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" alt="Avatar" style="width:100%">
						  <div class="containercard">
						    <h4><b><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</b></h4> 
						    <p><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
 €</strong></p> 
						  </div>


						            <button class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				<?php } ?>

				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						
						<div class="card">
						  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" alt="Avatar" style="width:100%">
						  <div class="containercard">
						    <h4><b><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</b></h4> 
						    <p><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
 €</strong></p> 
						  </div>


						            <button class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				<?php } ?>





	</div>


	<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 <?php }} ?>
