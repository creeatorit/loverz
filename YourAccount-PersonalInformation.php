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
    header("Location: LandingPage");
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
<script src="js/toast.min.js"></script>
<script src="all.js"></script>
<script src="dist_files/jquery.imgareaselect.js" type="text/javascript"></script>
<script src="dist_files/jquery.form.js"></script>
<link rel="stylesheet" href="dist_files/imgareaselect.css">
<script src="functions.js"></script>
<?php include('container.php');?>
<style>
     .container-avatar {
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center
     }
     .box {
         width: 300px;
         height: 300px;
         background: #fff;
    }
    body {
       margin: 0px;
}
</style>
<!--
<link rel="stylesheet" type="text/css" href="css/loading.css"/>
<link rel="stylesheet" type="text/css" href="css/loading-btn.css"/>
-->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Informações Pessoais</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Information Form  -->
						<div class="author-page author vcard inline-items more container-avatar">
							<div class="author-thumb">
								<img class="img-circle avatar" id="profile_picture" height="128" data-src="images/tmp/<?php echo $data['foto'];?>"  data-holder-rendered="true" style="width: 140px; height: 140px;" src="images/tmp/<?php echo $data['foto'];?>" />
								<br><br>
								<a type="button" class="btn btn-primary container-avatar text-white" id="change-profile-pic">Alterar Foto</a>
							</div>
						</div><br><br>
						<!-- Modal de alteração de foto do perfil -->
						<div id="profile_pic_modal" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
                                        <h6 class="modal-title">Alterar foto do perfil</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
									<div class="modal-body">
										<form id="cropimage" method="post" enctype="multipart/form-data" action="change_pic.php">
											<strong>Upload da Imagem:</strong> <br><br>
											<input type="file" name="profile-pic" id="profile-pic" />
											<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
											<input type="hidden" name="hdn-x1-axis" id="hdn-x1-axis" value="" />
											<input type="hidden" name="hdn-y1-axis" id="hdn-y1-axis" value="" />
											<input type="hidden" name="hdn-x2-axis" value="" id="hdn-x2-axis" />
											<input type="hidden" name="hdn-y2-axis" value="" id="hdn-y2-axis" />
											<input type="hidden" name="hdn-thumb-width" id="hdn-thumb-width" value="" />
											<input type="hidden" name="hdn-thumb-height" id="hdn-thumb-height" value="" />
											<input type="hidden" name="action" value="" id="action" />
											<input type="hidden" name="image_name" value="" id="image_name" />
											
											<div id='preview-profile-pic'></div>
											<div id="thumbs" style="padding:5px; width:600p"></div>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
										<button type="button" id="save_crop" class="btn btn-primary">Crop & Salvar</button>
									</div>
								</div>
							</div>
						</div>


					<form class="content" action="salvar.php" method="POST">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Nome</label>
									<input class="form-control texto" placeholder="" type="text" name="nome" id="nome" value="<?php echo $data['nome']; ?>" required>
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Apelido</label>
									<input class="form-control" placeholder="" type="text" name="apelido" id="apelido" value="<?php echo $data['apelido']; ?>" onChange="this.value=this.value.toLowerCase()" required>
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Nascimento</label>
									<input class="form-control" placeholder="" type="date" name="nascimento" id="nascimento" value="<?php echo $data['nascimento']; ?>" required>
									<!--
									<span class="input-group-addon">
										<svg class="olymp-month-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
									</span>
									-->
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Sobrenome</label>
									<input class="form-control texto" placeholder="" type="text" name="sobrenome" id="sobrenome" value="<?php echo $data['sobrenome']; ?>" required>
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">E-mail</label>
									<input class="form-control" placeholder="" type="email" name="email" id="email" value="<?php echo $data['email']; ?>" readonly>
								</div>
					
					
								<div class="form-group label-floating">
									<label class="control-label">Telefone</label>
									<input class="form-control phone" placeholder="" type="tel" name="telefone" id="telefone" value="<?php echo $data['telefone']; ?>">
								</div>
							</div>
					
							<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">CEP</label>
									<input class="form-control cep" placeholder="" type="text" name="cep" id="cep" value="<?php echo $data['cep'];?>" onblur="pesquisacep(this.value);" required>
									<!--
									<select class="selectpicker form-control" type="text" name="pais" id="pais" required>
										<option value="<?php echo $data['pais'];?>"><?php if ($data['pais'] == 'ARG') { echo "Argentina"; } if ($data['pais'] == 'BOL') { echo "Bolívia"; } if ($data['pais'] == 'BRA') { echo "Brasil"; } if ($data['pais'] == 'CHI') { echo "Chile"; } if ($data['pais'] == 'COL') { echo "Colômbia"; } if ($data['pais'] == 'CRC') { echo "Costa Rica"; } if ($data['pais'] == 'CUB') { echo "Cuba"; } if ($data['pais'] == 'ECU') { echo "Equador"; } if ($data['pais'] == 'ESA') { echo "El Salvador"; } if ($data['pais'] == 'GUA') { echo "Guatemala"; } if ($data['pais'] == 'HAI') { echo "Haiti"; } if ($data['pais'] == 'HON') { echo "Honduras"; } if ($data['pais'] == 'MEX') { echo "México"; } if ($data['pais'] == 'NCA') { echo "Nicarágua"; } if ($data['pais'] == 'PAN') { echo "Panamá"; } if ($data['pais'] == 'PAR') { echo "Paraguai"; } if ($data['pais'] == 'PER') { echo "Peru"; } if ($data['pais'] == 'DOM') { echo "República Dominicana"; } if ($data['pais'] == 'URU') { echo "Uruguai"; } if ($data['pais'] == 'VEN') { echo "Venezuela"; } ?></option>
										<option value="ARG">Argentina</option>
										<option value="BOL">Bolívia</option>
										<option value="BRA">Brasil</option>
										<option value="CHI">Chile</option>
										<option value="COL">Colômbia</option>
										<option value="CRC">Costa Rica</option>
										<option value="CUB">Cuba</option>
										<option value="ECU">Equador</option>
										<option value="ESA">El Salvador</option>
										<option value="GUA">Guatemala</option>
										<option value="HAI">Haiti</option>
										<option value="HON">Honduras</option>
										<option value="MEX">México</option>
										<option value="NCA">Nicarágua</option>
										<option value="PAN">Panamá</option>
										<option value="PAR">Paraguai</option>
										<option value="PER">Peru</option>
										<option value="DOM">República Dominicana</option>
										<option value="URU">Uruguai </option>
										<option value="VEN">Venezuela</option>
									</select>
									-->
								</div>
							</div>
							<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Bairro</label>
									<input class="form-control texto" type="text" name="bairro" id="bairro" value="<?php echo $data['bairro'];?>" readonly>
								</div>
							</div>
							<div class="col col-lg-2 col-md-2 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Estado</label>
									<input class="form-control texto" type="text" name="estado" id="estado" value="<?php echo $data['estado'];?>" readonly>
								</div>
							</div>
							<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Cidade</label>
									<input class="form-control texto" placeholder="" type="text" name="cidade" id="cidade" value="<?php echo $data['cidade'];?>" readonly>
								</div>
							</div>							
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Tipo</label>
									<select class="selectpicker form-control" type="text" name="tipo" id="tipo" required>
										<option value="<?php echo $data['tipo'];?>"><?php if ($data['tipo'] == '1') { echo "Solteiro(a)"; } if ($data['tipo'] == '2') { echo "Casal"; } ?></option>
										<?php if($data['tipo'] == '1'){ ?>
										<option value="2">Casal</option>
										<?php } if($data['tipo'] == '2'){ ?>
										<option value="1">Solteiro(a)</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Sexo</label>
									<select class="selectpicker form-control" type="text" name="sexo" id="sexo" required>
										<option value="<?php echo $data['sexo'];?>"><?php if ($data['sexo'] == 'MA') { echo "Masculino"; } if ($data['sexo'] == 'FE') { echo "Feminino"; } if ($data['sexo'] == 'AM') { echo "Ambos"; } ?></option>
										<?php if($data['tipo'] == '1'){ ?>
										<option value="MA">Masculino</option>
										<option value="FE">Feminino</option>
										<?php } if($data['tipo'] == '2'){ ?>
										<option value="AM">Ambos</option>
										<?php } ?>
									</select>
									<p><font size="1">Caso altere o tipo de cadastro, salve antes de alterar o sexo.</font></p>
								</div>
							</div>
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Sobre</label>
									<textarea class="form-control" placeholder="" type="text" name="sobre" id="sobre" required><?php echo $data['sobre']; ?></textarea>
								</div>
							</div>
							
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Link do Perfil no Facebook</label>
									<input class="form-control" type="text" name="link_facebook" id="link_facebook" value="<?php echo $data['link_facebook']; ?>">
									<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Link do Perfil no Twitter</label>
									<input class="form-control" type="text" name="link_twitter" id="link_twitter" value="<?php echo $data['link_twitter']; ?>">
									<i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Link do Perfil no Instagram</label>
									<input class="form-control" type="text" name="link_instagram" id="link_instagram" value="<?php echo $data['link_instagram']; ?>">
									<i class="fab fa-instagram c-instagram" aria-hidden="true"></i>
								</div>
							</div>
							<!--
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
							</div>
							-->
							<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
								<!-- <button class="btn btn-primary btn-lg full-width" type="submit" name="atualiza">Salvar</button> -->
								<button class="btn btn-primary btn-lg full-width" id="informacoes_pessoais">Salvar</button>
							</div>
					
						</div>
					</form>

					<!-- ... end Personal Information Form  -->
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



<script type='text/javascript' src='js/jquery.mask.min.js'></script>

<!-- MÁSCA PARA TELEFONE/CELULAR COM DDD E 9º DÍGITO -->
	
<script type="text/javascript">
	var behavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	options = {
		onKeyPress: function (val, e, field, options) {
			field.mask(behavior.apply({}, arguments), options);
		}
	};

	$('.phone').mask(behavior, options);
</script>

<!-- Aucompleta endereço pelo CEP -->
<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            //document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            //document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                //document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>

<!-- Máscaras para Inputs -->
<script type="text/javascript">
$(document).ready(function(){
    $("input.cep").mask("00000-000");
});
</script>

