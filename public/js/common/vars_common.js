var id;
var table_user;
var table_user_instance;
var table_director;
var table_director_instance;
var table_patient;
var table_patient_instance;


var columns_active_user = [
    {
        data: "id",
        render: function (data) {
            let buttons = new Button(data);
            return buttons.initialize('default');
        }
    },
    {
        data: "name",
    },
    {
        data: "email"
    },
    {
        data: "role_id",
        render:function(data){
          if(data==1){
            return `<span class="badge blue">DIRECTOR</span>`;
          }
          if(data==2){
            return `<span class="badge blue">DOCTOR</span>`;
          }
          if(data==3){
            return `<span class="badge blue">ENFERMERA</span>`;
          }
        }
    },
    {
        data: "is_power_user",
        render: function (data) {
            if (data == 1) {
                return `<span class="badge badge-pill badge-success">SI</span>`;
            }
            if (data == 0) {
                return `<span class="badge badge-pill badge-primary">NO</span>`;
            }
        }
    },
];

var columns_inactive_user = [
    {
        data: "id",
        render: function (data) {
            let buttons = new Button(data);
            return buttons.initialize('default');
        }
    },
    {
        data: "name",
    },
    {
        data: "email"
    },
    {
        data: "role_id",
        render:function(data){
          if(data==1){
            return `<span class="badge blue">DIRECTOR</span>`;
          }
          if(data==2){
            return `<span class="badge blue">DOCTOR</span>`;
          }
          if(data==3){
            return `<span class="badge blue">ENFERMERA</span>`;
          }
        }
    },
    {
        data: "is_power_user",
        render: function (data) {
            if (data == 1) {
                return `<span class="badge badge-pill badge-success">SI</span>`;
            }
            if (data == 0) {
                return `<span class="badge badge-pill badge-primary">NO</span>`;
            }
        }
    },
];



var columns_active_director = [
    {
        data: "id",
        render: function (data) {
            let buttons = new Button(data);
            return buttons.initialize('default');
        }
    },
    {
        data: "full_name",
    },
    {
        data: "email"
    },
];

var columns_active_secretary = [
    {
        data: "id",
        render: function (data) {
            let buttons = new Button(data);
            return buttons.initialize('default');
        }
    },
    {
        data: "full_name",
    },
    {
        data: "email"
    },
];

var id_patient
var columns_active_patient = [
    {
        data: "id",
        render: function (data) {
            id_patient = data;
            let buttons = new Button(data);
            return buttons.initialize('default');
        }
    },
    {
        data: "name",
        // render: function (data) {

        //     return `<a href="${routes.patient_profile+"?id_patient="+this.id_patient}">${data}</a>`;

        // }
    },
    {
        data: "personal_id",
    },
    {
        data: "code",
    },
];

var id_teacher
var columns_active_teacher = [
    {
        data: "id",
        render: function (data) {
            id_teacher = data;
            let buttons = new Button(data);
            return buttons.initialize('all');
        }
    },
    {
        data: "name_t",
        render: function (data) {
            return `<a href="${routes.teacher_profile+"?id_teacher="+this.id_teacher}" title="VER PERFIL">${data}</a>`;
        }
    },
    {
        data: "information",
    },
];

var columns_active_postulant = [
    {
        data: "id",
        render: function (data) {
            let buttons = new Button(data);
            return buttons.initialize('all');
        }
    },
    {
        data: "name",
    },
    {
        data: "phone",
    },
    {
        data: "email",
    },
    {
        data: "text_position",
    },
    {
        data: "file",
        render: function (data) {
            if (data == null) {
                return `<span class="badge badge-primary">NO</span>`;
            }
             else{
                return `<span class="badge badge-success">SI</span>`;
            }
        }
    },
    {
        data: "text_status",
    },
    {
        data: "address",
    },
    {
        data: "description",
        render: function (data) {
            if (data == null) {
                return `<span class="badge badge-success">SIN DESCRIPCION</span>`;
            }
             else{
                return data;
            }
        }
    },

];

