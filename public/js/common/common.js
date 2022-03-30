$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
let count = 1;
let count_student = 0;
function array_events(events){
  let events_array = [];
  $.each(events,function(index, el) {
    var events ={
      id: el.id,
      idStart: el.date_start,
      idEnd: el.date_end,
      title: "CLIENTE:"+ el.name_client+" - SERVICIO:"+el.name_service,
      start: el.date_start,
      end: el.date_end,
      color: el.color_service,
    };
    events_array.push(events);
  });

  return events_array;
}

function ajax_request(route, data, type) {
    return $.ajax({
        'url': route,
        'data': data,
        'type': type,
        success: function(response) {
        },
        // 'contentType': false,
        // 'processData': false,
    })
}

function ajax_request_form_data(route, data, type) {

  return $.ajax({
    'url': route,
    'data': data,
    'type': type,
    'contentType': false,
    'processData': false,
    success: function(data){

    }
  })
}

function scroll_to_section(id_div) {
    $('html,body').animate({
            scrollTop: $(`#${id_div}`).offset().top},
        1000);
}

function make_notify(title, type, body = null) {

    let icon = ""
    switch (type) {
        case 'success':
            icon = 'fa-check'
            body = 'Operacion Realizada Satisfactoriamente'
            break;
        case 'error':
            icon = 'fa-warning'
            body = 'Error en la Operacion'
            break;
        default :
            icon = 'fa-info'
            body = ''
            break;
    }

    $.notify(`<i class="fa ${icon}"></i><strong>${title}</strong> ${body}`, {
        type: type,
        allow_dismiss: true,
        animate:{
            enter:'animated fadeInDown',
            exit:'animated fadeOutUp'
        }
    });
}

function delete_item(id) {
    $(`#${id}`).remove();
}

function rules(form, rules, messages) {
  $(`#${form}`).validate({
    rules,
    messages,
    errorElement: 'div',
    errorPlacement: function (error, element) {
      let placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    },
  });

  jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es obligatorio.",
    remote: "Por favor, rellena este campo.",
    email: "Por favor, escribe una dirección de correo válida",
    url: "Por favor, escribe una URL válida.",
    date: "Por favor, escribe una fecha válida.",
    dateISO: "Por favor, escribe una fecha (ISO) válida.",
    number: "Por favor, escribe un número entero válido.",
    digits: "Por favor, escribe sólo dígitos.",
    creditcard: "Por favor, escribe un número de tarjeta válido.",
    equalTo: "Por favor, escribe el mismo valor de nuevo.",
    accept: "Por favor, escribe un valor con una extensión aceptada.",
    maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
    minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
    range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
    max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
    min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
  });
}

function pad(n){return n<10 ? '0'+n : n}
