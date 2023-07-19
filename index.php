<?php 

$host = "localhost";
$db = "curso_php";
$user = "root";
$password = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$id = 5;
$nome = "Teclado Microsoft";
$descricao = "Teclado mecanico novo em folha";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":id", $id);

if ($stmt->execute()) {
  echo "Executado com sucesso";
}


?>