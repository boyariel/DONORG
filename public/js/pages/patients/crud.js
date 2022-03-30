import { Crud } from "../modules/crud.js";

let crud_patient = new Crud('form_patient', null, null);

$('#form_patient').submit(function (e) {
	e.preventDefault();
	if ($('#form_patient').valid()) {
		$('#form_patient').find('button[type="submit"]').prop('disabled', true)
		crud_patient.form = 'form_patient'
		crud_patient.route = routes.patient_store;
		crud_patient.create(table_patient_instance);
	}
});

$('#form_patient_edit').submit(function (e) {
    e.preventDefault();
    $('#form_patient_edit').find('button[type=submit]').prop('disabled', true)
    crud_patient.form = 'form_patient_edit'
    crud_patient.route = routes.patient_update;
    crud_patient.edit(table_patient_instance, id, function () {
        $('#update_patient').hide()
        $('#register_patient').show()
    });

});

$('#list_patients').on('click', '#edit', function () {
    id = $(this).data('id')

    $.post(routes.get_patient, { id: id }, function (data) {
        $('#register_patient').hide();
        $('#update_patient').show();
        $('#form_patient_edit input[name="first_name"]').val(data.data.first_name)
        $('#form_patient_edit input[name="last_name_father"]').val(data.data.last_name_father)
        $('#form_patient_edit input[name="last_name_mother"]').val(data.data.last_name_mother)
        $('#form_patient_edit input[name="personal_id"]').val(data.data.personal_id)
        $('#form_patient_edit input[name="code"]').val(data.data.code)
        $('#form_patient_edit input[name="birhtdate"]').val(data.data.birthdate).trigger('change');
        $('#form_patient_edit input[name="address"]').val(data.data.address)
        $('#form_patient_edit input[name="number_reference"]').val(data.data.number_reference)
        $('#form_patient_edit select[name="gender"]').val(data.data.gender).trigger('change')
        $('#form_patient_edit input[name="email"]').val(data.data.email)
    })
});

$('#list_patients').on('click', '#delete', function () {
    let id = $(this).data('id')

    crud_patient.route = routes.patient_delete;
    crud_patient.delete(table_patient_instance, id)
});

// $('#form_tutor').submit(function (e){
//     e.preventDefault();
//     $('#form_tutor').find('button[type="submit"]').prop('disabled', true)
//     let form_data = new FormData($(`#form_tutor`)[0])
//     crud_tutor.form = 'form_tutor'
//     crud_tutor.data = form_data
//     crud_tutor.route = routes.tutor_store;
//     crud_tutor.create_files(null, (data) => {
//         $("select[name='tutor_id']").append($("<option selected></option>")
//             .attr("value", data.data.id)
//             .text(`${data.data.number_document} - ${data.data.name}`));
//         $('#modal_add_tutor').modal('toggle')
//     });
// });

// $('select[name="course_id"]').change(() => {
//     let id = $('select[name="course_id"]').val();
//     $.post(routes.get_parallels, {course_id: id}, (data) => {
//         $('select[name="parallel_id"]').empty()
//         data.data.forEach((value, key) => {
//             $("select[name='parallel_id']").append($("<option></option>")
//                 .attr("value", value.id)
//                 .text(value.name));
//         })
//     })
// })
