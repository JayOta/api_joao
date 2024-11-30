<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cidade CRUD</title>
    <link rel="stylesheet" href="../Routes/css/index.css">
</head>

<body>
    <div class="container">
        <form method="post" class="estado" action="../Controller/cidade.php">
            <h1>Cadastrar Cidade</h1>
            <input type="text" class="nome_cidade" name="nome_cidade" placeholder="Nome da Cidade">
            <input type="text" class="id_estado" name="id_estado" placeholder="ID do Estado Pertencente">
            <input type="submit" value="Enviar" name="insert_cidade">
        </form>
        <form method="get" class="pessoa" action="../Controller/cidade.php">
            <h1>Ver Cidade</h1>
            <input type="text" class="nome_pessoa" name="nome_cidade" placeholder="Nome da Cidade">
            <input type="submit" value="Enviar" name="get_cidade">
        </form>
        <form method="post" class="cidade" action="../Controller/cidade.php">
            <h1>Editar Cidade</h1>
            <input type="text" class="nome_estado" name="nome_antigo_cidade" placeholder="Nome Antigo da Cidade">
            <input type="text" class="sigla_estado" name="nome_novo_cidade" placeholder="Nome Novo da Cidade">
            <input type="submit" value="Enviar" name="put_cidade">
        </form>
        <form method="post" class="pessoa" action="../Controller/cidade.php">
            <h1>Remover Cidade</h1>
            <input type="text" class="nome_pessoa" name="nome_cidade" placeholder="Nome da Cidade">
            <input type="submit" value="Enviar" name="delete_cidade">
        </form>
    </div>
</body>

</html>