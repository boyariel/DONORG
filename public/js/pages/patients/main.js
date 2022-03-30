import { Table_Component } from "../../components/Table.js";
import { rules_patient, messages_patient} from "./rules_patient.js";

$(document).ready(function () {

	table_patient_instance = new Table_Component('list_patients', routes.get_patients, null, columns_active_patient, null,table_patient);
    table_patient_instance.initialize(table_patient_instance.column_active).catch(error => {
    });

    rules('form_patient', rules_patient, messages_patient);
    rules('form_patient_edit', rules_patient, messages_patient);

});
