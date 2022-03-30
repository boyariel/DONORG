import { Crud } from "../modules/crud.js";

let crud_secretary = new Crud('form_secretary', null, null);

$('#form_secretary').submit(function (e) {
	e.preventDefault();
	if ($('#form_secretary').valid()) {
		$('#form_secretary').find('button[type="submit"]').prop('disabled', true)
		crud_secretary.form = 'form_secretary'
		crud_secretary.route = routes.secretary_store;
		crud_secretary.create(table_secretary_instance);

		$('#form_secretary').find('button[type="submit"]').prop('disabled', false)
	}
});

$('#form_secretary_edit').submit(function (e) {
	e.preventDefault();
	$('#form_secretary_edit').find('button[type=submit]').prop('disabled', true)
	crud_secretary.form = 'form_secretary_edit'
	crud_secretary.route = routes.secretary_update;
	crud_secretary.edit(table_secretary_instance, id, function () {
		$('#update_secretary').hide()
		$('#register_secretary').show()
	});

});

$('#list_secretaries').on('click', '#edit', function () {
	id = $(this).data('id')

	$.post(routes.get_secretary, { id: id }, function (data) {
		$('#register_secretary').hide();
		$('#update_secretary').show();
		$('#form_secretary_edit input[name="name"]').val(data.data.full_name)
		$('#form_secretary_edit input[name="email"]').val(data.data.email)

	})
});

$('#list_secretaries').on('click', '#delete', function () {
	let id = $(this).data('id')

	crud_secretary.route = routes.secretary_delete;
	crud_secretary.delete(table_secretary_instance, id)
});


