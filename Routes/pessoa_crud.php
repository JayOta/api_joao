<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoa CRUD</title>
    <link rel="stylesheet" href="../Routes/css/index.css">
</head>

<body>
    <div class="container">
        <form method="post" class="estado" action="../Controller/pessoa.php">
            <h1>Cadastrar Pessoa</h1>
            <input type="text" class="nome_cidade" name="nome_pessoa" placeholder="Nome da Pessoa">
            <input type="text" class="idade_pessoa" name="idade_pessoa" placeholder="Idade da Pessoa">
            <input type="text" class="id_cidade" name="cidade_id" placeholder="ID da Cidade">
            <input type="submit" value="Enviar" name="insert_pessoa">
        </form>
        <form method="get" class="pessoa" action="../Controller/pessoa.php">
            <h1>Ver Pessoa</h1>
            <input type="text" class="nome_pessoa" name="nome_pessoa" placeholder="Nome da Pessoa">
            <input type="submit" value="Enviar" name="get_pessoa">
        </form>
        <form method="post" class="cidade" action="../Controller/pessoa.php">
            <h1>Editar Pessoa</h1>
            <input type="text" class="nome_pessoa" name="nome_antigo_pessoa" placeholder="Nome Antigo da Pessoa">
            <input type="text" class="nome_pessoa" name="nome_novo_pessoa" placeholder="Nome Novo da Pessoa">
            <!-- Idade não é alterada pois ela deveria atualizar-se a cada ano automaticamente -->
            <input type="text" class="cidade_id" name="cidade_id_antigo_pessoa" placeholder="Id da Cidade Antiga">
            <input type="text" class="cidade_id" name="cidade_id_novo_pessoa" placeholder="Id da Cidade Nova">
            <input type="submit" value="Enviar" name="put_pessoa">
        </form>
        <form method="post" class="pessoa" action="../Controller/pessoa.php">
            <h1>Remover Pessoa</h1>
            <input type="text" class="nome_pessoa" name="nome_pessoa" placeholder="Nome da Pessoa">
            <input type="submit" value="Enviar" name="delete_pessoa">
        </form>
    </div>
</body>

</html>