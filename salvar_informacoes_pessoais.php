<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

include("includes/database.php");

  $nome 		   	 = $_POST['nome'];
  $sobrenome  	 = $_POST['sobrenome'];
  $apelido  	   	 = $_POST['apelido'];
  $nascimento  	 = $_POST['nascimento'];
  $telefone  	   	 = $_POST['telefone'];
  if($telefone  == ''){ $telefone = '(00) 00000-0000'; }
  $cep  		   	 = $_POST['cep'];
  $bairro  		 = $_POST['bairro'];
  $cidade  		 = $_POST['cidade'];
  $estado  		 = $_POST['estado'];
  $tipo 		   	 = $_POST['tipo'];
  $sexo  		   	 = $_POST['sexo'];
  $sobre  		 = $_POST['sobre'];
  $link_facebook   = $_POST['link_facebook'];
  $link_twitter    = $_POST['link_twitter'];
  $link_instagram  = $_POST['link_instagram'];
  
  if($link_facebook == ''){ $link_facebook = 'Nenhum'; }
  if($link_twitter == ''){ $link_twitter = 'Nenhum'; }
  if($link_instagram == ''){ $link_instagram = 'Nenhum'; }
  $perfil_completo = '2';
  
  // verifica se usuario preencheu campos obrigatorios
  $validacao = true;
  
  if ($validacao) {
		  $pdo = Banco::conectar();
		  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql1 = 'UPDATE usuarios set nome = ?, sobrenome = ?, apelido = ?, nascimento = ?, telefone = ?, cep = ?, bairro = ?, cidade = ?, estado = ?, tipo = ?, sexo = ?, sobre = ?, link_facebook = ?, link_twitter = ?, link_instagram = ?, perfil_completo = ? WHERE id = "' . $_SESSION['UsuarioID'] . '"  ';
		  $q = $pdo->prepare($sql1);
		  $q->execute(array($nome, $sobrenome, $apelido, $nascimento, $telefone, $cep, $bairro, $cidade, $estado, $tipo, $sexo, $sobre, $link_facebook, $link_twitter, $link_instagram, $perfil_completo));
		  echo "Informações pessoais alteradas com sucesso!";
  }