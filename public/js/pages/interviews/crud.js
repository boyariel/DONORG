import { Crud } from "../modules/crud.js";

let crud_interview = new Crud('form_interview', null, null);

$('#form_interview').submit(function (e) {
	e.preventDefault();
	if ($('#form_interview').valid()) {
		$('#form_interview').find('button[type="submit"]').prop('disabled', true)
		crud_interview.form = 'form_interview'
		crud_interview.route = routes.interview_store;
		crud_interview.create(table_interview_instance);

		$('#form_interview').find('button[type="submit"]').prop('disabled', false)
	}
});

$('#form_interview_edit').submit(function (e) {
	e.preventDefault();
	$('#form_interview_edit').find('button[type=submit]').prop('disabled', true)
	crud_interview.form = 'form_interview_edit'
	crud_interview.route = routes.interview_update;
	crud_interview.edit(table_interview_instance, id, function () {
		$('#update_interview').hide()
		$('#register_interview').show()
	});

});

$('#list_interviews').on('click', '#edit', function () {
	id = $(this).data('id')

	$.post(routes.get_interview, { id: id }, function (data) {
		$('#register_interview').hide();
		$('#update_interview').show();
		$('#form_interview_edit input[name="date"]').val(data.data.date).trigger('change');
		$('#form_interview_edit select[name="postulant_id"]').val(data.data.postulant_id).trigger('change');
	})
});

$('#list_interviews').on('click', '#delete', function () {
	let id = $(this).data('id')

	crud_interview.route = routes.interview_delete;
	crud_interview.delete(table_interview_instance, id)
});
