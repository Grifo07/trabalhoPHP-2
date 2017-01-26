<!-- <a href="{$BASE_URL}actions/users/logout.php">Logout</a>
 -->

<nav id="navigation">
            <ul class="parent">
              <li id="username">{$USERNAME}
                <ul class="child">
                  <li><a href="{$BASE_URL}pages/users/showProfile.php">Perfil</a></li>
                  <li><a href="{$BASE_URL}pages/orders/showOrders.php">Encomendas</a></li>
                  {if $ADMIN}
                    <li><a href="{$BASE_URL}pages/users/adminSettings.php">Definições Administrador</a></li>
                  {/if}
                  <li><a href="{$BASE_URL}actions/users/logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
         </nav>