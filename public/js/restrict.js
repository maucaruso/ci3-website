$(function () {

	$('#btn_add_course').click(function () {
		clearErrors();
		$('#form_course')[0].reset();
		$('#course_img_path').attr('src', '');
		$('#modal_course').modal();
	});

	$('#btn_add_member').click(function () {
		clearErrors();
		$('#form_member')[0].reset();
		$('#member_photo_path').attr('src', '');
		$('#modal_member').modal();
	});

	$('#btn_add_user').click(function () {
		clearErrors();
		$('#form_user')[0].reset();
		$('#modal_user').modal();
	});

	$('#btn_upload_course_img').change(function () {
		uploadImg($(this), $('#course_img_path'), $('#course_img'));
	});

	$('#btn_upload_member_photo').change(function () {
		uploadImg($(this), $('#member_photo_path'), $('#member_photo'));
	});

	$('#form_course').submit(function () {

		$.ajax({
			type: 'post',
			url: BASE_URL + 'restrict/ajax_save_course',
			dataType: 'json',
			data: $(this).serialize(),
			beforeSend: function () {
				clearErrors();
				$('#btn_save_course').siblings('.help-block').html(loadingImg('Verificando...'));
			},
			success: function (response) {
				clearErrors();
				if (response['status']) {
					dt_course.ajax.reload();
					new swal('Sucesso!', 'Curso salvo com sucesso', 'success');
					$('#modal_course').modal('hide');
				} else {
					showErrorsModal(response['error_list']);
				}
			}
		})

		return false;
	});

	$('#form_member').submit(function () {

		$.ajax({
			type: 'post',
			url: BASE_URL + 'restrict/ajax_save_member',
			dataType: 'json',
			data: $(this).serialize(),
			beforeSend: function () {
				clearErrors();
				$('#btn_save_member').siblings('.help-block').html(loadingImg('Verificando...'));
			},
			success: function (response) {
				clearErrors();
				if (response['status']) {
					dt_member.ajax.reload();
					new swal('Sucesso!', 'Membro salvo com sucesso', 'success');
					$('#modal_member').modal('hide');
				} else {
					showErrorsModal(response['error_list']);
				}
			}
		})

		return false;
	});

	$('#form_user').submit(function () {

		$.ajax({
			type: 'post',
			url: BASE_URL + 'restrict/ajax_save_user',
			dataType: 'json',
			data: $(this).serialize(),
			beforeSend: function () {
				clearErrors();
				$('#btn_save_user').siblings('.help-block').html(loadingImg('Verificando...'));
			},
			success: function (response) {
				clearErrors();
				if (response['status']) {
					dt_user.ajax.reload();
					new swal('Sucesso!', 'Usuário salvo com sucesso', 'success');
					$('#modal_user').modal('hide');
				} else {
					showErrorsModal(response['error_list']);
				}
			}
		})

		return false;
	});

	$('#btn_your_user').click(function () {

		$.ajax({
			type: 'post',
			url: BASE_URL + 'restrict/ajax_get_user_data',
			dataType: 'json',
			data: { "user_id": $(this).attr('user_id') },
			success: function (response) {
				clearErrors();
				$('#form_user')[0].reset();

				$.each(response['input'], function (id, value) {
					$(`#${id}`).val(value);
				});

				$('#modal_user').modal();
			}
		})

		return false;
	});

	function active_btn_course() {
		$('.btn-edit-course').click(function () {

			$.ajax({
				type: 'post',
				url: BASE_URL + 'restrict/ajax_get_course_data',
				dataType: 'json',
				data: { "course_id": $(this).attr('course_id') },
				success: function (response) {
					clearErrors();
					$('#form_course')[0].reset();

					$.each(response['input'], function (id, value) {
						$(`#${id}`).val(value);
					});
					$('#course_img_path').attr('src', response['img']['course_img_path']);

					$('#modal_course').modal();
				}
			})

			return false;
		});

		$('.btn-delete-course').click(function () {

			var courseId = $(this);

			new swal({
				title: "Atenção",
				text: "Deseja deletar esse curso?",
				type: "Warning",
				showCancelButton: true,
				confirmButtonColor: '#d9534f',
				confirmButtonText: "Sim",
				cancelButtonText: "Não",
				closeOnConfirma: true,
				closeOnCancel: true,
			}).then((result) => {
				if (result.value) {
					$.ajax({
						type: 'post',
						url: BASE_URL + 'restrict/ajax_delete_course_data',
						dataType: 'json',
						data: { "course_id": courseId.attr('course_id') },
						success: function () {
							new swal("Sucesso!", "Ação executada com sucesso", "success");
							dt_course.ajax.reload();
						}
					})
				}
			});

			return false;
		});
	}

	var dt_course = $('#dt_courses').DataTable({
		"oLanguage": DATATABLE_PTBR,
		"autoWidth": false,
		"processing": true,
		"serverSide": true,
		"ajax": {
			"url": BASE_URL + "restrict/ajax_list_course",
			"type": "POST"
		},
		"columnDefs": [
			{ targets: 'no-sort', orderable: false },
			{ targets: 'dt-center', className: 'dt-center' }
		],
		"drawCallback": function () {
			active_btn_course();
		}
	});

	function active_btn_member() {
		$('.btn-edit-member').click(function () {

			$.ajax({
				type: 'post',
				url: BASE_URL + 'restrict/ajax_get_member_data',
				dataType: 'json',
				data: { "member_id": $(this).attr('member_id') },
				success: function (response) {

					clearErrors();
					$('#form_member')[0].reset();

					$.each(response['input'], function (id, value) {
						$(`#${id}`).val(value);
					});
					$('#member_photo_path').attr('src', response['img']['member_photo_path']);

					$('#modal_member').modal();
				}
			})

			return false;
		});

		$('.btn-delete-member').click(function () {

			var memberId = $(this);

			new swal({
				title: "Atenção",
				text: "Deseja deletar esse membro?",
				type: "Warning",
				showCancelButton: true,
				confirmButtonColor: '#d9534f',
				confirmButtonText: "Sim",
				cancelButtonText: "Não",
				closeOnConfirma: true,
				closeOnCancel: true,
			}).then((result) => {
				if (result.value) {
					$.ajax({
						type: 'post',
						url: BASE_URL + 'restrict/ajax_delete_member_data',
						dataType: 'json',
						data: { "member_id": memberId.attr('member_id') },
						success: function () {
							new swal("Sucesso!", "Ação executada com sucesso", "success");
							dt_member.ajax.reload();
						}
					})
				}
			});

			return false;
		});
	}

	var dt_member = $('#dt_team').DataTable({
		"oLanguage": DATATABLE_PTBR,
		"autoWidth": false,
		"processing": true,
		"serverSide": true,
		"ajax": {
			"url": BASE_URL + "restrict/ajax_list_member",
			"type": "POST"
		},
		"columnDefs": [
			{ targets: 'no-sort', orderable: false },
			{ targets: 'dt-center', className: 'dt-center' }
		],
		"drawCallback": function () {
			active_btn_member();
		}
	});

	function active_btn_user() {
		$('.btn-edit-user').click(function () {

			$.ajax({
				type: 'post',
				url: BASE_URL + 'restrict/ajax_get_user_data',
				dataType: 'json',
				data: { "user_id": $(this).attr('user_id') },
				success: function (response) {

					clearErrors();
					$('#form_user')[0].reset();

					$.each(response['input'], function (id, value) {
						$(`#${id}`).val(value);
					});

					$('#modal_user').modal();
				}
			})

			return false;
		});

		$('.btn-delete-user').click(function () {

			var userId = $(this);

			new swal({
				title: "Atenção",
				text: "Deseja deletar esse usuário?",
				type: "Warning",
				showCancelButton: true,
				confirmButtonColor: '#d9534f',
				confirmButtonText: "Sim",
				cancelButtonText: "Não",
				closeOnConfirma: true,
				closeOnCancel: true,
			}).then((result) => {
				if (result.value) {
					$.ajax({
						type: 'post',
						url: BASE_URL + 'restrict/ajax_delete_user_data',
						dataType: 'json',
						data: { "user_id": userId.attr('user_id') },
						success: function () {
							new swal("Sucesso!", "Ação executada com sucesso", "success");
							dt_user.ajax.reload();
						}
					})
				}
			});

			return false;
		});
	}

	var dt_user = $('#dt_users').DataTable({
		"oLanguage": DATATABLE_PTBR,
		"autoWidth": false,
		"processing": true,
		"serverSide": true,
		"ajax": {
			"url": BASE_URL + "restrict/ajax_list_user",
			"type": "POST"
		},
		"columnDefs": [
			{ targets: 'no-sort', orderable: false },
			{ targets: 'dt-center', className: 'dt-center' }
		],
		"drawCallback": function () {
			active_btn_user();
		}
	});

});
