<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $destinatario = "matheus.limaex@gmail.com";
    $assunto = "Contato Portfolio - Matheus Leopoldo";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: contato@preliada.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destinatario,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar!");
    }

?>