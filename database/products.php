<?php
  
  function getAllProducts() {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM produtos");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllProductsSearch() {
    global $conn;
    $stmt = $conn->prepare("SELECT id, nome 
                            FROM produtos");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getProductById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM produtos
                            WHERE id = ? ");
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getNProducts($n) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM produtos
                            ORDER BY RANDOM()
                            LIMIT ?");
    $stmt->execute(array($n));
    return $stmt->fetchAll();
  }

  function getProductsFromCookie($ids) {
   global $conn;

   $str1 = 'SELECT * 
           FROM produtos
           WHERE';
 
   for($i=0 ; $i < sizeof($ids)-1; $i++){

    $str1 = $str1 . " id = ? OR";
    
   }
   
   $str1 = $str1 . " id = ?;";

   $stmt = $conn->prepare($str1);
   $stmt->execute($ids);
   return $stmt->fetchAll();
 }
 
 function removeProduct($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM produtos WHERE id=?");
    $stmt->execute(array($id));
  }

  function addProduct($name, $brand, $price, $stock, $categoria, $destaques, $novidades, $promocoes, $description) {

    global $conn;
    $stmt = $conn->prepare("INSERT INTO produtos (nome, descricao, preco, qtstock, marca, destaque, novidade, promocao, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute(array($name, $description, $price, $stock, $brand, $destaques, $novidades, $promocoes, $categoria));
  }

  function getIdByName($name) {
    global $conn;
    $stmt = $conn->prepare("SELECT id
                            FROM produtos
                            WHERE nome = ?");
    $stmt->execute(array($name));

    return $stmt->fetch()['id'];
  }
  

 ?>
