<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body{
        background-color: tomato;
    }
    .formulario{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 50px;;
    }   
    form{
        width: 500px;
    }
</style>
<section class="linha-formulario">
    <div class="formulario" class="text-center">
        <h1>Cadastrar Usuario</h1>
        <!-- metodo de envio -> GET: manda informações atraves da url E POST: manda informações atraves do corpo -->
        <!-- Action: ele é para onde deve enviar os dados -->
        <form action="./usuario-cadastrar.php" method="POST" class="text-center"  >
            <input type="text" placeholder="nome completo" name="nome" class="form-control" pattern="[A-Za-zá-úÁ-Ú ]+" required><br>
            <input type="text" placeholder="usuario" name="usuario" class="form-control" required><br>

            <input type="text" id="senha" placeholder="senha" name="senha" class="form-control" maxlength="8" required><br>

            <input type="text" id="senhaconfirmar" placeholder="confirmar a senha" name="senha" class="form-control" maxlength="8" required><br>

            <!-- campo que inseri o nome do tipo text -->
            <input type="date" placeholder="Nascimento" name="ano_nascimento" class="form-control" required><br>
            <!-- campo que inseri a data de nascimento do tipo date -->
            <input type="number" placeholder="cpf" name="cpf" class="form-control" required><br>
            <!-- campo que inseri o telefone com tipo number -->
            <input type="number" placeholder="contato" name="telefone_1" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="number" placeholder="segundo contato (opcional)" name="telefone_2" class="form-control" required><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="text" placeholder="logradouro" name="logradouro" class="form-control" required><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="number" placeholder="nº casa" name="n_casa" class="form-control" required><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="text" placeholder="bairro" name="bairro" class="form-control" required><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="text" placeholder="cidade" name="cidade" class="form-control" required><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="submit" class="btn btn-primary" class="text-center" >
            <!-- botão para enviar -->
        </form>
    </div>
</section>,
if($senha != $senhaconfirmar ){
    echo"
            <script>
        console.log('ola');
        </script>
    ";
    }