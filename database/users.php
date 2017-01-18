<?php
  
  function createUser($realname, $username, $password, $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password), $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM users 
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }

  function getAdressByUsername($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT endereco1, endereco2, codpostal, cidade, regiao, pais
      FROM users
      WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }
?>
