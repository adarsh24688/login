<?php
// incluimos a conexao ao banco
require "bd/conexao.php";

// inserimos os parâmetros
$dados_entrada = array($_POST['usuario'], $_POST['senha']);
$consulta = $conexao->prepare('SELECT * FROM usuarios WHERE usuario = ? AND senha = ?');
$consulta->execute($dados_entrada);
$total_usuarios = $consulta->rowCount();

// obtemos resultados
$resultados = $consulta->fetchAll();

// realizando ações
	// reprovado
	if($total_usuarios == 0){
		echo "<script>alert('Usuário/Senha incorreto. Tente novamente.')</script>";
		echo "<script>window.location.href = 'index.php';</script>";	
	} else {
		// listando resultados
		foreach ($resultados as $usuario) {
			$_SESSION['nome'] = $usuario['nome'];
		}
		$_SESSION['logado'] = 1;
		echo "<script>window.location.href = 'sistema.php';</script>";
	}

?>