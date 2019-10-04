<?php
include("includes/header.php");
header('Content-Type: text/html; charset=utf-8');

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 1;

// Verifica se não há a variável da sessão que identifica o usuário
//if (!isset($_SESSION['UsuarioID']) AND ($_SESSION['UsuarioNivel'] >$nivel_necessario) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario2)) {
if (!isset($_SESSION['UsuarioID']) or ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: LandingPage.php");
    exit;
} 

# Inicnando a variavel que vai indentificar se temos que exibir o modal ou não
$exibirModal = false;
# Verificando se não existe o cookie
if(!isset($_COOKIE["usuarioVisualizouModal"]))
{
# Caso não exista entra aqui.

# Vamos criar o cookie com duração de 1 semana
$diasparaexpirar = 1;
//setcookie('usuarioVisualizouModal', 'SIM', (time() + ($diasparaexpirar * 24 * 3600)));
setcookie('usuarioVisualizouModal', 'SIM', (time()+18000));

# Seto nossa variavel de controle com o valor TRUE ( Verdadeiro)
$exibirModal = true;
}

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
switch (get_post_action('atualiza', )) {

  case 'atualiza':

      $solicitacoes_amizade = $_POST['solicitacoes_amizade'];
      $visualizar_postagem  = $_POST['visualizar_postagem'];

      // verifica se usuario preencheu campos obrigatorios
      $validacao = true;

      if ($validacao) {

              $sql1 = 'UPDATE usuarios set solicitacoes_amizade = ?, visualizar_postagem = ? WHERE id = "' . $_SESSION['UsuarioID'] . '"  ';
              $q = $pdo->prepare($sql1);
              $q->execute(array($solicitacoes_amizade, $visualizar_postagem));
              //echo "<script>alert('DETALHES PESSOAIS ALTERADOS COM SUCESSO!');</script>";
      }
      break;

  default:
      
  }

$data = array();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql2 = "SELECT * FROM usuarios where id = :id";
$q = $pdo->prepare($sql2);
$q->bindValue(':id', $_SESSION['UsuarioID']);
$q->execute();
if($q->rowCount() > 0) {
  $data = $q->fetch();
}
?>


<?php
include("includes/menu-left.php");
include("includes/menu-right.php");
include("includes/header-profile.php");
include("includes/AccountDashboard.php");
?>

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Configurações da Conta</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Account Settings Form -->
					
					<form class="content" method="POST">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Solicitações de Amizade</label>
									<select class="selectpicker form-control" name="solicitacoes_amizade" id="solicitacoes_amizade" required>
										<option value="<?php echo $data['solicitacoes_amizade'];?>"><?php if ($data['solicitacoes_amizade'] == 'TD') { echo "Todos"; } elseif ($data['solicitacoes_amizade'] == 'NG') { echo "Ninguém"; } ?></option>
										<?php if($data['solicitacoes_amizade'] != 'TD'){ ?>
										<option value="TD">Todos</option>
										<?php } if($data['solicitacoes_amizade'] != 'NG'){ ?>
										<option value="NG">Ninguém</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Quem pode visualizar suas postagem?</label>
									<select class="selectpicker form-control" name="visualizar_postagem" id="visualizar_postagem" required>
										<option value="<?php echo $data['visualizar_postagem'];?>"><?php if ($data['visualizar_postagem'] == 'MA') { echo "Meus Amigos"; } elseif ($data['visualizar_postagem'] == 'TD') { echo "Todos"; } ?></option>
										<?php if($data['visualizar_postagem'] != 'MA'){ ?>
										<option value="MA">Meus Amigos</option>
										<?php } if($data['visualizar_postagem'] != 'TD'){ ?>
										<option value="TD">Todos</option>
										<?php } ?>
									</select>
								</div>
							</div>
					
							<!--
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Notifications Sound</div>
										<p>A sound will be played each time you receive a new activity notification</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Notifications Email</div>
										<p>We’ll send you an email to your account each time you receive a new activity notification</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Friend’s Birthdays</div>
										<p>Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Chat Message Sound</div>
										<p>A sound will be played each time you receive a new message on an inactive chat window</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
							</div>
							
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Restaurar</button>
							</div>
							-->
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width" type="submit" name="atualiza">Salvar</button>
							</div>
						</div>
					</form>
					
					<!-- ... end Personal Account Settings Form  -->

				</div>
			</div>
		</div>

		<?php include("includes/menu-profile.php"); ?>

	</div>
</div>

<!-- ... end Your Account Personal Information -->




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="img/icon-chat1.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat3.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat5.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat7.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat8.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat10.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat11.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat12.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat13.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat14.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat16.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat17.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat18.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat19.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat20.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat21.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat22.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat23.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat24.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat25.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<?php include("includes/footer.php"); ?>