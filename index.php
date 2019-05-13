<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">
		<title>Calcula Média</title>
	</head>
	
	<body>
		<?php 
            require_once 'Aluno.php';
			require_once 'Aula.php';
			$aluno = new Aluno;
			$aula = new Aula;

			$aluno->setP1(10);
			$aluno->setMa1(8);
			$aluno->setMb1(9);
			$aluno->setP2(8);
			$aluno->setMa2(6);
			$aluno->setMb2(5.6);
			$aula->setQtdFaltas(18);
			$aula->setQtdAulas(80);
			

			$aluno->CalculaMediaN1();
			$aluno->CalculaMediaN2();
			$aluno->imprimir();
			$aula->imprimeAula();
			$aluno->CalculaMediaFinal();
			$aula->VerificaFrequencia();
			
			
		?>
	</body>
</html>