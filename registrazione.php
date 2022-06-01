<?php
  $host="127.0.0";
  $username="root";
  $password="";
  $db_nome="db_Registrazione";
  $conn= new mysqli($host, $username, $password, $db_nome);
  if($conn->connect_errno){
    echo "impossibile connettersi".$conn->connect_errno."\n";
    exit;}
  $conn->close();
?>