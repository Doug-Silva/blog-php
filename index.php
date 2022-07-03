<?php

require 'config.php';
require 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Meu Blog</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <div id="container">
            <h1>Meu Blog</h1>
            <!--foreach para buscar os artigos do banco de dados-->
            <?php foreach ($artigos as $artigo) : ?>
                <h2>
                    <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                        <?php echo $artigo['titulo']; ?>
                    </a>
                </h2>
                <p>
                    <?php echo $artigo['conteudo']; ?>
                </p>
            <?php endforeach; ?>
        </div>
    </body>
</html>