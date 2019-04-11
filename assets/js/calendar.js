$(document).ready(function() {
    var listEvent=[];
    $('#calendar').fullCalendar({
        timeZone: 'UTC',
        defaultView: 'agendaWeek',
        header: {
            left: 'prev,next,today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        editable: false,
        droppable: false,
        eventLimit: true,
        views: {
            agendaWeek: {
                columnHeaderFormat: 'M/D（ddd）',
                timeFormat: 'H:mm'
            },
            agendaDay: {
                timeFormat: 'H:mm',
                nowIndicator: true,
            }
        },
        dayClick: function(date, jsEvent, view) {
                const start = moment(date).format('YYYY-MM-DDTHH:mm');
                const timeStart = moment(date).format('HH:mm');
                const event_date = moment(date).format('YYYY-MM-DD');

                let end = moment(date).add(1, 'days').format('YYYY-MM-DDTHH:mm');
                let timeEnd = moment(date).add(1, 'days').format('HH:mm');
                const nameView = $('#calendar').fullCalendar('getView').name;
                const element = jsEvent.target;
            if (nameView === 'agendaDay' || nameView === 'agendaWeek') {
                    end = moment(date).add(0.5, 'hours').format('YYYY-MM-DDTHH:mm');
                    timeEnd = moment(date).add(0.5, 'hours').format('HH:mm');
            }
            setTimeout(() => {
                $('#addEventModal').modal('show');
                addValueModal(timeStart, timeEnd, event_date);
                }, 500);
        },
        select: function(start, end, jsEvent, view, resource) {
            // if (self.defaultView === 'agendaWeek') {
            const timeStart = moment(start).format('HH:mm');
            const timeEnd = moment(end).format('HH:mm');
            const event_date = moment(start).format('YYYY-MM-DD');
            setTimeout(() => {
                $('#addEventModal').modal('show');
                addValueModal(timeStart, timeEnd, event_date);
            }, 500);

        },
        eventSources: [
            {
                events(start, end, timezone, callback) {
                    callback(listEvent);
                    console.log('event', listEvent);
                }
            }
        ],
        viewRender: function (view, element) {
            const start = moment(view.start).format('YYYY-MM-DD');
            const end = moment(view.end).format('YYYY-MM-DD');

            const startDate = moment(start).format('YYYY-MM-DD');
            const endDate = moment(end).add(-1, 'milliseconds').format('YYYY-MM-DD');
            getListEvent(startDate, endDate);
        },
        eventRender: function(event, element, view) {
            console.log('bbbb', event);
            const time = moment(event.start).format('H:mm') + ' - ' + moment(event.end).format('H:mm');
            console.log('time', time);
            $(element).find('.fc-time span').html(time);
        },
    });

    function addValueModal(timeStart, timeEnd, event_date){
        $('#addEventModal').on('shown.bs.modal', function () {
            $('#summary').trigger('focus');
            $("#timeStart").val(timeStart);
            $("#timeEnd").val(timeEnd);
            $("#event_date").val(event_date);
        })
    }
    function getListEvent(startDate, endDate){
        console.log('start', startDate);
        console.log('end', endDate);
        var token = $('#csrfToken').val();
        console.log('token', token);
        $.ajax({
            url:'./getEvent/' + startDate + '/' + endDate,
            headers: {
                'X-CSRF-TOKEN': token
            },
            type:'GET',
            success: function(data){
                listEvent = [];
                console.log('data', data);
                listEvent = convertData(data);
                $('#calendar').fullCalendar('refetchEvents');
                console.log('li', listEvent);
            }
        });
    }
    function convertData(data){
        let arrEvent = [];
        if (data) {
            for (let i = 0; i < data.length; i++) {
                let event = {};
                event['title'] = data[i].summary;
                event['start'] = data[i].event_date + ' ' + data[i].timeStart;
                event['end'] = data[i].event_date + ' ' + data[i].timeEnd;
                switch (data[i].room_id) {
                    case '12' : {
                        event['color'] = 'rgb(128, 0, 128)';
                        break;
                    }
                    case '14' : {
                        event['color'] = 'rgb(255, 128, 0)';
                        break;
                    }
                    case '15' : {
                        event['color'] = 'rgb(40, 180, 24)';
                        break;
                    }
                    case '16' : {
                        event['color'] = 'rgb(227, 0, 114)';
                        break;
                    }
                    case '17' : {
                        event['color'] = 'rgb(176, 0, 0)';
                        break;
                    }
                    case '18' : {
                        event['color'] = 'rgb(0, 101, 202)';
                        break;
                    }
                }
                arrEvent.push(event);
            }
        }
        return arrEvent;
    }
});