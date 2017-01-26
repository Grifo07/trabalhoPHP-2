<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

   $products = getAllProducts();  

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
  $smarty->display('products/listSquarePages.tpl');


?>

