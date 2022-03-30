import { Table_Component } from "../../components/Table.js";

$(document).ready(function () {

	table_director_instance = new Table_Component('list_directors', routes.get_directors, null, columns_active_director, null,table_director);
    table_director_instance.initialize(table_director_instance.column_active).catch(error => {
    });
});



