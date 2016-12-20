<?php
$myFile = $BASE_DIR .'listaprodutos.txt';
$fh = fopen($myFile, 'w') or die("can't open file");


include($BASE_DIR .'database/products.php');

$result = getAllProductsSearch();	

foreach ($result as $key => $produto) {

	 $rss_txt .= $produto['id'];
	 $rss_txt .= '/';
	 $rss_txt .= $produto['nome'];
	 $rss_txt .= '/';

	 
}


fwrite($fh, $rss_txt);
fclose($fh);
?>