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
            <h1 class="tituloBlog">Meu Blog</h1>

            <div id="container">
                <a href="./admin/index.php" target="_self">
                    <img class="botao3" width="70" height="70" src="./assets/img/admin.ico" alt="Admin"></a>
            </div>

            <!--foreach para buscar os artigos do banco de dados-->
            <?php foreach ($artigos as $artigo) : ?>
            <div class="containerConteudo">
                <h2>
                    <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                        <?php echo $artigo['titulo']; ?>
                    </a>
                </h2>
                <p>
                    <?php echo nl2br($artigo['conteudo']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>