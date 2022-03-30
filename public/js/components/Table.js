export class Table_Component {
    constructor(id, route, data, column_active, column_inactive, table, storage_active = null, storage_inactive = null){
        this.id = id;
        this.route = route;
        this.data = data;
        this.column_active = column_active;
        this.column_inactive = column_inactive;
        this.table = table;
        this.storage_active = storage_active;
        this.storage_inactive = storage_inactive;
    }

    async change_status(type){
        let data, column;
        let object = await this.verify_data_exist(type);
        data = object.data;
        column = object.column;
    }

    async initialize(column){
        let data = await this.get_data_table();
        if (typeof this.table === 'object' ) {
            this.table.destroy();
        }
        this.table = $(`body #${this.id}`).DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            scrollX: true,
            "processing": true,
            "data": data.data,
            'columns': column,
            "language": lang,
        });

        let id_table = this.id;
        $('#'+id_table+'_length select[name="'+id_table+'_length"]').css("display", "inline-block");
        $('#'+id_table+'_length select[name="'+id_table+'_length"]').css("width", "auto");
        $('#'+id_table+'_length select[name="'+id_table+'_length"]').css("height", "auto");
        $('#'+id_table+'_filter input[type="search"]').css("width", "auto");
        $('#'+id_table+'_filter input[type="search"]').css("height", "auto");
    }

    async verify_data_exist(type){
        let column;
        let data;
        if (type === 'active'){
            if (this.storage_active === null){
                data = await this.get_data_table();
                this.storage_active = data.data;
                data = data.data;
            }
            else{
                data = this.storage_active;
            }
            column = this.column_active;
        }else{
            if (this.storage_inactive === null){
                data = await this.get_data_table();
                this.storage_inactive = data.data;
                data = data.data;
            }
            else{
                data = this.storage_inactive;
            }
            column = this.column_inactive;
        }
        return {data, column}
    }

    get_data_table(){
        return  ajax_request(this.route, this.data, 'post');
    }
}
