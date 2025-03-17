<?php
$usuario = $_POST['usuario'];
$cpf = $_POST['cpf'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
// dsn é a para localizar o banco de dados, mysql e nome do banco é a db_chamadinha, o localhost que é 127.0.0.1

$user = 'root';
$password = '';

// PDO é a biblioteca é o caminho que faço
$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_pessoa.cpf, tb_usuario.usuario FROM tb_pessoa INNER JOIN tb_usuario ON tb_usuario.id_pessoa = tb_pessoa.id WHERE tb_usuario.usuario =' . $usuario;

// query é um script de consulta
$dados = $banco->query($select)->fetch();

if($usuario==true){
    echo"oiaosdj";
}

