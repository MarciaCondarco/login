<?PHP

echo"<H1>Ola</H1>";

$userForm = $_POST['user'];
$passwordForm = $_POST['password'];
// variavel  passwordForm e userForm que contêm o metodo POST onde tem o name da pagina index 

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$consultaUsuarioSenha = 'SELECT * FROM tb_usuario WHERE usuario = "' .$userForm .'" AND senha = "' . $passwordForm . '"';

$resultado = $banco->query($consultaUsuarioSenha)->fetch();
// fetch retorna uma informação
// fetchall retorna mais de uma informação

$status = $resultado['status'];
?>

<?php if($status == "admin"){?>

    <h1>Bem vindo usuario comum</h1>

<?php }                ?>


<?php if($status == "comum"){?>
<h1>bem vindo usuario admin</h1>

<?php } ?>









<?php
die;

if (!empty($resultado) && $resultado != false){
    header('location:loginSucesso.php');
}
else{    
    echo
    "<script>
        alert('Senha ou CPF inválidos');
    </script>";
    header('location:index.php');

}