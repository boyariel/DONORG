export class Crud {
    constructor(form, route, data){
        this.form = form;
        this.route = route;
        this.data = data;
    }

    create(table, callback = null){

        this.data = this.render_data();
        this.send_data(table, 'POST', callback);
    }

    create_files(table, callback = null){
      this.data = this.render_data();
      this.send_data_with_files(table, 'POST', callback);
    }

    edit(table, id, callback = null){
        this.data = this.render_data() + `&id=${id}`;
        this.send_data(table,'PUT' ,callback);
    }

    render_data(){
        if (this.data == null){
            return $(`#${this.form}`).serialize();
        }
        else{
            return this.data;
        }
    }

    send_data(table, type = 'POST', callback = null){
      // block_container(this.form)
      ajax_request(this.route, this.data, type).then(data => {
        if(data.success === 1){
          (table !== null) ? table.initialize(table.column_active) : '';
          make_notify('Satisfactorio', 'success')
          if (type !== 'DELETE'){
            $(`#${this.form}`)[0].reset();
          }

          if (callback !== null) {
            callback(data);
          }
        }
        else{
          data.message = (typeof data.message === 'object') ? this.formatMessage(data.message) : data.message;
          Swal.fire({
            html:  `<h3>Error</h3> ${data.message}`,
            type: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar',
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
          })
        }
        $(`#${this.form} button[type="submit"]`).prop('disabled', false)
        this.data = null;
        // unblock_container(this.form)
      }).catch(error => {
          this.data = null;
          make_notify('Error', 'error')
          $(`#${this.form} button[type="submit"]`).prop('disabled', false)
          // $(`#${this.form}`).unblock()

      })
    }
    send_data_with_files(table, type = 'POST', callback = null){
        // block_container(this.form)
        ajax_request_form_data(this.route, this.data, type).then(data => {
          if(data.success === 1){
            (table !== null) ? table.initialize(table.column_active) : '';

            make_notify('Satisfactorio', 'success')
            $(`#${this.form}`)[0].reset();

            if (callback !== null) {
              callback(data);
            }
          }else{
            data.message = (typeof data.message === 'object') ? this.formatMessage(data.message) : data.message;

            Swal.fire({
              html:  `<h3>Error</h3> ${data.message}`,
              type: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar',
              confirmButtonClass: 'btn btn-primary',
              buttonsStyling: false,
            })
          }
          $(`#${this.form} button[type="submit"]`).prop('disabled', false)
          $('body').find('span[class="spinner-border spinner-border-sm"]').remove()
          this.data = null;
          // unblock_container(this.form)

        }).catch(error => {
            this.data = null;
            make_notify('Error', 'error')
            $(`#${this.form} button[type="submit"]`).prop('disabled', false)
            $('body').find('span[class="spinner-border spinner-border-sm"]').remove()
          // $(`#${this.form}`).unblock()
        })
    }

    delete(table, id, callback){
        this.data = {id: id};
        let obj = this;

      Swal.fire({
        title: 'Estas Seguro?',
        text: "Tu eliminaras este registro!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!',
        confirmButtonClass: 'btn btn-primary',
        cancelButtonClass: 'btn btn-danger ml-1',
        buttonsStyling: false,
      }).then(function (willDelete) {
            if (willDelete.value) {
                obj.send_data(table, 'DELETE', callback);
            }
        });
    }

    restore(table, id, callback){
      this.data = {id: id};
      let obj = this;

      Swal.fire({
        title: 'Estas Seguro?',
        text: "Tu resauraras este registro!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Restaurar!',
        confirmButtonClass: 'btn btn-primary',
        cancelButtonClass: 'btn btn-danger ml-1',
        buttonsStyling: false,
      }).then(function (willDelete) {
        if (willDelete.value) {
          obj.send_data(table, 'POST', callback);
        }
      });
    }

    formatMessage(data){
      let message = "<ul>";
      $.each(data, (key, value) => {
        message += `<li>${value[0]}</li>`
      })
      return message+="</ul>";
    }

}
