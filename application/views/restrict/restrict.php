
<section id="about" class="light-bg" style="height: calc(100vh - 83px);">
	<div class="container">

		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 text-center">
				<div class="section-title">
					<h2>Painel de administração</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-5 col-lg-2 text-center">
				<div class="form-group">
					<a id="btn_your_user" class="btn btn-link" href="#" user_id="<?= $user_id; ?>"><i class="fa fa-user"></i></a>
					<a class="btn btn-link" href="restrict/logout"><i class="fa fa-sign-out"></i></a>
				</div>
			</div>
		</div>

		<div class="container">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_courses" role="tab" data-toggle="tab">Cursos</a></li>
				<li><a href="#tab_team" role="tab" data-toggle="tab">Equipe</a></li>
				<li><a href="#tab_user" role="tab" data-toggle="tab">Usuários</a></li>
			</ul>

			<div class="tab-content">
				<div id="tab_courses" class="tab-pane active">
					<div class="container-fluid">
						<h2 class="text-center"><strong>Gerenciar Cursos</strong></h2>
						<a href="#" id="btn_add_course" class="btn btn-primary"><i class="fa fa-plus"> Adicionar Curso</i></a>
						<table id="dt_courses" class="table table-striped table-bordered">
							<thead>
								<tr class="tableheader">
									<th class="dt-center">Nome</th>
									<th class="dt-center no-sort">Imagem</th>
									<th class="dt-center">Duração</th>
									<th class="no-sort">Descrição</th>
									<th class="de-center no-sort">Ações</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>

				<div id="tab_team" class="tab-pane">
					<div class="container-fluid">
						<h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
						<a href="#" id="btn_add_member" class="btn btn-primary"><i class="fa fa-plus"> Adicionar Membro</i></a>
						<table id="dt_team" class="table table-striped table-bordered">
							<thead>
								<tr class="tableheader">
									<th class="dt-center">Nome</th>
									<th class="dt-center no-sort">Foto</th>
									<th class="no-sort">Descrição</th>
									<th class="de-center no-sort">Ações</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>

				<div id="tab_user" class="tab-pane">
					<div class="container-fluid">
						<h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
						<a href="#" id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus"> Adicionar Usuário</i></a>
						<table id="dt_users" class="table table-striped table-bordered">
							<thead>
								<tr class="tableheader">
									<th>Login</th>
									<th>Nome</th>
									<th>E-mail</th>
									<th class="dt-center no-sort">Ações</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<div id="modal_course" class="modal fade">
	<div class="modal-dialog modal-lg">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Cursos</h4>
			</div>

			<div class="modal-body">
				<div class="modal-body">
					<form id="form_course">
						<input type="hidden" name="course_id" id="course_id">

						<div class="form-group">
							<label class="col-lg-2 control-label">Nome</label>
							<div class="col-lg-10">
								<input id="course_name" name="course_name" class="form-control" maxlength="100" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Imagem</label>
							<div class="col-lg-10">
								<img id="course_img_path" src="" style="max-height: 400px; max-width: 400px;" />

								<label class="btn btn-block btn-info">
									<i class="fa fa-upload">&nbsp;&nbsp;Importar imagem</i>
									<input type="file" id="btn_upload_course_img" accept="image/*" style="display: none;" />
								</label>

								<input type="hidden" id="course_img" name="course_img" />

								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Duração (h)</label>
							<div class="col-lg-10">
								<input type="number" id="course_duration" name="course_duration" class="form-control" step="0.1" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Descrição</label>
							<div class="col-lg-10">
								<textarea id="course_description" name="course_description" class="form-control"></textarea>
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group text-center">
							<button id="btn_save_course" class="btn btn-primary">
								<i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
							</button>
							<span class="help-block"></span>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>
</div>

<div id="modal_member" class="modal fade">
	<div class="modal-dialog modal-lg">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Membro</h4>
			</div>

			<div class="modal-body">
				<div class="modal-body">
					<form id="form_member">
						<input type="hidden" name="member_id" id="member_id">

						<div class="form-group">
							<label class="col-lg-2 control-label">Nome</label>
							<div class="col-lg-10">
								<input id="member_name" name="member_name" class="form-control" maxlength="100" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Foto</label>
							<div class="col-lg-10">
								<img id="member_photo_path" src="" style="max-height: 400px; max-width: 400px;" />

								<label class="btn btn-block btn-info">
									<i class="fa fa-upload">&nbsp;&nbsp;Importar foto</i>
									<input type="file" id="btn_upload_member_photo" accept="image/*" style="display: none;" />
								</label>

								<input type="hidden" id="member_photo" name="member_photo" />

								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Descrição</label>
							<div class="col-lg-10">
								<textarea id="member_description" name="member_description" class="form-control"></textarea>
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group text-center">
							<button id="btn_save_member" class="btn btn-primary">
								<i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
							</button>
							<span class="help-block"></span>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>
</div>

<div id="modal_user" class="modal fade">
	<div class="modal-dialog modal-lg">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Usuário</h4>
			</div>

			<div class="modal-body">
				<div class="modal-body">
					<form id="form_user">
						<input type="hidden" name="user_id" id="user_id">

						<div class="form-group">
							<label class="col-lg-2 control-label">login</label>
							<div class="col-lg-10">
								<input id="user_login" name="user_login" class="form-control" maxlength="30" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Nome Completo</label>
							<div class="col-lg-10">
								<input id="user_full_name" name="user_full_name" class="form-control" maxlength="100" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">E-mail</label>
							<div class="col-lg-10">
								<input id="user_email" name="user_email" class="form-control" maxlength="100" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Confirmar E-mail</label>
							<div class="col-lg-10">
								<input id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Senha</label>
							<div class="col-lg-10">
								<input type="password" id="user_password" name="user_password" class="form-control" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label">Confirmar Senha</label>
							<div class="col-lg-10">
								<input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control" />
								<span class="help-block"></span>
							</div>
						</div>

						<div class="form-group text-center">
							<button id="btn_save_user" class="btn btn-primary">
								<i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
							</button>
							<span class="help-block"></span>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>
</div>
