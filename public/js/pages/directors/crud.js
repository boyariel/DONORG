import { Crud } from "../modules/crud.js";

let crud_director = new Crud('form_director', null, null);

$('#form_director').submit(function (e) {
	e.preventDefault();
		$('#form_director').find('button[type="submit"]').prop('disabled', true)
		crud_director.form = 'form_director'
		crud_director.route = routes.director_store;
		crud_director.create(table_director_instance);

		$('#form_director').find('button[type="submit"]').prop('disabled', false)
});

$('#form_director_edit').submit(function (e) {
	e.preventDefault();
	$('#form_director_edit').find('button[type=submit]').prop('disabled', true)
	crud_director.form = 'form_director_edit'
	crud_director.route = routes.director_update;
	crud_director.edit(table_director_instance, id, function () {
		$('#update_director').hide()
		$('#register_director').show()
	});

});

$('#list_directors').on('click', '#edit', function () {
	id = $(this).data('id')

	$.post(routes.get_director, { id: id }, function (data) {
		$('#register_director').hide();
		$('#update_director').show();
		$('#form_director_edit input[name="name"]').val(data.data.full_name)
		$('#form_director_edit input[name="ci"]').val(data.data.ci)
		$('#form_director_edit input[name="phone"]').val(data.data.phone)
		$('#form_director_edit input[name="email"]').val(data.data.email)
	})
});

$('#list_directors').on('click', '#delete', function () {
	let id = $(this).data('id')

	crud_director.route = routes.director_delete;
	crud_director.delete(table_director_instance, id)
});


