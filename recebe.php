<?php
    
    include 'funcoes.php';
    $nome = trataNome($_POST["nome"]);
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if(!empty($nome) && !empty($email)){
        $arquivo = fopen("C://temp/dados.txt", "a+");
        date_default_timezone_set('America/Sao_Paulo');
        fwrite($arquivo, "Dados do cliente - Cadastro 
        realizado em ".date("d-m-Y")." as ".date("H:i"));
        fwrite($arquivo, "\r\nNome: ".$nome);
        fwrite($arquivo, "\r\nIdade: ".$idade);
        fwrite($arquivo, "\r\nE-mail: ".$email);
        fwrite($arquivo, "\r\n-------------------\r\n");
        fclose($arquivo);
        
        echo "Gravado com sucesso!"; 
        
    }else{
        echo "Por favor, preencha os campos obrigatórios!";
    }

    


?>

<br>
<a href="index.php">Voltar</a>