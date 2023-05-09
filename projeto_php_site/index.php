<?php
//Starta a sessão do usuario
session_start();

//Confere se a variavel $_SESSION = logged = true , se sim, continua para a pagina index
if(isset($_SESSION["logged"])){
    echo "<h2>Hello World</h2>";
    echo "<a href='logout.php'> (SAIR) </a>";


}else{

    //Se não, redireciona de volta para a pagina de login caso o usuario ou senha estejam invalidos

    header("location:home.php?error=1");
}


?>

