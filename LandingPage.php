<!-- Chama arquivo de conexão com o banco de dados -->
<?php include("includes/database.php"); ?>

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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  


	<!-- SweetAlert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.min.css">

	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

	<!-- Verifica se as senhas são iguais -->
	<script>
		function validarSenha(){
			senha1 = document.getElementById('senha').value;
			senha2 = document.getElementById('confirm_senha').value;
		if (senha1 != senha2) {
			swal("Ooops!", "As senhas não são iguais!", "warning");
		}else{
			document.FormSenha.submit();
		}
		}
    </script>

	<!-- Verifica nível de complexidade da senha -->
	<script>
	function verifica(){
		senha = document.getElementById("senha").value;
		forca = 0;
		mostra = document.getElementById("mostra");
		if((senha.length >= 4) && (senha.length <= 7)){
			forca += 10;
		}else if(senha.length>7){
			forca += 25;
		}
		if(senha.match(/[a-z]+/)){
			forca += 10;
		}
		if(senha.match(/[A-Z]+/)){
			forca += 20;
		}
		if(senha.match(/d+/)){
			forca += 20;
		}
		if(senha.match(/W+/)){
			forca += 25;
		}
		return mostra_res();
	}
	function mostra_res(){
		if(forca < 30){
			mostra.innerHTML = '<tr><td bgcolor="red" width="'+forca+'"></td><td>Fraca </td></tr>';
		}else if((forca >= 30) && (forca < 60)){
			mostra.innerHTML = '<tr><td bgcolor="yellow" width="'+forca+'"></td><td>Justa </td></tr>';;
		}else if((forca >= 60) && (forca < 85)){
			mostra.innerHTML = '<tr><td bgcolor="blue" width="'+forca+'"></td><td>Forte </td></tr>';
		}else{
			mostra.innerHTML = '<tr><td bgcolor="green" width="'+forca+'"></td><td>Excelente </td></tr>';
		}
	}
	</script>

	<!-- Exibe a senha digitada -->
	<script>
		$(document).ready(function () {
		var senha = $("#senha");
		$("#olho").click(function() {
		var tipo = senha.attr("type");
		if (tipo == "password") {
		senha.attr("type", "text");
		} else {
			senha.attr("type", "password");}
		});
		});
	</script>

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
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Você não tem indicação de um padrinho? Leia nossos <a href="Terms" target="">termos</a> e cadastre-se!</div>
						<form class="content" method="POST" name="f1">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">E-mail</label>
										<input class="form-control" placeholder="" id="email" name="email" type="email" required>
										<div id='resposta'></div>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Digite sua Senha</label>
										<input class="form-control" placeholder="" id="senha" name="senha" type="password" onkeyup="javascript:verifica()" required>
										<br /><img align="right" class="label-floating" id="olho" src="img/eye-icon.png"/>
										<table id="mostra"></table>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Confirme a Senha</label>
										<input class="form-control" placeholder="" id="confirm_senha" name="confirm_senha" type="password" onChange="validarSenha()" required>
									</div>
			
									<div class="form-group label-floating is-select">
										<label class="control-label">Tipo</label>
										<select class="form-control" id="tipo" name="tipo" required>
											<option></option>
											<option value="1">Solteiro(a)</option>
											<option value="2">Casal</option>
										</select>
									</div>
			
									<div class="remember">
										<div class="checkbox">
											<label>
												<input id="termos" name="termos" type="checkbox" required>
												Eu aceito os<a href="#">Termos e Condições</a> do site.
											</label>
										</div>
									</div>
			
									<button type="submit" name="register" class="btn btn-purple btn-lg full-width">Solicitar Cadastro</button>
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Já é cadastrado? Entre com o E-mail e Senha!</div>
						<form class="content" action="includes/Validation" method="POST" name="f1"> 
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">E-mail</label>
										<input class="form-control" placeholder="" id="email" name="email" type="email" required>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Senha</label>
										<input class="form-control" placeholder="" id="senha" name="senha" type="password" required>
									</div>
			
									<button type="submit" name="login" class="btn btn-lg btn-primary full-width">Acessar</button>
								</div>
							</div>
						</form>
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
switch (get_post_action('register')) {

  case 'register':

  if(!empty($_POST))
  {
	
	  $email       = $_POST['email'];
	  $senha       = sha1($_POST['senha']);        
	  $tipo        = $_POST['tipo'];

	  //Validaçao dos campos:
	  $validacao = true;

	  $dt_cadastro 	   		= date("Y-m-d");
	  $hr_cadastro 	   		= date("H:i:s");
	  $status      	   		= '1'; // 1 = Ativo, 2 = Inativo
	  $nivel       	   		= '1';
	  $termos      	   		= '1'; // 1 = Termos aceitos, 2 = Termos não aceitos
	  $cod_confirmacao 		= substr(uniqid(rand()), 0, 5); // Cria um número rodômico para confirmação de cadastro
	  $confirmado	   		= '1'; // 1 = Não confirmado, 2 = Confirmado
	  $solicitacoes_amizade = 'TD'; // TD = Todos
	  $visualizar_postagem	= 'TD'; // TD = Todos
	  $foto					= 'default.jpg';
	  }

	  $pdo = Banco::conectar();
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql2 = "SELECT * FROM usuarios where email = :email ORDER By id DESC limit 1";
	  $stmt = $pdo->prepare($sql2);
	  $stmt->bindParam(':email', $email);
	  $stmt->execute();
	  $result = $stmt->fetchAll();
	  foreach($result as $row){

	  $_SESSION['EmailCadastro'] = $row['email'];
	  }

	  //Inserindo no Banco:
	  if($row['email'] == $email){
		echo '<script>swal("Ooops!", "E-mail já cadastro em nossa rede!", "warning");</script>';
	  	}else{
		  
		  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO usuarios (email, foto, senha, tipo, status, nivel, termos, dt_cadastro, hr_cadastro, cod_confirmacao, confirmado, solicitacoes_amizade, visualizar_postagem) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		  $q = $pdo->prepare($sql);
		  $q->execute(array($email,$foto,$senha,$tipo,$status,$nivel,$termos,$dt_cadastro,$hr_cadastro,$cod_confirmacao,$confirmado,$solicitacoes_amizade,$visualizar_postagem));
		  //Banco::desconectar();

	  //echo '<script>swal("Parabéns!", "Cadastro realizado com sucesso!", "success");location.href="LandingPage#profile";</script>';
	  echo '<script>swal("Parabéns!", "Solicitação de cadastro realizado com sucesso. Verifique seu e-mail para confirmar o cadastro!", "success");location.href="SendMail/ConfirmationSend.php";</script>';

		  }
      break;

  default:
      
  }   
?>
<!-- Finaliza SQL para registro de novos usuários -->