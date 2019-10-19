<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if(!empty($nome) && !empty($email)){
        echo "Nome: ".$nome."<br>";
        echo "E-mail: ".$email."<br>";
        echo "Idade: ".$idade; 
    }else{
        echo "Por favor, preencha os campos obrigatórios!";
    }
?>

<br>
<a href="index.php">Voltar</a>