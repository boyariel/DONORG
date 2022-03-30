//var calendar_user = tui.Calendar;
//Crear un calendario con sus respctivas configuraciones
var templates = {
    popupIsAllDay: function () {
        return 'All Day';
    },
    popupStateFree: function () {
        return 'Free';
    },
    popupStateBusy: function () {
        return 'Busy';
    },
    titlePlaceholder: function () {
        return 'Subject';
    },
    locationPlaceholder: function () {
        return 'Location';
    },
    startDatePlaceholder: function () {
        return 'Start date';
    },
    endDatePlaceholder: function () {
        return 'End date';
    },
    popupSave: function () {
        return 'Save';
    },
    popupUpdate: function () {
        return 'Update';
    },
    popupDetailDate: function (isAllDay, start, end) {
        var isSameDate = moment(start).isSame(end);
        var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

        if (isAllDay) {
            return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
        }

        return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
    },
    popupDetailLocation: function (schedule) {
        return 'Location : ' + schedule.location;
    },
    popupDetailUser: function (schedule) {
        return 'User : ' + (schedule.attendees || []).join(', ');
    },
    popupDetailState: function (schedule) {
        return 'State : ' + schedule.state || 'Busy';
    },
    popupDetailRepeat: function (schedule) {
        return 'Repeat : ' + schedule.recurrenceRule;
    },
    popupDetailBody: function (schedule) {
        return 'Body : ' + schedule.body;
    },
    popupEdit: function () {
        return 'Edit';
    },
    popupDelete: function () {
        return 'Delete';
    }
};
var calendar = new tui.Calendar(document.getElementById('calendar_user'), {
    defaultView: 'month',
    taskView: true,    // Can be also ['milestone', 'task']
    scheduleView: true,  // Can be also ['allday', 'time']
    template: templates,
    useCreationPopup: false,
    useDetailPopup: false,
    month: {
        daynames: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        startDayOfWeek: 0,
        narrowWeekend: true
    },
    week: {
        daynames: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        startDayOfWeek: 0,
        narrowWeekend: true
    }
});

//Crear nuevo evento o horario(schedule)
calendar.createSchedules([
    {
        id: '1',
        calendarId: '1',
        title: 'my schedule',
        category: 'time',
        dueDateClass: '',
        start: '2020-12-18T22:30:00+09:00',
        end: '2020-12-19T02:30:00+09:00'
    },
    {
        id: '2',
        calendarId: '1',
        title: 'second schedule',
        category: 'time',
        dueDateClass: '',
        start: '2020-12-01T17:30:00+09:00',
        end: '2020-12-02T17:31:00+09:00'
    }
]);
//Modificar el evento estirando o arrastrando
calendar.on('beforeUpdateSchedule', function (event) {
    var schedule = event.schedule;
    var changes = event.changes;
    var dateEnd = changes.end;

    calendar.updateSchedule(schedule.id, schedule.calendarId, changes);
    console.log(dateEnd._date)
});

//Mostrar la fecha actual en nav
var renderRange = document.getElementById('renderRange');
var options = calendar.getOptions();
var viewName = calendar.getViewName();
var html = [];
if (viewName === 'day') {
    html.push(moment(calendar.getDate().getTime()).format('YYYY.MM.DD'));
} else if (viewName === 'month' &&
    (!options.month.visibleWeeksCount || options.month.visibleWeeksCount > 4)) {
    html.push(moment(calendar.getDate().getTime()).format('YYYY.MM'));
} else {
    html.push(moment(calendar.getDateRangeStart().getTime()).format('YYYY.MM.DD'));
    html.push(' ~ ');
    html.push(moment(calendar.getDateRangeEnd().getTime()).format(' MM.DD'));
}
renderRange.innerHTML = html.join('');

$("#btn-prev").click(function () {
    calendar.prev();
});
$("#btn-next").click(function () {
    calendar.next();
});
$("#btn-today").click(function () {
    calendar.today();
});


// event handlers
calendar.on({
    'clickSchedule': function (e) {
        console.log('clickSchedule', e);
        /* step1. open custom detail popup */
        const willModify = confirm(`title: ${e.schedule.title}\n when: ${yyyymmdd(new Date(e.schedule.start))} \nWill you update schedule?`);

        if (willModify) { // step1-1. open edit popup */ 
            e.schedule.title = prompt('Schedule', e.schedule.title);
            calendar.updateSchedule(e.schedule.id, e.schedule.calendarId, e.schedule);
        }
    },
    'beforeCreateSchedule': function (e) {
        console.log('beforeCreateSchedule', e);
        /* step1. open custom edit popup */
        const title = prompt('Schedule', '@suvrity\'s birthday');
        var schedule = {
            id: +new Date(),
            title: title,
            isAllDay: true,
            start: e.start,
            end: e.end,
            category: 'allday'
        };
        /* step2. save schedule */
        calendar.createSchedules([schedule]);
        /* step3. clear guide element */
        e.guide.clearGuideElement();
    },
    'beforeUpdateSchedule': function (e) {
        console.log('beforeUpdateSchedule', e);
        e.schedule.start = e.start;
        e.schedule.end = e.end;
        calendar.updateSchedule(e.schedule.id, e.schedule.calendarId, e.schedule);
    },
    'beforeDeleteSchedule': function (e) {
        console.log('beforeDeleteSchedule', e);
        calendar.deleteSchedule(e.schedule.id, e.schedule.calendarId);
    }
});

function yyyymmdd(dateIn) {
    var yyyy = dateIn.getFullYear();
    var mm = dateIn.getMonth() + 1; // getMonth() is zero-based
    var dd = dateIn.getDate();
    return String(10000 * yyyy + 100 * mm + dd); // Leading zeros for mm and dd
}
