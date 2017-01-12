	{include file='common/header.tpl'}

	{include file='publicity/slider.tpl'}





	<div class="linha">



		<div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">DESTAQUE</h2>

				{foreach $products as $product}
						
						<div class="card">
						  <img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%">
						  <div class="containercard">
						    <h4><b>{$product.nome}</b></h4> 
						    <p><strong>{$product.preco} €</strong></p> 
						  </div>


						            <button class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}

				{foreach $products as $product}
						
						<div class="card">
						  <img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%">
						  <div class="containercard">
						    <h4><b>{$product.nome}</b></h4> 
						    <p><strong>{$product.preco} €</strong></p> 
						  </div>


						            <button class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}

				{foreach $products as $product}
						
						<div class="card">
						  <img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%">
						  <div class="containercard">
						    <h4><b>{$product.nome}</b></h4> 
						    <p><strong>{$product.preco} €</strong></p> 
						  </div>


						            <button class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}





	</div>


	{include file='common/footer.tpl'}
	 