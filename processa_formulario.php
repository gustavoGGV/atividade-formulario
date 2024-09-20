<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $errado = '';
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $errado.="Formato de email inválido!<br>";
    }
    if(empty($nome) || empty($email)){
        $errado.="Todos os campos são obrigatórios!<br>";
    }
    if(!empty($errado)){
        echo $errado;
        echo '<br><a href="index.html">Voltar ao formulário</a>';
    } else{
        session_start();
        $_SESSION['nome']=htmlspecialchars($nome);
        $_SESSION['email']=htmlspecialchars($email);
        header("Location: sucesso.php");
        exit();
    }
} else{
    header('Location: index.html');
    exit();
}
