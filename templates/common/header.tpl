<!DOCTYPE html>
<html>
  <head>
    <title>RG Peças</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="{$BASE_URL}javascript/menus/showmenu.js" type="text/javascript"></script>

  

  </head>
  
    <header>
    <div class="linha">
      <div class="coluna">
      <a href="{$BASE_URL}"><img id="headerLogo" src="{$BASE_URL}images/assets/headerLogo.png"></a>
       </div>
       <div class="coluna" id="container_botoes">
       


         <nav id="navigation">
            <ul class="parent">
              <li id="categorias">Categorias
                <ul class="child">
                  <li><a href="http://www.google.pt">Periféricos</a></li>
                  <li><a href="http://www.google.pt">Monitores</a></li>
                  <li><a href="http://www.google.pt">Torres</a></li>
                  <li><a href="http://www.google.pt">Componentes</a></li>
                </ul>
                </li>
              <li id="destaques">Destaques
                <ul class="child">
                  <li><a href="http://www.google.pt">Periféricos</a></li>
                  <li><a href="http://www.google.pt">Monitores</a></li>
                  <li><a href="http://www.google.pt">Torres</a></li>
                  <li><a href="http://www.google.pt">Componentes</a></li>
                </ul>
                </li>
            </ul>
         </nav>
        

        <div class="coluna">
        <script src="{$BASE_URL}javascript/search/livesearch.js" type="text/javascript"></script>

        <form>
          <input type="text" id="caixapesquisa" placeholder="Pesquisa" size="30" onkeyup="showResult(this.value)" />
          <div id="livesearch"></div>
        </form>
        </div>


        </div>
       </div>
       </div>
       
        {if $USERNAME}
        {include file='common/menu_logged_in.tpl'}
      {else}
        {include file='common/menu_logged_out.tpl'}
      {/if}
    
    </header>
   <body>
 
