import { Crud } from "../modules/crud.js";

let crud_user = new Crud('form_user', null, null);
$('#form_user').submit(function (e) {
	e.preventDefault();
	if ($('#form_user').valid()) {
		$('#form_user').find('button[type="submit"]').prop('disabled', true)
		crud_user.form = 'form_user'
		crud_user.route = routes.user_store;
		crud_user.create(table_user_instance);
	}
});

$('#form_user_edit').submit(function (e) {
	e.preventDefault();
	$('#form_user_edit').find('button[type=submit]').prop('disabled', true)
	crud_user.form = 'form_user_edit'
	crud_user.route = routes.update_user;
	crud_user.edit(table_user_instance, id, function () {
		$('#update_user').hide()
		$('#register_user').show()
	});

});

$('#list_users').on('click', '#edit', function () {
	id = $(this).data('id')

	$.post(routes.get_user, { id: id }, function (data) {
		$('#register_user').hide();
		$('#update_user').show();
		$('#form_user_edit input[name="name"]').val(data.data.name)
		$('#form_user_edit input[name="email"]').val(data.data.email)
		$('#form_user_edit input[name="is_power_user"]').prop('checked', data.data.is_power_user)
		$('#form_user_edit select[name="role_id"]').val(data.data.role_id).trigger('change')
	})
});

$('#list_users').on('click', '#delete', function () {
	let id = $(this).data('id')

	crud_user.route = routes.user_delete;
	crud_user.delete(table_user_instance, id)
});


