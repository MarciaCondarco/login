<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body{
        background-color: tomato;
    }
    h1{
        color: white;
    }
    .formulario {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 70px;
    }

    img {
        width: 200px;
        height: 200px;
    }
    .btn-warning{
        width: 600px;
    }
    
</style>
<section class="linha-formulario">
    <div class="formulario" class="text-center">

        <?php
        $id_pessoa = $_GET['id_pessoa'];

        // var_dump($id_pessoa);
        // var_dump aparece os registros
        ?>
        <h1>Editar Cadastro</h1>
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

        <form action="./pessoa-editar.php" method="POST">
            <div class="row mt-2">
                <input type="hidden" placeholder="id" name="id" value="<?php echo $dados['id_pessoa'] ?>" class="form-control">
                <div class="col">
                    <input type="text" placeholder="usuario" name="usuario" value="<?php echo $dados['usuario'] ?>" class="form-control" disabled><br>
                    <input type="text" placeholder="nome" name="nome" value="<?php echo $dados['nome'] ?>" class="form-control" disabled><br>
                </div>
                <div class="col">
                    <input type="text" placeholder="senha" name="senha" value="<?php echo $dados['senha'] ?>" class="form-control"><br>
                    <input type="number" placeholder="Telefone" name="telefone_1" value="<?php echo $dados['telefone_1'] ?>" class="form-control"><br>
                </div>
            </div>
            <input type="number" placeholder="Telefone" name="telefone_2" value="<?php echo $dados['telefone_2'] ?>" class="form-control"><br>
            <input type="text" placeholder="logradouro" name="logradouro" value="<?php echo $dados['logradouro'] ?>" class="form-control"><br>
            <input type="number" placeholder="n_casa" name="n_casa" value="<?php echo $dados['n_casa'] ?>" class="form-control" disabled><br>
            <input type="text" placeholder="bairro" name="bairro" value="<?php echo $dados['bairro'] ?>" class="form-control" disabled><br>
            <input type="text" placeholder="cidade" name="cidade" value="<?php echo $dados['cidade'] ?>" class="form-control" disabled><br>
            <input type="text" placeholder="CPF" name="CPF" value="<?php echo $dados['cpf'] ?>" class="form-control" disabled ><br>
            <input type="text" placeholder="Ano de Nascimento" name="nascimento" value="<?php echo $dados['ano_nascimento'] ?>" class="form-control" disabled><br>
            <input type="submit" class="btn btn-warning">
        </form>
    </div>
</section>,