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

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="#" style="float: right; color: black;">Mostrar todos</a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">NOVIDADES</h2>
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

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="#" style="float: right; color: black;">Mostrar todos</a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;">PROMOÇÕES</h2>
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

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="#" style="float: right; color: black;">Mostrar todos</a>
				</div>


		</div></center>
	</div>

	<script src="{$BASE_URL}javascript/cart/jquery.cookie.js" type="text/javascript"></script>
	<script src="{$BASE_URL}javascript/cart/cart.js" type="text/javascript"></script>
	<script>
	
	function numCards() {
		alert("ola");
	    alert(screen.width);
	    var n;
	    var top = (0.7*screen.width);
	    var bot = (200+(screen.width*0.02));
	    n = top/bot;
	    alert(Math.floor(n));
		}
	</script>

	{include file='common/footer.tpl'}
	 