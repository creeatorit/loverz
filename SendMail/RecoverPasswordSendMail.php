<?php 

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
    $dt         = date("Y-m-d");
    $hr         = date("H:i");


    $email = trim($_REQUEST['email']);

 //================envia email======================

  $msg =  '

<html>
<head>
</style>
</head>
<body>

<strong>SISTEMA DE CHAMADOS T&Eacute;CNICOS</strong><br />
<hr /><br />

<strong>Ol&aacute;</strong><br /><br />
<strong>Foi solicitada uma recupera&ccedil;&atilde;o dos dados de acesso ao sistema. Segue abaixo:</strong><br /><br /><br />

';

        include '../includes/database.php';
                    $pdo = Banco::conectar();
                    $sts = " where email='".$_REQUEST['email']."'";
                    $sql = "SELECT * FROM usuarios ".$sts." ";


                    foreach($pdo->query($sql)as $row)
                    {
$msg .=  '                      
                    
                    <strong><font color="#022561">NOME ........:</font></strong> ' . $row['nome'] . '<br />
                    <strong><font color="#022561">E-MAIL ......:</font></strong> ' . $row['email'] . '<br />
                    <strong><font color="#022561">CELULAR .:</font></strong> ' . $row['telefone'] . '<br />
                    <strong><font color="#022561">USU&Aacute;RIO ..:</font></strong> '. $row['usuario'] . '<br />
                    <strong><font color="#022561">SENHA ......:</font></strong> 12345678 <br />
                    <br />

                    ';

                
                        
                    $sql = "UPDATE usuarios  set senha = '7c222fb2927d828af22f592134e8932480637c0d' WHERE email='".$row['email']."'";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($email));
                  }

                    Banco::desconectar();
$msg .=  '

<hr />
E-mail enviado automaticamente pelo nosso sistema de chamados.<br />
Favor n&atilde;o responder.<br />
<br />
</body>
</html>

';


$smtp 	 = 'mail.redemassa.com.br';
$logine  = 'sistema.tecnica@redemassa.com.br';
$passwd  = 'redemassa2019##';
$aut 	 = 'TRUE';
$retorn  = 'sistema.tecnica@redemassa.com.br';
$porta 	 = '587';
$nome 	 = 'SISCON | Grupo Massa';
$assunto = 'RECUPERAÇÃO DE SENHA';
$cct   	 = $_REQUEST['email'];
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conex�o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem ser� SMTP
//$mail->SMTPDebug = true;
$mail->Host = $smtp; // Endere�o do servidor SMTP (caso queira utilizar a autentica��o, utilize o host smtp.seudom�nio.com.br)
$mail->SMTPAuth = true; // Usar autentica��o SMTP (obrigat�rio para smtp.seudom�nio.com.br)
$mail->SMTPSecure = 'tls';
$mail->Port = $porta;
//$mail->SMTPSecure = 'tls';
$mail->Username = $logine; // Usu�rio do servidor SMTP (endere�o de email)
$mail->Password = $passwd; // Senha do servidor SMTP (senha do email usado)
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $logine; // Seu e-mail
$mail->Sender = $logine; // Seu e-mail
$mail->FromName = $nome; // Seu nome

// Define os destinat�rio(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($cct, $ass);

//$mail->AddAddress($cct2, $ass);
//$mail->AddAddress($cct3, $ass);
//$mail->AddAddress('e-mail@destino2.com.br');
//$mail->AddCC('contabilidade@moriah.cnt.br', 'Contato'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta
 
// Define os dados t�cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = utf8_decode($msg);
//$mail->AltBody = 'Este � o corpo da mensagem de teste, em Texto Plano! \r\n 
//<IMG src="http://seudom�nio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinat�rios e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

echo "<script>alert('DADOS DE ACESSO ENVIADO POR E-MAIL!');location.href='../index.php';</script>";

?>

