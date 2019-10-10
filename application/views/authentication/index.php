<?php $this->load->view('header.php'); ?>

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
					<img src="<?php echo base_url('assets/images/logo-loverz.png')?>" alt="Loverz">
					<img src="<?php echo base_url('assets/images/logo-loverz-color.png')?>" alt="Loverz" class="logo-colored">
				</div>
				<!--
				<div class="title-block">
					<h6 class="logo-title">Loverz</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
				</div>
				-->
			</a>

			<!--
			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>

			<div class="nav nav-pills nav1 header-menu">
				<div class="mCustomScrollbar">
					<ul>
						<li class="nav-item">
							<a href="#" class="nav-link">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Profile Page</a>
								<a class="dropdown-item" href="#">Newsfeed</a>
								<a class="dropdown-item" href="#">Post Versions</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-has-megamenu">
							<a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col col-sm-3">
										<h6 class="column-tittle">Main Links</h6>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">BuddyPress</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Corporate</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Forums</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Terms & Conditions</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Events</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Privacy Policy</a>
						</li>
						<li class="close-responsive-menu js-close-responsive-menu">
							<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</li>
						<li class="nav-item js-expanded-menu">
							<a href="#" class="nav-link">
								<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
								<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							</a>
						</li>
						<li class="shoping-cart more">
							<a href="#" class="nav-link">
								<svg class="olymp-shopping-bag-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-shopping-bag-icon"></use></svg>
								<span class="count-product">2</span>
							</a>
							<div class="more-dropdown shop-popup-cart">
								<ul>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="img/product1.png" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">White Enamel Mug</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x2</div>
										</div>
										<div class="product-price">$20</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="img/product2.png" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">Olympus Orange Shirt</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x1</div>
										</div>
										<div class="product-price">$40</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
								</ul>

								<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>

								<div class="cart-btn-wrap">
									<a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
									<a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
								</div>
							</div>
						</li>

						<li class="menu-search-item">
							<a href="#" class="nav-link" data-toggle="modal" data-target="#main-popup-search">
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</a>
						</li>
					</ul>
				</div>
			</div>
			-->
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Bem-vindo à maior rede social de swing do Brasil</h1>
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
							<svg class="olymp-login-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-login-icon')?>"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-register-icon')?>"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Apelido do Padrinho</div>
						<form class="content" method="POST" action="<?php echo base_url('register'); ?>">
							<div class="row">
								
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
                                                                                <input class="form-control" placeholder="" type="text" maxlength="50" name="nome" required="required" />
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Last Name</label>
                                                                                <input class="form-control" placeholder="" type="text" maxlength="50" name="sobrenome" required="required" />
									</div>
								</div>
								
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">E-mail</label>
                                                                                <input class="form-control" placeholder="" id="email" name="email" maxlength="100" type="email" required="required" />
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Senha</label>
                                                                                <input class="form-control" placeholder="" id="senha" name="senha" type="password" maxlength="32" required="required" />
									</div>
			
									<div class="form-group label-floating is-select">
										<label class="control-label">Tipo</label>
										<select class="form-control" id="tipo" name="estado_civil">
											<option disabled selected>Selecione</option>
                                                                                        <option value="Solteiro (a)">Solteiro (a)</option>
                                                                                        <option value="Casado (a)">Casado (a)</option>
                                                                                        <option value="Viúvo (a)">Viúvo (a)</option>
                                                                                        <option value="Separado (a)">Separado (a)</option>
                                                                                        <option value="Divorciado (a)">Divorciado (a)</option>
                                                                                        <option value="União Estável">União Estável</option>
                                                                                        <option value="Outro">Outro</option>
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
			
									<button type="submit" name="register" class="btn btn-purple btn-lg full-width">Completar Registro</button>
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login do Padrinho</div>
						<form class="content" action="<?php echo base_url(); ?>" method="POST"> 
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
									<!--
									<div class="remember">
			
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
									</div>
									-->
			
									<button type="submit" name="login" class="btn btn-lg btn-primary full-width">Acessar</button>
			
									<!--
									<div class="or"></div>
			
									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>
			
									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>
			
			
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
									-->
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-purple btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="olympus">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
			</a>
			<div class="modal-body">
				<form class="form-inline search-form" method="post">
					<div class="form-group label-floating">
						<label class="control-label">What are you looking for?</label>
						<input class="form-control bg-white" placeholder="" type="text" value="">
					</div>

					<button class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window Popup Main Search -->
<?php $this->load->view('footer.php'); ?>