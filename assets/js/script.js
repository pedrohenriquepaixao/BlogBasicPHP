function executar(){
    var conteudoPost = document.querySelectorAll('.conteudo-post');

    for(i=0 ;i < conteudoPost.length; i++){

        var contagemCaracteres = conteudoPost[i].innerText.split(' ',30);

        conteudoPost[i].innerText = contagemCaracteres.join(" ");

    }

}