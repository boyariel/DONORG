export class Calendar_Tui {
    constructor(container, calendar, route, data) {
        this.container = container;
        this.calendar = calendar;
        this.route = route;
        this.data = data;
    }

    initialize() {
        this.calendar = new tui.Calendar(document.getElementById(this.container), {
            defaultView: 'month',
            scheduleView: true,  // Can be also ['allday', 'time']
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
    }

    render() {
        ajax_request(this.route, this.data, 'POST').then((data) => {
            var data_schedule = [];
            $.each(data, function (i, item) {
                var schedule = new Schedule(item.id, item.title, item.category, item.start, item.end)
                data_schedule.push(schedule);
            })
            this.calendar.createSchedules(data_schedule)
        })
    }

    update(id) {
        id.on({
            'clickSchedule': function (e) {
                console.log('clickSchedule', e);
                $('#calendar_modal_edit').modal('show')
                /* Cargar datos al modal*/ 
                $('#form_calendar_edit input[name="id"]').val(e.schedule.id)
                $('#form_calendar_edit input[name="title"]').val(e.schedule.title)
                $('#form_calendar_edit input[name="date"]').val(e.schedule.start._date)
                $('#form_calendar_edit input[name="date_end"]').val(e.schedule.end._date)
                $('#form_calendar_edit select[name="category"]').val(e.schedule.category)
                $('#form_calendar_edit input[name="color"]').val(e.schedule.bgColor)

                $('#modo_edit').click(function () {
                    e.schedule.id = $('#form_calendar_edit input[name="id"]').val()
                    e.schedule.title = $('#form_calendar_edit input[name="title"]').val()
                    e.schedule.start = $('#form_calendar_edit input[name="date"]').val()
                    e.schedule.end = $('#form_calendar_edit input[name="date_end"]').val()
                    e.schedule.category = $('#form_calendar_edit select[name="category"]').val()
                    e.schedule.bgColor = $('#form_calendar_edit input[name="color"]').val()
                    id.updateSchedule(e.schedule.id, e.schedule.calendarId, e.schedule);
                    $('#calendar_modal_edit').modal('hide')
                })
            },
            'beforeCreateSchedule': function (e) {
                $('#calendar_modal').modal('show')
                var schedule;
                var date_start = e.start._date.getDate() + "/" + (e.start._date.getMonth() + 1) + "/" + e.start._date.getFullYear()
                $('#form_calendar input[name="date"]').val(date_start)
                $('#modo_register').click(function () {
                    var title = $('#title').val()
                    var start = $('#form_calendar input[name="date"]').val()
                    var end = $('#form_calendar input[name="date_end"]').val()
                    var category = $('#form_calendar select[name="category"]').val()
                    var color = $('#form_calendar input[name="color"]').val()
                    schedule = {
                        id: +new Date(),
                        title: title,
                        isAllDay: true,
                        start: start,
                        end: end,
                        calendarId: '1',
                        category: category,
                        color: '#ffffff',
                        bgColor: color,
                        dragBgColor: color,
                        borderColor: color
                    };
                    /*save schedule */
                    id.createSchedules([schedule]);
                    /*clear guide element */
                    e.guide.clearGuideElement();
                    $('#calendar_modal').modal('hide')
                })
            },
            'beforeUpdateSchedule': function (e) {
                console.log('beforeUpdateSchedule', e);
                e.schedule.start = e.start;
                e.schedule.end = e.end;
                id.updateSchedule(e.schedule.id, e.schedule.calendarId, e.schedule);
            },
            'beforeDeleteSchedule': function (e) {
                console.log('beforeDeleteSchedule', e);
                id.deleteSchedule(e.schedule.id, e.schedule.calendarId);
            }
        });

    }

    async full_date(dateIn) {
        var yyyy = dateIn.getFullYear();
        var mm = dateIn.getMonth() + 1; // getMonth() is zero-based
        var dd = dateIn.getDate();
        return String(10000 * yyyy + 100 * mm + dd); // Leading zeros for mm and dd
    }

}

export class Schedule {
    constructor(id, title, category, start, end, color = '#ffffff', bgColor = '#54B8CC', dragBgColor = '#54B8CC', borderColor = '#54B8CC') {
        this.id = id;
        this.title = title;
        this.category = category;
        this.start = start;
        this.end = end;
        this.color = color;
        this.bgColor = bgColor;
        this.dragBgColor = dragBgColor;
        this.borderColor = borderColor;
    }

}