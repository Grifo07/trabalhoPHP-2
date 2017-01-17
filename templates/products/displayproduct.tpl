	{include file='common/header.tpl'}

	{include file='publicity/slider.tpl'}

<div class="linha">

	{foreach $indproduct as $indprod}

		<div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">{$indprod.nome}</h2>


					<div class="coluna" style="width:45%">
						<div class="linha">

							<p><center><img src={$BASE_URL}{$indprod.photo} style="width: 95%"></center></p>

							<p><h4><center>{$indprod.preco} €</center></h4></p>

							{if $indprod.qtstock gt 0}
								<font color="green"><h4><center>Em stock</center></h4><br></font>
							{else}
								<font color="red"><h4><center>Producto esgotado</center></h4><br></font>
							{/if}

							<center><button onclick="addToCart({$product.id},{$product.preco});" class="botaocompra" style="width: 55%"><span><i class="fa fa-cart-plus fa-lg"></i></span></button></center><br><br>

						</div>
					</div>
					<div class="coluna" style="width:1%">
						<p><hr size="450%" width="1" align="center"></p>
					</div>
					<div class="coluna" style="width:54%">
						<p><?php echo nl2br {$indprod.descricao} ?></p>
					</div>

		</div>
</div>

	{/foreach}

	<script src="{$BASE_URL}javascript/cart/jquery.cookie.js" type="text/javascript"></script>
	<script src="{$BASE_URL}javascript/cart/cart.js" type="text/javascript"></script>

	{include file='common/footer.tpl'}
	 