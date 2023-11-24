<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style-placar.css">
    <link rel="shortcut icon" href="assets/image/fivicon.png" type="image/x-icon">
    <title>Pontuação</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>    

    <main>
        <div id="tabela">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="posicao">Posição</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Pontuação</th>

                    </tr>
                </thead>
                <?php
                    include("src/extra/connection.php");

                    $sql = 'SELECT e.id, e.nome, SUM(ep.pontuacao) AS soma
                            FROM equipes e
                            LEFT JOIN equipes_provas ep ON e.id = ep.equipes_id
                            GROUP BY e.id, e.nome
                            ORDER BY soma DESC';

                    $res = mysqli_query($id, $sql);
                    $posicao = 0;

                    while ($linha = mysqli_fetch_array($res)) { 
                        $posicao++;
                        ?>
                        <tr>
                            <td><?php echo $posicao ?></td>

                            <td><?php echo $linha['nome']; ?></td>

                            <td><?php echo $linha['soma'] ?? 0; ?></td>

                            

                        </tr>

                <?php } ?>

            </table>

        </div>
    </main>

</body>
</html>