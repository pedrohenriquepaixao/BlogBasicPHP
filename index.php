<?php
require_once 'vendor/autoload.php';

use PedroHenrique\BlogSimples\PostsBlog;
use PedroHenrique\BlogSimples\Conexao;


$postsBlog = new PostsBlog();
$posts = $postsBlog->showPosts();


//$posts = $conn->ListAll();


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
            <?php foreach($posts as $post): ?>
            <div class="post-container">

                <h3 class="titulo-post"><a href="postagem.php?id=<?php echo $post['id']; ?>"><?php echo $post["titulo"]; ?></a></h3>
                <p class="conteudo-post"><?php echo $post["conteudo"];?></p>
                 <a style="text-decoration: none;color:var(--white-color);" href="postagem.php?id=<?php echo $post['id']; ?>">LEIA MAIS...</a>
                <p id="leiamais">

                </p>

            </div>
            <?php endforeach; ?>
        </main>
        <footer class="roda-pe">
            <p>TODOS OS DIREITOS RESERVADOS À ALGUÉM.</p>
        </footer>
    </div>
<script>
    executar();

    function executar(){

        var conteudoPost = document.querySelectorAll('.conteudo-post');

        for(i=0;i < conteudoPost.length; i++){

            var contagemCaracteres = conteudoPost[i].innerText.split(' ',30);

            conteudoPost[i].innerText = contagemCaracteres.join(" ");

        }

    }

</script>
</body>
</html>
