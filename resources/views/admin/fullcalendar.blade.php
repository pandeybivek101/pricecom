@extends('layouts.admin.admin-layout')

@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Full Calender</h4>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Event Calendar</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Full Calender</a>
            </li>
        </ul>
    </div>
</div>


<div class="page-body">
    <div class="card">
        <div class="card-header">
            <h5>Full Calender</h5>
            <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-xl-2 col-md-12">
                    <div id="external-events">
                        <h6 class="m-b-30 m-t-20">Events</h6>
                        <div class="fc-event ui-draggable ui-draggable-handle"
                            style="z-index: auto; left: 0px; top: 0px;">My Event 1</div>
                        <div class="fc-event ui-draggable ui-draggable-handle">My Event 2</div>
                        <div class="fc-event ui-draggable ui-draggable-handle">My Event 3</div>
                        <div class="fc-event ui-draggable ui-draggable-handle">My Event 4</div>
                        <div class="fc-event ui-draggable ui-draggable-handle">My Event 5</div>
                        <div class="checkbox-fade fade-in-primary m-t-10">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                </span>
                                <span>Remove After Drop</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-md-12">
                    <div id="calendar" class="fc fc-unthemed fc-ltr">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/fullcalendar/dist/fullcalendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/fullcalendar/dist/fullcalendar.print.css')}}" media='print'>
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script>
$(document).ready(function() {

    
    var SITEURL = "{{url('/')}}";
    console.log(SITEURL + "/dashboard/fullcalendar");
    //console.log(SITEURL + "/fullcalendar/create");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: SITEURL + "/dashboard/fullcalendar",
        displayEventTime: true,
        editable: true,
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                
                $.ajax({
                    url: SITEURL + "/dashboard/fullcalendar/create",
                    data: 'title=' + title + '&amp;start=' + start + '&amp;end=' + end,
                    type: "POST",
                    success: function(data) {
                        displayMessage("Added Successfully");
                    },
                });

                //console.log(data);
                calendar.fullCalendar('renderEvent', {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    },
                    true
                );
            }
            calendar.fullCalendar('unselect');
        },
        eventDrop: function(event, delta) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            console.log('deleted');
            $.ajax({
                url: SITEURL + '/dashboard/fullcalendar/update',
                data: 'title=' + event.title + '&amp;start=' + start + '&amp;end=' + end +
                    '&amp;id=' + event.id,
                type: "POST",
                success: function(response) {
                    displayMessage("Updated Successfully");
                }
            });
        },
        eventClick: function(event) {
            //console.log(SITEURL + '/fullcalendar/delete');
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: SITEURL + '/dashboard/fullcalendar/delete',
                    data: "&amp;id=" + event.id,
                    success: function(response) {
                        if (parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }

            
        }
    });
});

function displayMessage(message) {
    $(".response").html("<div class='success'>" + message + "</div>");
    setInterval(function() {
        $(".success").fadeOut();
    }, 1000);
}
</script>
@endsection