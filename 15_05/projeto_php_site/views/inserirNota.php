<div id="tituloHOME">
<h1> Escolha o curso e aluno </h1>
</div>
<form method="POST" action="">
	<div class="row">
	<br>
	<p> Selecione o curso </p>
	 <select class="form-control" name="escolha_curso">
	 	<?php
	 		while ($linha = mysqli_fetch_array($consulta_cursos)){
	 			echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
	 		}
	 	?>
	 </select>
	 <br>
	</div>
	 <input type="submit" value = "  Selecionar curso  " class="btn btn-primary">
 </form>

 <?php

	if(isset($_POST['escolha_curso']))
    {
       $curso_escolhido = $_POST['escolha_curso']; 

 	?> 

       <form method="POST" action="processaNota.php">
			<br>
			<p> Selecione o aluno </p>
			 <select class="form-control" name="escolha_aluno">
			 	<?php
			 		while ($linha = mysqli_fetch_array($consulta_alunos)){
			 			if($linha['id_curso'] == $curso_escolhido){
			 			echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
			 			}
			 		}
			 	?>
			 </select><br>
			 <input class="form-control" type="text" placeholder="Insira a nota" name = "nota"><br>
			 <input class="form-control" type="text" placeholder="Insira descrição" name= "desc">
			 <br><br>
			 <input type="submit" value = "  Inserir nota  " class="btn btn-primary">
		 </form>

		 <?php

		 

		 
   }

?>