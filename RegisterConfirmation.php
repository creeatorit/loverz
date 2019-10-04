<?php
include("includes/database.php");

if (!isset($_SESSION)) session_start();

$exibirModal = false;
if(!isset($_COOKIE["usuarioVisualizouModal"]))
{

$diasparaexpirar = 1;
setcookie('usuarioVisualizouModal', 'SIM', (time()+18000));

$exibirModal = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Loverz</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="js/libs/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- SweetAlert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.min.css">

	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body class="landing-page">


<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Aguarde...</div>
	</div>
</div>

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="img/logo-loverz.png" alt="Loverz">
					<img src="img/logo-loverz-color.png" alt="Loverz" class="logo-colored">
				</div>
			</a>
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Bem-vindo à maior rede social de swing da <br />América Latina</h1>
				<p>Compartilhe aqui seus desejos, sonhos, segredos e fantasias.</p>
				<!-- <a href="#" class="btn btn-md btn-border c-white">Register Now!</a> -->
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Confirme abaixo sua solicitção de cadastro inserindo do código enviado por e-mail.</div>
						<form class="content" method="POST">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating" hidden>
										<input class="form-control" placeholder="" id="email" name="email" type="email" value="<?php echo $_SESSION['EmailUsuario']; ?>">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Código de Verificação</label>
										<input class="form-control" placeholder="" id="cod_confirmacao" name="cod_confirmacao" type="number">
									</div>			
									<button type="submit" name="confirm" class="btn btn-purple btn-lg full-width">Confirmar Cadastro</button>
								</div>
								<div style="margin:auto;">Não recebeu seu código?</div><br><br><br>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">		
									<button typer="submit" name="sendCod" class="btn btn-primary btn-lg full-width">Reenviar Código</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
			<!-- ... end Login-Registration Form  -->
		</div>
	</div>
</div>

<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.4.1.js"></script>
<script src="js/libs/jquery.appear.js"></script>
<script src="js/libs/jquery.mousewheel.js"></script>
<script src="js/libs/perfect-scrollbar.js"></script>
<script src="js/libs/jquery.matchHeight.js"></script>
<script src="js/libs/svgxuse.js"></script>
<script src="js/libs/imagesloaded.pkgd.js"></script>
<script src="js/libs/Headroom.js"></script>
<script src="js/libs/velocity.js"></script>
<script src="js/libs/ScrollMagic.js"></script>
<script src="js/libs/jquery.waypoints.js"></script>
<script src="js/libs/jquery.countTo.js"></script>
<script src="js/libs/popper.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/bootstrap-select.js"></script>
<script src="js/libs/smooth-scroll.js"></script>
<script src="js/libs/selectize.js"></script>
<script src="js/libs/swiper.jquery.js"></script>
<script src="js/libs/moment.js"></script>
<script src="js/libs/daterangepicker.js"></script>
<script src="js/libs/fullcalendar.js"></script>
<script src="js/libs/isotope.pkgd.js"></script>
<script src="js/libs/ajax-pagination.js"></script>
<script src="js/libs/Chart.js"></script>
<script src="js/libs/chartjs-plugin-deferred.js"></script>
<script src="js/libs/circle-progress.js"></script>
<script src="js/libs/loader.js"></script>
<script src="js/libs/run-chart.js"></script>
<script src="js/libs/jquery.magnific-popup.js"></script>
<script src="js/libs/jquery.gifplayer.js"></script>
<script src="js/libs/mediaelement-and-player.js"></script>
<script src="js/libs/mediaelement-playlist-plugin.min.js"></script>
<script src="js/libs/ion.rangeSlider.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>
<script defer src="fonts/fontawesome-all.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>

<!-- Inicia SQL para registro de novos usuários -->
<?php

// Chama função para pegar o POST de cada FORM
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}


// Verifica qual botao foi clicado
switch (get_post_action('confirm', 'sendCod')) {

  case 'confirm':

  if(!empty($_POST))
  {
	
	  $cod_confirmacao  = $_POST['cod_confirmacao'];
	  $confirmado		= '2';

	  //Validaçao dos campos:
	  $validacao = true;
	  }

	  $pdo = Banco::conectar();
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT * FROM usuarios where cod_confirmacao = :cod_confirmacao ORDER By id DESC limit 1";
	  $stmt = $pdo->prepare($sql);
	  $stmt->bindParam(':cod_confirmacao', $cod_confirmacao);
	  $stmt->execute();
	  $result = $stmt->fetchAll();
	  foreach($result as $row){
	  }

	  //Inserindo no Banco:
	  if($row['cod_confirmacao'] == $cod_confirmacao){

		$sql2 = 'UPDATE usuarios set confirmado = ? WHERE cod_confirmacao = "' . $cod_confirmacao . '"  ';
		$q = $pdo->prepare($sql2);
		$q->execute(array($confirmado));

		echo '<script>swal("Parabéns!", "Sua conta foi confirmada com sucesso! Você será direcionado para nossa tela de login.", "success");location.href="LandingPage";</script>';

	  	}else{
		  
			echo '<script>swal("Ooops!", "Código inserido está errado!", "warning");</script>';

		  }
	  break;
	  
	  case 'sendCod':

	  if(!empty($_POST))
  		{
	
	  $email  = $_POST['email'];

	  //Validaçao dos campos:
	  $validacao = true;
	  }

		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql2 = "SELECT * FROM usuarios where email = :email ORDER By id DESC limit 1";
		$stmt = $pdo->prepare($sql2);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		$result = $stmt->fetchAll();
		foreach($result as $row){

		$_SESSION['EmailUsuario2'] = $row['email'];

		echo '<script>swal("Parabéns!", "Código de verificação enviado com sucesso!", "success");location.href="SendMail/ConfirmationSend2.php";</script>';
		
	}

		  
		  break;

  default:
      
  }   
?>
<!-- Finaliza SQL para registro de novos usuários -->