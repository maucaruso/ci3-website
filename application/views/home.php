<header>
	<div class="container">
		<div class="slider-container">
			<div class="intro-text">
				<div class="intro-lead-in">Bem vindo à nossa escola</div>
				<div class="intro-heading">É um prazer conhecê-lo</div>
				<a href="#about" class="page-scroll btn btn-xl">Saiba mais</a>
			</div>
		</div>
	</div>
</header>


<section id="about" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Sobre</h2>
					<p>Uma agência criativa baseada em Candy Land, pronta para impulsionar seus negócios com alguns templates lindos. Café com leite. Agência é uma das melhores da cidade veja mais você vai se surpreender.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
</section>

<section class="overlay-dark bg-img1 dark-bg short-section">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-3 mb-sm-30">
				<div class="counter-item">
					<a href="#portfolio" class="page-scroll"><h6>Cursos</h6></a>
				</div>
			</div>
			<div class="col-md-3 mb-sm-30">
				<div class="counter-item">
					<a href="#team" class="page-scroll"><h6>Equipe</h6></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Cursos</h2>
					<p>O nosso portefólio é a melhor forma de mostrar o nosso trabalho, pode ver aqui uma grande variedade do nosso trabalho. Verifique todos eles e você encontrará o que procura.</p>
				</div>
			</div>
		</div>
		<div class="row">

			<?php if (!empty($courses)) {
				foreach ($courses as $course) { ?>
					<div class="col-md-4">
						<div class="ot-portfolio-item">
							<figure class="effect-bubba">
								<img src="<?= $course['course_img']; ?>" alt="<?= $course['course_name']; ?>" class="img-responsive center-block" />
								<figcaption>
									<h2><?= $course['course_name']; ?></h2>
									<a href="#" data-toggle="modal" data-target="#course-<?= $course['course_id']; ?>">Veja mais</a>
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- Modal for portfolio item 1 -->
					<div class="modal fade" id="course-<?= $course['course_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="Modal-label-1"><?= $course['course_name']; ?></h4>
								</div>
								<div class="modal-body">
									<img src="<?= $course['course_img']; ?>" alt="<?= $course['course_name']; ?>" class="img-responsive" />
									<div class="modal-works"><span>Duração: <?= intval($course['course_duration']); ?> (h)</span></div>
									<p><?= $course['course_description']; ?></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div><!-- end container -->
</section>

<section id="team" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Our Team</h2>
					<p>A creative agency based on Candy Land, ready to boost your business with some beautifull templates. Lattes
						Agency is one of the best in town see more you will be amazed.</p>
				</div>
			</div>
		</div>
		<div class="row">
		<?php if (!empty($team)) {
				foreach ($team as $member) { ?>
					<div class="col-md-3">
						<div class="team-item">
							<div class="team-image">
								<img src="<?= $member['member_photo'] ?>" class="img-responsive" alt="<?= $member['member_name'] ?>">
							</div>
							<div class="team-text">
								<h3><?= $member['member_name'] ?></h3>
								<p><?= $member['member_description'] ?></p>
							</div>
						</div>
					</div>
				<?php }
			} ?>
			<!-- team member item -->
	
		</div>
	</div>
</section>
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Entre em contato conosco</h2>
					<p>Se você tiver alguma dúvida ou precisar de ajuda! Entre em contato conosco!<br>Fazemos um design legal e limpo para o seu O negócio</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h3>Nosso escritório comercial</h3>
				<p>3422 Street, Barcelona 432, Spain, New Building North, 15th Floor</p>
				<p><i class="fa fa-phone"></i> +101 377 655 22125</p>
				<p><i class="fa fa-envelope"></i> mail@yourcompany.com</p>
			</div>
			<div class="col-md-3">
				<h3>Business Hours</h3>
				<p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>9am to 8pm</span></p>
				<p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span>9am to 2pm</span></p>
				<p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span>Closed</span></p>
			</div>
			<div class="col-md-6">
				<form name="sentMessage" id="contactForm" novalidate="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu nome *" id="name" required=""
									data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Seu email *" id="email" required=""
									data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Sua mensagem *" id="message" required=""
									data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
