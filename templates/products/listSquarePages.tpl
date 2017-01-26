
{include file='common/header.tpl'}
{include file='publicity/slider.tpl'}


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
                
                {foreach $products as $product}
                    
                    <!-- <li> -->
                        <!-- <img src="{$BASE_URL}{$product.photo}" alt="image"> -->


                        <div class="card">
                              <a href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%"></a>
                              <div class="containercard">
                                <h4><b>{$product.nome}</b></h4> 
                                <p><strong>{$product.preco} €</strong></p> 
                              </div>

                                        <button onclick="addToCart({$product.id},{$product.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

                        </div>
                    <!-- </li> -->
                    
                {/foreach}

                </ul>

                
                </div>
                <div class="linha" style="margin-right: 1%; margin-bottom: 1%">
                <a href="#" style="float: right; color: black;">Mostrar todos >></a>
                </div>


        </div></center>
</div>