<?php

$host = "localhost";
$username = "root";
$password = "@123Abc@";
$db = "dbPessoa";

mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco.");

mysqli_select_db($db) or die("Impossível conectar ao banco");

$result=mysqli_query("SELECT * FROM PESSOA") or die("Impossível executar a query");

while($row=mysqli_fetch_object($result)) {
	echo "<img src='getImagem.php?PicNum=$row->PES_ID' \">";
}

?>