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

  
//   function getUserTweets($username) {
//     global $conn;
//     $stmt = $conn->prepare("SELECT * 
//                             FROM tweets JOIN 
//                                  users USING(username) 
//                             WHERE username = ? 
//                             ORDER BY time DESC");
//     $stmt->execute(array($username));
//     return $stmt->fetchAll();
//   }

//   function createTweet($username, $tweet) {
//     global $conn;
//     $stmt = $conn->prepare("INSERT INTO tweets 
//                             VALUES (DEFAULT, ?, ?, ?)");
//     $stmt->execute(array(date('Y-m-d H:i:s'), $username, $tweet));
//   }
  
//   function getTweetCountAfter($id) {
//     global $conn;
//     $stmt = $conn->prepare("SELECT COUNT(*) AS count
//                             FROM tweets 
//                             WHERE id > ?");
//     $stmt->execute(array($id));
//     $result = $stmt->fetch();    
//     return $result['count'];
//   }

//   function getTweetsAfter($id) {
//     global $conn;
//     $stmt = $conn->prepare("SELECT * 
//                             FROM tweets JOIN 
//                                  users USING(username) 
//                             WHERE id > ?
//                             ORDER BY time");
//     $stmt->execute(array($id));
//     return $stmt->fetchAll();
//   }

// ?>
