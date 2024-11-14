<?php
 $hostname = "localhost";
 $username = "pma";
 $password = "mysql";
 $dbname = "messanger";

 $conn = mysqli_connect($hostname, $username, $password, $dbname);
 if(!$conn){
  echo "Ошибка базы данных: ".mysqli_connect_error();
 }
?>