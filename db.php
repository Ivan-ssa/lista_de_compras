<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lista_compras_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>


<!-- agora esta tudofuncionando certinho como eu imaginava quero fazer mais 
um detalhe, agora preciso somar a quantidade do item com o valor e colocar
 isso ao lado da lista de comprar para a pessoa visualizar o valor total das
  compras dela  -->