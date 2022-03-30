import { Table_Component } from "../../components/Table.js";
import { rules_user, messages_user, rules_user_edit} from "./rules_user.js";
// import { Calendar_Tui } from "../../components/calendar.js";

$(document).ready(function () {
    // var calendar;
    // var calendar_user = new Calendar_Tui('calendar_user', calendar, routes.schedules, null)
    // calendar_user.initialize()
    // calendar_user.render()
    // var id_calendar = calendar_user.calendar
    // calendar_user.update(id_calendar)
	table_user_instance = new Table_Component('list_users', routes.get_users, null, columns_active_user, null,table_user);
    table_user_instance.initialize(table_user_instance.column_active).catch(error => {
    });

    rules('form_user', rules_user, messages_user);
    rules('form_user_edit', rules_user_edit , messages_user);
});



