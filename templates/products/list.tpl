{include file='common/header.tpl'}

{include file='publicity/slider.tpl'}





<div class="linha">



	<div class="coluna" style="width: 70%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="14.2857%">Imagem</th><th width="14.2857%">Nome</th><th width="14.2857%">Marca</th><th width="14.2857%">Preço p/unidade</th><th width="14.2857%">Categoria</th><th width="14.2857%">Quantidade</th><th width="14.2857%">Adicionar ao carrinho</th>
				  </tr>
					<form method="POST" action="removerdocarrinho.php">

				   <?php echo "cenas"; ?>
						{foreach $products as $product}

					    <tr>
					    	<td width="14.2857%"> <img style="height: 75px; width: auto;" src="{$BASE_URL}{$product.photo}" class="imagens" /> </td>
					    	<td width="14.2857%"><a id="linktabela" href="produto.php?id={$product.id}">{$product.nome}</a></td>
					    	<td width="14.2857%">{$product.marca}</td>
					    	<td width="14.2857%">{$product.preco}€</td>
					    	<td width="14.2857%">{$product.categoria}</td>
					    	<td width="14.2857%">{$product.qtstock}</td>
					    	<td width="14.2857%"><button type = "submit" name="idcarrinho" value="{$product.id}"><img src="{$BASE_URL}images/assets/cart.png" class="x_remove_table" /></button> </td>

					    </tr>
					
				 		{/foreach}

				  </form>
				  
							  
			</table>
	


		</div>




</div>


{include file='common/footer.tpl'}
 