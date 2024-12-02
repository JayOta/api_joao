<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estado CRUD</title>
    <link rel="stylesheet" href="../Routes/css/index.css">
</head>

<body>
    <div class="container">
        <form method="post" class="estado" action="../Controller/estado.php">
            <h1>Cadastrar Estado</h1>
            <input type="text" class="nome_estado" name="nome_estado" placeholder="Nome do Estado">
            <input type="text" class="sigla_estado" name="sigla_estado" placeholder="Sigla do Estado">
            <input type="submit" value="Enviar" name="insert_estado">
        </form>
        <form method="get" class="pessoa" action="../Controller/estado.php">
            <h1>Ver Estado</h1>
            <input type="text" class="nome_estado" name="nome_estado" placeholder="Nome do Estado">
            <input type="submit" value="Enviar" name="get_estado">
        </form>
        <form method="post" class="cidade" action="../Controller/estado.php">
            <h1>Editar Estado</h1>
            <input type="text" class="nome_estado" name="nome_antigo_estado" placeholder="Nome Antigo do Estado">
            <input type="text" class="nome_estado" name="nome_novo_estado" placeholder="Nome Novo do Estado">
            <input type="text" class="sigla_estado" name="sigla_antiga_estado" placeholder="Sigla Antiga do Estado">
            <input type="text" class="sigla_estado" name="sigla_nova_estado" placeholder="Sigla Nova do Estado">
            <input type="submit" value="Enviar" name="put_estado">
        </form>
        <form method="post" class="pessoa" action="../Controller/estado.php">
            <h1>Remover Estado</h1>
            <input type="text" class="nome_pessoa" name="nome_estado" placeholder="Nome do Estado">
            <input type="submit" value="Enviar" name="delete_estado">
        </form>
    </div>
</body>

</html>