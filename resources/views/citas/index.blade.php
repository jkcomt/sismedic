@extends('layout')
@section('api')
    <style>
        th,td{
            text-align: center;
        }
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>

    <link rel="stylesheet" href="{{asset('providers/fullcalendar/fullcalendar.min.css')}}">

    <link rel="stylesheet" href="{{asset('providers/fullcalendar/fullcalendar.print.min.css')}}" media='print'>
    <script src="{{asset('providers/fullcalendar/lib/moment.min.js')}}"></script>
    {{--<script src="{{asset('providers/fullcalendar/lib/jquery.min.js')}}"></script>--}}
    <script src="{{asset('providers/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('providers/fullcalendar/locale-all.js')}}"></script>
    <link rel="stylesheet" href="{{asset('providers/fullcalendar/scheduler.css')}}">
    <script src="{{asset('providers/fullcalendar/scheduler.js')}}"></script>
    <script src="{{asset('providers/calendario.js')}}"></script>
    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                locale: 'es',
                aspectRatio: 2,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    @foreach($events as $event)
                        {
                            title : '{{ $event->title }}',
                            start : '{{ $event->start_date }}',
                            color : '{{ $event->color }}',
                            id : '{{$event->id}}'
                            {{--url : '{{ route('tasks.edit', $event->id) }}'--}}
                        },
                    @endforeach
                ],
                dayClick: function(date) {
                    $citas = 0;
                    var dayEvents = $('#calendar').fullCalendar( 'clientEvents' ,function(event){
                        if(event.start >= date && event.start <= date){
                            $citas = $citas + 1;
                        }
                    });

                    if($citas > 0){
                        listarCitas(date.format())
                    }

                }
            });

        });
    </script>
@endsection
@section('header','CALENDARIO DE CITAS')
@section('content')
<div id="tabla">

</div>
<div class="panel panel-default" style="margin-bottom: 0px;">
    <div class="panel-body" style="padding-bottom: 10px;padding-top: 10px">
        {{csrf_field()}}
        <div id='calendar'></div>
    </div>
</div>


@endsection

