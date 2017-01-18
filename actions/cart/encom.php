<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/encomendas.php');

  if(!isset($_SESSION['username']) || empty($_SESSION['username'])) {
     echo 'Erro: Tem que fazer login';
  }

  
  
  //header('Location: ' . "google.com");
?>