<?php 
// 
echo '<h1>Cadastro de aluno</h1>';
// ordem importa o <pre> precisa estar encima do vardump
echo '<pre>';
// $_post -> variavel global, ela funciona em todo o projeto.
var_dump($_POST);
// visualizar a variavel global $_POST

$nomeFormulario = $_POST['nome'];
$usuarioFormulario = $_POST['usuario'];
$senhaFormulario = $_POST['senha'];
$NascimentoFormulario = $_POST['ano_nascimento'];
$cpfFormulario = $_POST['cpf'];
$telefone_1Formulario = $_POST['telefone_1'];
$telefone_2Formulario = $_POST['telefone_2'];
$logradouroFormulario = $_POST['logradouro'];
$n_casaFormulario = $_POST['n_casa'];
$bairroFormulario = $_POST['bairro'];
$cidadeFormulario = $_POST['cidade'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
// dsn é a para localizar o banco de dados, mysql e nome do banco é a db_chamadinha, o localhost que é 127.0.0.1

$user = 'root';
// a variavel $user diz que o usuario é o root 

$password = '';
// senha para acessar o banco de dados. 

$banco = new PDO($dsn, $user, $password);
// a variavel $banco contém as variavel da conexão com o banco.

$insert = 'INSERT INTO tb_usuario (usuario,senha) VALUES (:usuario, :senha)' ;
// script para inserir as informações  da tabela tb_alunos da coluna nome

$box = $banco->prepare($insert);
// o box vai guardar o banco preparado. 

$box->execute([
    // o box vai executar
    ':usuario' => $usuarioFormulario,
    ':senha' => $senhaFormulario,
]);

$id= $banco -> lastInsertId();

echo $id;

// ---------------------------------------------------------------
$insert = 'INSERT INTO tb_pessoa (nome,ano_nascimento,cpf,telefone_1,telefone_2,logradouro,n_casa,bairro,cidade,id)  VALUES (:nome,:ano_nascimento,:cpf,:telefone_1,:telefone_2,:logradouro,:n_casa,:bairro,:cidade,:id)';
// script para inserir as informações  da tabela tb_alunos da coluna nome

$bancoprepara = $banco->prepare($insert);
// a variavel $bancoprepara para a variavel $banco preparar o script da variavel insert

$bancoprepara->execute([
    // variavel bancoprepara vai executar
    ':id' => $id,
    ':nome' => $nomeFormulario,
    ':ano_nascimento' => $NascimentoFormulario,
    ':cpf' => $cpfFormulario,
    ':telefone_1' => $telefone_1Formulario,
    ':telefone_2' => $telefone_2Formulario,
    ':logradouro' => $logradouroFormulario,
    ':n_casa' => $n_casaFormulario,
    ':bairro' => $bairroFormulario,
    ':cidade' => $cidadeFormulario,

]);

