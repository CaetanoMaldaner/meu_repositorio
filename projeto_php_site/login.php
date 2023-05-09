<?php

$usuarioSalvo = "caetano.maldaner@alunos.sc.senac.br";
$senhaSalva = sha1("12345678");

$senhaDigitada = sha1($_POST["senha"]);
$usuarioDigitado = $_POST["usuario"];

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