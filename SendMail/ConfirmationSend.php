<?php 
if (!isset($_SESSION)) session_start();

$exibirModal = false;
if(!isset($_COOKIE["usuarioVisualizouModal"]))
{

$diasparaexpirar = 1;
setcookie('usuarioVisualizouModal', 'SIM', (time()+18000));

$exibirModal = true;
}

  function converte($data, $op) {
  
    if($op == 1) {
      $new_data = explode("/", $data);
      $new_data = array_reverse($new_data);
      $new_data = implode("-", $new_data);
    } elseif($op == 2) {
      $new_data = explode("-", $data);
      $new_data = array_reverse($new_data);
      $new_data = implode("/", $new_data);
      if($new_data == '00/00/0000') {
        $new_data = '';
      }
    }
    return $new_data;
  
  }
  
require("plugins/PHPMailer/class.phpmailer.php");
	$dt			= date("Y-m-d");
  $hr			= date("H:i");
  
 

 //================envia email======================


  $msg =  '
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
  <html>
  <head>
  <title>E-mail de Cadastro</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
  
  <body>
  <div align="center">
	<p><img src="http://webapp137465.ip-50-116-30-45.cloudezapp.io/SendMail/images/header.png" width="650" height="200"> 
	</p>
	<p><font color="#CC6633" size="6" face="Arial, Helvetica, sans-serif"><strong>Ol&aacute;,</strong></font></p>
	<p><font color="#333333" face="Arial, Helvetica, sans-serif">Voc&ecirc; solicitou seu cadastro 
	  na Loverz.</font></p>
	<p><font color="#333333" face="Arial, Helvetica, sans-serif">Para confirmar sua solicita&ccedil;&atilde;o, 
	  clique no bot&atilde;o e insira o c&oacute;digo abaixo:</font></p>
	<p>&nbsp;</p>
	<p><font color="#999999" face="Arial, Helvetica, sans-serif"><strong>C&oacute;digo</strong></font></p>
';

include '../includes/database.php';
$pdo = Banco::conectar();
$sql233 = "SELECT * FROM usuarios WHERE confirmado = '1' ORDER by id DESC LIMIT 1";
$q = $pdo->prepare($sql233);
$q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);
$codConfirmacao     = $data['cod_confirmacao'];
$emailCadastro     = $data['email'];
$_SESSION['EmailUsuario'] = $emailCadastro;

$msg .=  '
<p><strong><font color="#333333" size="5" face="Arial, Helvetica, sans-serif">'.$codConfirmacao.'</font></strong></p>
<p>&nbsp;</p>
<p><font color="#999999" face="Arial, Helvetica, sans-serif">Deseja confirmar 
  seu cadastro?</font></p>
<p><a href="http://www.loverz.com.br/RegisterConfirmationphp" target="_blank"><img src="http://webapp137465.ip-50-116-30-45.cloudezapp.io/SendMail/images/botao_confirmar.fw.png" width="200" height="50" border="0"></a></p>
<p>&nbsp;</p>
<p><font color="#333333" face="Arial, Helvetica, sans-serif">Abra&ccedil;os,</font></p>
<p><font color="#333333" face="Arial, Helvetica, sans-serif">Equide Loverz</font></p>
<p>&nbsp;</p>
<p><font color="#333333" face="Arial, Helvetica, sans-serif"><img src="http://webapp137465.ip-50-116-30-45.cloudezapp.io/SendMail/images/footer.png" width="650" height="200" border="0" usemap="#Map"> 
  <map name="Map">
	<area shape="rect" coords="270,118,381,140" href="http://ajuda.loverz.com.br" target="_blank">
  </map>
  </font></p>
</div>
</body>
</html>
';

$smtp 	 = 'smtp.gmail.com';
$logine  = 'loverzbrasil@gmail.com';
$passwd  = '!@qwASzx';
$aut 	 = 'TRUE';
$retorn  = 'loverzbrasil@gmail.com';
$porta 	 = '587';
$nome 	 = 'Loverz';
$assuntoEmail = "Solicitação de Cadastro";
$cct   	      = $emailCadastro;
//$cct2		  = 'eduardo@dotmidia.com.br';
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conex�o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem ser� SMTP
//$mail->SMTPDebug = true;
$mail->Host = $smtp;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = $porta;
$mail->Username = $logine;
$mail->Password = $passwd;
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $logine; // Seu e-mail
$mail->Sender = $logine; // Seu e-mail
$mail->FromName = $nome; // Seu nome
 
// Define os destinat�rio(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($cct, $ass);
$mail->AddBCC($cct2, $ass); 

// Define os dados t�cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = $assuntoEmail; // Assunto da mensagem
$mail->Body = utf8_decode($msg);

// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinat�rios e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
echo "<script>location.href='../RegisterConfirmation.php';</script>";
//echo "<script>alert('CHAMADO CRIADO E ENVIADO POR E-MAIL!');location.href='../LandingPage';</script>";
?>