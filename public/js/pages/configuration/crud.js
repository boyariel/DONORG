import {Crud} from "../modules/crud.js";
import { rules_configuration, messages_configuration} from "./rules_configuration.js";

$(document).ready(function () {
    rules('form_configuration', rules_configuration, messages_configuration);
});

let crud = new Crud('form_configuration', null, null);


$('#photo').change(function (e) {
  e.preventDefault();
  if($('#photo')[0].files.length > 1 )
  {
    Swal.fire({
      title: 'Error!',
      text: 'No puede enviar mas de 1 imagen',
      type: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar',
      confirmButtonClass: 'btn btn-primary',
      buttonsStyling: false,
    })
  }
  else{
    $('#form_configuration').find('button[type="submit"]').prop('disabled', true)
    let form_data = new FormData($(`#form_configuration`)[0]);
    crud.data = form_data
    crud.route = routes.configuration_store;
    crud.create_files(null, (data) => {
      $('#logo_enterprise').attr('src', data.data.photo)
    });
  }
});
