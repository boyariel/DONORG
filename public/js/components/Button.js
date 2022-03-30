class Button {
    constructor(data){
        this.data = data;
    }

    initialize(type){
        let return_button;
        let button_delete = `<button id="delete" class="btn btn-secondary" data-id = "${this.data}"> <i class="fa fa-trash-o"></i></button>`;
        let button_edit = `<button id="edit" class="btn btn-warning" data-id = "${this.data}"> <i class="fa fa-pencil"></i></button>`;
        let button_show = `<button id="show" class="btn btn-primary" data-id = "${this.data}"> <i class="fa fa-eye"></i></button>`;
        let button_config = `<button id="config" class="btn btn-green" data-id = "${this.data}"> <i class="fa fa-cog"></i></button>`;
        let button_print = `<button id="print" class="btn btn-dark" data-id = "${this.data}"><i class="fa fa-print"></i></button>`;
        switch (type) {
            case 'delete':
                return_button = button_delete;
                break;
            case 'update':
                return_button = button_edit;
                break;
            case 'show':
                return_button = button_show;
                break;
            case 'config':
                return_button = button_config;
                break;
            case 'print':
                return_button = button_print;
                break;
            case 'all':
                return_button = `${button_edit} ${button_delete} ${button_show}`
                break;
            case 'default':
                return_button = ` ${button_edit} ${button_delete} `;
                break;
            case 'views':
                return_button = `${button_delete} ${button_show} ${button_print}`;
                break;
        }
        return return_button;
    }
}
