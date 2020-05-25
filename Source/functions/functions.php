<?php

//Função responsavel por renderizar as views /Templates /$Dev. Andre 25-04-20/
function loadTemplate(string $view, $data = []){

    //View Engine -> Twig, path views ->  Source/App/Views.  /$Dev. Andre 25-04-20/
    // deixe o debug como false, por padrão ele vem true. /$Dev. Andre 25-04-20/

    $twig = new \Twig\Environment((new \Twig\Loader\FilesystemLoader('Source/App/Views/')),
     ['debug' => false]);

    //O método render ira rederizar o template. /$Dev. Andre 25-04-20/
    //Passe apenas o nome do template é o dados para o template. /$Dev. Andre 25-04-20/

    //exibe o template
    echo $twig->render($view.".twig.php", $data);
}