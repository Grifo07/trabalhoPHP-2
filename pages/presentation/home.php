<?php
  include_once('../../config/init.php');

   $products = getAllProducts();  

    foreach ($products as $key => $product) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$product['nome'].'.png'))
       $photo = 'images/products/'.$product['nome'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$product['nome'].'.jpg'))
        $photo = 'images/products/'.$product['nome'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $products[$key]['photo'] = $photo;
     }

 

   $smarty->assign('products', $products);
  $smarty->display('products/list.tpl');
?>
