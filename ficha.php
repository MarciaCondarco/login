<?php
// variavel global GET guarda as informações na variavel id_aluno
$id_pessoa = $_GET['id_pessoa'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
// dsn é a para localizar o banco de dados, mysql e nome do banco é a db_chamadinha, o localhost que é 127.0.0.1

$user = 'root';

$password = '';

// PDO é a biblioteca é o caminho que faço
$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_pessoa.*, tb_usuario.* FROM tb_pessoa INNER JOIN tb_usuario ON tb_usuario.id_pessoa = tb_pessoa.id WHERE tb_usuario.id_pessoa=' . $id_pessoa;

// query é um script de consulta
$dados = $banco->query($select)->fetch();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 600px;
    }
</style>
<main class="container text-center my-5">
    <form action="#">
        <input type="hidden" placeholder="id" name="id" value="<?php echo $dados['id'] ?>"><br>
        <label for="idade">Nome</label>
        <input type="text" value="<?php echo $dados['nome']  ?>" disabled class="form-control">
        <div class="row mt-2">
            <div class="col">
                <label for="data_nascimento">Usuario:</label>
                <input type="text" value="<?= $dados['usuario'] ?>" disabled class="form-control">
            </div>
            <div class="col">
                <label for="data_nascimento">Senha:</label>
                <input type="text" value="<?= $dados['senha'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="idade">ano de nascimento</label>
                <input type="text" value="<?php echo $dados['ano_nascimento']  ?>" disabled class="form-control">
            </div>
            <div class="col">
                <label for="idade">CPF</label>
                <input type="email" value="<?php echo $dados['cpf'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="telefone_1">Telefone</label>
                <input type="number" value="<?= $dados['telefone_1'] ?>" disabled class="form-control">
            </div>
            <div class="col">
                <label for="telefone_2">Telefone</label>
                <input type="number" value="<?= $dados['telefone_2'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="logradouro">Endereço</label>
                <input type="text" value="<?= $dados['logradouro'] ?>" disabled class="form-control">
            </div>
            <div class="col">
                <label for="n_casa">Nº casa</label>
                <input type="number" value="<?= $dados['n_casa'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="bairro">Bairro</label>
                <input type="text" value="<?= $dados['bairro'] ?>" disabled class="form-control">
            </div>
            <div class="col">
                <label for="cidade">Cidade</label>
                <input type="text" value="<?= $dados['cidade'] ?>" disabled class="form-control">
            </div>
        </div>
    </form>
</main>