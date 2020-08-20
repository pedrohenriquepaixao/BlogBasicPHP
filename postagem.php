<?php
require_once 'vendor/autoload.php';

use PedroHenrique\BlogSimples\PostsBlog;

$id = $_GET['id'];

$postsBlog = new PostsBlog();

$posts = $postsBlog->getPostById($id);

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Simples</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <header class="cabecalho-principal">
        <h1>Blog Simples</h1>
        <span>O Blog mais simples que você vai ver!</span>
    </header>
    <nav>
        <ul class="menu-navegacao">
            <li><a href="./">Inicio</a></li>
            <li><a href="#">Novo Post</a></li>
        </ul>
    </nav>
    <main class="conteudo-principal">
            <div class="post-container">

                <h3 class="titulo-post"><a href="#"><?php echo $posts["titulo"]; ?></a></h3>
                <p class="conteudo-post">
                    <?php echo $posts['conteudo']; ?>
                </p>
            </div>

    </main>
    <footer class="roda-pe">
        <p>TODOS OS DIREITOS RESERVADOS À ALGUÉM.</p>
    </footer>
</div>

</body>
</html>
