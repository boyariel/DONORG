import { Table_Component } from "../../components/Table.js";
import { rules_secretary, rules_secretary_edit, messages_secretary} from "./rules_secretary.js";

$(document).ready(function () {

	table_secretary_instance = new Table_Component('list_secretaries', routes.get_secretaries, null, columns_active_secretary, null,table_secretary);
    table_secretary_instance.initialize(table_secretary_instance.column_active).catch(error => {
    });
    rules('form_secretary', rules_secretary, messages_secretary);
    rules('form_secretary_edit', rules_secretary_edit, messages_secretary);
});



