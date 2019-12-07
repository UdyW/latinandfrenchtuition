@extends('layouts.template', ['class' => '', 'activePage' => 'contact', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <div class="py-5 text-center">
        <div class="container">
            <h2 class="pb-4">Availability</h2>
            <div id='calendar'></div>
            <div class="legend-holder"><div class="legend busy">Busy</div><div class="legend booked">Booked</div><div class="legend available">Available</div></div>
            {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
            <p>Please contact me.</p>
        </div>
    </div>

    <section class="contact-form">
        <div class="container">
            <h2>Please use the tuition request form or the direct contact details below</h2>
            @if(isset($message))
                {{$message}}
            @else
            <form method="POST" action="/savelead">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="firstname" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" type="text" name="requirement" placeholder="Tuition Requirements"></textarea>
                    </div>
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" class="btn orange" value="Submit">
                {{--<a href="#" class="btn orange">Submit</a>--}}
            </form>
            @endif
        </div>
    </section>


    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box">
                            <span>
                                <i class="fas fa-phone"></i>
                            </span>
                        <p><strong>Call me</strong></p>
                        <p>+44 749 409 0459</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                            <span>
                                <i class="fas fa-envelope"></i>
                            </span>
                        <p><strong>Email me</strong></p>
                        <p>info@latinandfrenchtuition.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faqs">
        <div class="container">
            <h2 class="text-center pb-5">Faq</h2>
            <div id="accordion">
                @foreach($faqs as $faq)
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseOne">
                                <span>{{$faq->question}}</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapse{{$loop->iteration}}" class="collapse" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordion">
                        <div class="card-body">
                            {{$faq->answer}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        @can('appointment_delete')
            window.route_mass_crud_entries_destroy = '{{ route('appointments.mass_destroy') }}';
        @endcan

    </script>

    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                events : [
                        @foreach($appointments as $appointment)
                    {
                        @if($appointment->all_day)
                            title:  '',
                            start : '{{ date('Y-m-d', strtotime( $appointment->start_datetime)).' 08:00:00' }}',
                            end: '{{ date('Y-m-d', strtotime($appointment->finish_datetime)).' 24:00:00' }}',
                            color: '#6e6e6e',
                             displayEventTime: false,
                        @else
                            @if($appointment->comments == 'busy')
                                color: '#6e6e6e',
                            @endif
                            title : '',
                            start : '{{$appointment->start_datetime }}',
                            @if ($appointment->finish_datetime)
                            end: '{{$appointment->finish_datetime }}',
                            @endif
                        @endif
                    },
                    @endforeach
                ],
                // businessHours: {
                //     // days of week. an array of zero-based day of week integers (0=Sunday)
                //     daysOfWeek: [ 1, 2, 3, 4 ], // Monday - Thursday
                //
                //     startTime: '08:00', // a start time (10am in this example)
                //     endTime: '18:00', // an end time (6pm in this example)
                // },
                minTime: '08:00:00',
                maxTime: '21:00:00',
                nowIndicator: true,
                height: 410,
                slotDuration: '01:00:00',
                allDaySlot: false,
                eventColor: '#ed7b1d',
                eventTextColor: 'white',
                displayEventTime: false
            })
        });
    </script>
@endsection
