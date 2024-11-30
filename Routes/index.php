<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="../Routes/css/index.css">

    <style>
        .escolha {
            display: flex;
            flex-direction: row;
            gap: 2rem;
        }

        .escolha a {
            text-decoration: none;
        }

        .escolha a>button {
            padding: 2rem;
            border: none;
            transition: 0.3s ease-in-out;
        }

        .escolha a>button:hover {
            box-shadow: 0px 2px 5px #0b0b0b;
        }
    </style>
</head>

<body>
    <div class="container" style="display: flex; flex-direction: column;">
        <center>
            <h1>Escolha o CRUD: </h1>
        </center>
        <div class="escolha">
            <a href="../Routes/estado_crud.php" target="_blank"><button>Estado</button></a>
            <a href="../Routes/cidade_crud.php" target="_blank"><button>Cidade</button></a>
            <a href="../Routes/pessoa_crud.php" target="_blank"><button>Pessoa</button></a>
        </div>
    </div>
</body>

</html>