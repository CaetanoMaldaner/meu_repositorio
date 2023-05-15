<?php

include "db.php";

$usuarioDigitado = $_POST["usuario"];
$senhaDigitada = $_POST[sha1("senha")];


//cria a query para buscar os dados no banco de dados
$query = "SELECT * FROM usuarios WHERE usuario = $usuarioDigitado";

//executa a pesquisa no banco de dados

$usuario = mysqli_query($connection, $query);



if($senhaSalva === $senhaDigitada && $usuarioSalvo === $usuarioDigitado){
    
    //Criando sessão de usuario para verificar se já foi feito o login
    session_start();
    $_SESSION["logged"] = true;
    $_SESSION["usuario"] = $usuarioSalvo;

    //Redireciona para a tela de inicio do sistema
    header("location:index.php");

}else{

    //Redireciona para a tela de autenticação novamente caso o usuario ou a senha estejam incorretos

    header("location:home.php?error=1");
}


?>