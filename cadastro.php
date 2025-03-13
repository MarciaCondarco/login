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
        <form action="./usuario-cadastrar.php" method="POST" class="text-center" >
            <input type="text" placeholder="nome" name="nome" class="form-control"><br>
            <!-- campo que inseri o nome do tipo text -->
            <input type="date" placeholder="Nascimento" name="nascimento" class="form-control"><br>
            <!-- campo que inseri a data de nascimento do tipo date -->
            <input type="number" placeholder="cpf" name="telefone" class="form-control"><br>
            <!-- campo que inseri o telefone com tipo number -->
            <input type="number" placeholder="contato" name="contato" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="number" placeholder="segundo contato (opcional)" name="email" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="text" placeholder="logradouro" name="logradouro" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="number" placeholder="nº casa" name="numero" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="email" placeholder="bairro" name="email" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="text" placeholder="cidade" name="cidade" class="form-control"><br>
            <!-- campo que inseri o email com tipo email -->
            <input type="submit" class="btn btn-primary" class="text-center">
            <!-- botão para enviar -->
        </form>
    </div>
</section>,