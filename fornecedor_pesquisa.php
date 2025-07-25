<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-primary text-white p-3 text-center">
        <h1>Pesquisa de Administradoes</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">

                <table class="table">
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Login</th>
                    </tr>
                    <?php
                        include "conexao.php";

                        $sql = "select * from fornecedor";

                        $result = $conexao->prepare($sql);
                        $result->execute();

                        while ( $linha = $result->fetch(PDO::FETCH_ASSOC))
                        {
                    ?>
                    <tr>
                        <td><?= $linha["codigo"] ?></td>
                        <td><?= $linha["nome"] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>

                <p>
                    <a href="index.php" class="btn btn-primary">Voltar</a>
                </p>

            </div>
        </div>
    </div>
</body>
</html>