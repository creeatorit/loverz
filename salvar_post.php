<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

include("includes/database.php");

  $post_text 		   = $_POST['post_text'];
  //$post_multimidia = $_POST['post_multimidia'];
  //if($post_text  == ''){ $post_text = '-'; }
  //if($post_multimidia  == ''){ $post_multimidia = '-'; }
  
  $usuario_id   = $_SESSION['UsuarioID'];
  $dt_hr_postagem 	= date("Y-m-d H:i:s");
  
// Verifica se o nome foi preenchido
if (empty($post_text)) {
	echo "Escreva o que está pensando...";
}
// Se não houver nenhum erro
else {
  
  $pdo = Banco::conectar();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO posts (usuario_id, dt_hr_postagem, post_text) VALUES(?,?,?)";
  $q = $pdo->prepare($sql);
  $q->execute(array($usuario_id,$dt_hr_postagem,$post_text));

  // Se inserido com sucesso
	if ($q) {
		echo false;
	} 
	// Se houver algum erro ao inserir
	else {
		echo "Não foi enviar seu post.";
	}
}
