<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="../Routes/css/index.css">
</head>

<body>
    <div class="container">
        <form method="post" class="estado">
            <h1>Cadastrar Estado</h1>
            <input type="text" class="nome_estado" name="nome_estado" placeholder="Nome do Estado">
            <input type="text" class="sigla_estado" name="sigla_estado" placeholder="Sigla do Estado">
        </form>
        <form method="post" class="cidade">
            <h1>Cadastrar Cidade</h1>
            <input type="text" class="nome_cidade" placeholder="Nome da Cidade">
        </form>
        <form method="post" class="pessoa">
        <h1>Cadastrar Pessoa</h1>
            <input type="text" class="nome_pessoa" placeholder="Nome da Pessoa">
            <input type="number" class="idade" placeholder="Idade">
        </form>
    </div>
</body>

</html>