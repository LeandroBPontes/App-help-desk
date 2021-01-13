<?php

	//session formulada nessa pagina de validacao
	//testada abaixo e utilizada em outras paginas
	session_start();

	//print_r($_POST); //mostra o q o array está armazenando 
	
	$_POST['email']; //recupera os names de index
	$_POST['senha'];

	$usuario_autenticado = false; //verifica autenticação
	$usuario_id = NULL;
	$usuario_perfil_id = NULL;

	$perfis = array(1 => 'Administrativos', 2 => 'Usuario');

	//hardCode - banco simplificado
	$usuarios_app = array (
	array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
	array('id' => 2,'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
	array('id' => 3,'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
	array('id' => 4,'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2)
	);

	foreach ($usuarios_app as $user) {
		//print_r($user); - utilizado para printar arrays de teste

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
				$usuario_autenticado = true;
				$usuario_id = $user['id'];
				$usuario_perfil_id = $user['perfil_id'];
		}
	}
	if($usuario_autenticado){

		$_SESSION['autenticado'] = 'sim';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;

		header('Location: home.php');//funcao php

	} else{
		$_SESSION['autenticado'] = 'nao';
		header('Location: index.php?login=erro');//funcao php
	}


?>