@extends('layouts.index')
@section('content')
    <div class=" flex ">

        

        {{-- @vite(['resources/js/app.js'])
        @vite('resources/css/app.css') --}}



        @include('pages.create_events.components.calendar_modal')
        <div class="p-4">  @include('pages.create_events.components.sidebare')</div>
        <script>
            document.addEventListener('DOMContentLoaded', async function() {
                // const {data} = await axios.get('/calendar/events')
                // console.log(data);
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                        left: 'dayGridMonth,timeGridWeek,timeGridDay',
                        center: 'title',
                        right: 'listMonth,listWeek,listDay'
                    },
                    views: {
                        listDay: { // Customize the name for listDay
                            buttonText: 'Day Events',
                        },
                        listWeek: { // Customize the name for listWeek
                            buttonText: 'Week Events'
                        },
                        listMonth: { // Customize the name for listMonth
                            buttonText: 'Month Events'
                        },
                        timeGridWeek: {
                            buttonText: 'Week', // Customize the button text
                        },
                        timeGridDay: {
                            buttonText: "Day",
                        },
                        dayGridMonth: {
                            buttonText: "Month",
                        },
                    },
                    initialView: "timeGridWeek",
                    slotMinTime: "09:00:00", // min  time  appear in the calendar
                    slotMaxTime: "18:00:00",
                    nowIndicator: true,
                    selectable: true,
                    selectMirror: true,
                    selectOverlap: true,
                    weekends: true,
                    // editable: true,
                    // events : data,
                    selectAllow: (info) => {
                        let instant = new Date()
                        return info.start > instant
                    },
                    select: (info) => {
                        let start = info.start
                        let end = info.end
                        console.log(info);
                        // if (end.getDate()-start.getDate() >=1 && !info.allDay) {
                        //     alert('khditi bzaf dial lwa9t')
                        //     calendar.unselect()
                        //     return
                        // }
                        // fblast matkhdam b hadi :
                        // document.getElementById('buttonModal ').click()
                        // khdam bhadi la bghity  :
                        buttonModal.click()
                        document.getElementById('start-Date').value = formatDate(start)
                        document.getElementById('end-Date').value = formatDate(end)
                    }
                });
                calendar.render();
                function formatDate(date) {
                    let year = String(date.getFullYear())
                    let month = String(date.getMonth() + 1).padStart(2, 0)
                    let day = String(date.getDate()).padStart(2, 0)
                    let hour = String(date.getHours()).padStart(2, 0)
                    let min = String(date.getMinutes()).padStart(2, 0)
                    let sec = String(date.getSeconds()).padStart(2, 0)
                    return `${year}-${month}-${day} ${hour}:${min}:${sec}`
                }
            });
        </script>
    </div>
@endsection
