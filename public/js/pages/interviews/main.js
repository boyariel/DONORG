import { Table_Component } from "../../components/Table.js";
import { rules_interview, messages_interview} from "./rules_interview.js";

$(document).ready(function () {

	table_interview_instance = new Table_Component('list_interviews', routes.get_interviews, null, columns_active_interview, null,table_interview);
    table_interview_instance.initialize(table_interview_instance.column_active).catch(error => {
    });
    rules('form_interview', rules_interview, messages_interview);
    rules('form_interview_edit', rules_interview, messages_interview);

});
