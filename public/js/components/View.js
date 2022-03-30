export class View {
    constructor(route, container, data, main, update){
        this.route = route;
        this.container = container;
        this.data = data;
        this.main = main;
        this.update = update;
    }

    async load_view(type, callback = null){
        let data_response = null
        if (type === 'register'){
            if (this.main != null){
                this.render(this.main)
            }
            else{
                let get_response = await this.request_view();
                data_response = get_response;
                this.main = get_response.view;
                this.render(get_response.view);
            }
        }
        if (type === 'update'){
            if (this.update != null){
                this.render(this.update)
            }
            else{
                let get_response = await this.request_view();
                this.update = get_response.view;
                this.render(get_response.view);
            }
        }
        scroll_to_section(this.container);

      if (callback != null){
            callback(data_response);
        }

    }

    async request_view(){
        //console.log(this.data)
        return await ajax_request(this.route, this.data, 'GET')
    }

    render(view){

        return $(`#${this.container}`).html(view)
    }
}
