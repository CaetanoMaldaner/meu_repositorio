<?php

session_start();
if (isset($_SESSION["logged"])){
	header("location:index.php");
}

?>

<div id="tituloHOME">

	<h1>Bem vindo ao sistema</h1>
	<br><br><br><br>
</div>

<form method="POST" action="login.php">
	<label> Usuário: </label><br>
	<input type="text" class="form-control" placeholder="Nome de usuário" name="usuario">
	<br><label> Senha: </label><br>
	<input type="password" class="form-control" placeholder="Senha" name="senha"><br>
	<input type="submit" class="btn btn-primary" value=" Entrar ">

</form>

<?php

if(isset($_GET['error'])){

?>

<div class="alert alert-danger" role="alert">
	Usuário e/ou senha inválidos
</div>

<?php

}

?>