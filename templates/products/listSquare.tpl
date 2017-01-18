	{include file='common/header.tpl'}

	{include file='publicity/slider.tpl'}





	<div class="linha">



		<center><div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">DESTAQUE</h2>
				<div class="linha">
				
				{foreach $products as $product}
				
						<div class="card">
						  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b>{$product.nome}</b></h4> 
						    <p><strong>{$product.preco} €</strong></p> 
						  </div>

						            <button onclick="addToCart({$product.id},{$product.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					
				{/foreach}

				<!-- {foreach key=cid item=con from=$results}
				    <a href="contact.php?contact_id={$cid}">{$con.name} - {$con.nick}</a><br />
				{foreachelse}
				    No items were found in the search
				{/foreach} -->

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="#" style="float: right; color: black;">Mostrar todos >></a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">NOVIDADES</h2>
				<div class="linha">
				{foreach from=$products key=i item=product name=foo}
				  {if $smarty.foreach.foo.index == 4}
				    {break}
				  {/if}	
						
						<div class="card">
						  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b>{$product.nome}</b></h4> 
						    <p><strong>{$product.preco} €</strong></p> 
						  </div>

						            <button onclick="addToCart({$product.id},{$product.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="#" style="float: right; color: black;">Mostrar todas >></a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">PROMOÇÕES</h2>
				<div class="linha">
				{foreach from=$products key=i item=product name=foo}
				  {if $smarty.foreach.foo.index == 4}
				    {break}
				  {/if}	
						
						<div class="card">
						  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b>{$product.nome}</b></h4> 
						    <p><strong>{$product.preco} €</strong></p> 
						  </div>

						            <button onclick="addToCart({$product.id},{$product.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="#" style="float: right; color: black;">Mostrar todas >></a>
				</div>


		</div></center>
	</div>

	{include file='common/footer.tpl'}
	 