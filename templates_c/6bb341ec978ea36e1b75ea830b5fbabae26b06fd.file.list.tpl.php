<?php /* Smarty version Smarty-3.1.15, created on 2016-12-19 00:07:44
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10244098555850aaf6274754-79371696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb341ec978ea36e1b75ea830b5fbabae26b06fd' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/list.tpl',
      1 => 1482102462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10244098555850aaf6274754-79371696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5850aaf6327c77_25396135',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5850aaf6327c77_25396135')) {function content_5850aaf6327c77_25396135($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<div class="linha">

<?php echo $_smarty_tpl->getSubTemplate ('publicity/sidepub.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="coluna" style="width: 70%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="14.2857%">Imagem</th><th width="14.2857%">Nome</th><th width="14.2857%">Marca</th><th width="14.2857%">Preço p/unidade</th><th width="14.2857%">Categoria</th><th width="14.2857%">Quantidade</th><th width="14.2857%">Adicionar ao carrinho</th>
				  </tr>
					<form method="POST" action="removerdocarrinho.php">

				   <<?php ?>?php echo "cenas"; ?<?php ?>>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

					    <tr>
					    	<td width="14.2857%"> <img style="height: 75px; width: auto;" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" class="imagens" /> </td>
					    	<td width="14.2857%"><a id="linktabela" href="produto.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</a></td>
					    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
</td>
					    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</td>
					    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['product']->value['categoria'];?>
</td>
					    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['product']->value['qtstock'];?>
</td>
					    	<td width="14.2857%"><button type = "submit" name="idcarrinho" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/cart.png" class="x_remove_table" /></button> </td>

					    </tr>
					
				 		<?php } ?>

				  </form>
				  
							  
			</table>
	


		</div>

<?php echo $_smarty_tpl->getSubTemplate ('publicity/sidepub.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php }} ?>