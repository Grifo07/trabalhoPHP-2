<script>
function numCards() {
    alert("OLA");
    // alert(screen.width);
    // var n = ((0.7*screen.width)/(200+(screen.width*0.02));
    // alert(Math.floor(n));
    // return Math.floor(n);
    return 4;
    
}
</script>

<?php
  include_once('../../config/init.php');

  // var $aux = numCards();

   $products = getNProducts($aux);  

    foreach ($products as $key => $product) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.png'))
       $photo = 'images/products/'.$product['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.jpg'))
        $photo = 'images/products/'.$product['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $products[$key]['photo'] = $photo;
     }

 

   $smarty->assign('products', $products);
  $smarty->display('products/listSquare.tpl');


?>

