<?php

function createEncomenda($realname, $username, $password, $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO encomendas VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password), $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais));
  } // mudar isto

?>