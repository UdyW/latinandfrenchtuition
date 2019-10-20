@extends('layouts.template', ['class' => '', 'activePage' => 'contact', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <div class="py-5 text-center">
        <div class="container">
            <h2 class="pb-4">Availability</h2>
            <div id='calendar'></div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
                        <textarea class="form-control" type="text" name="requirement" placeholder="Tuition Requirement"></textarea>
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
                        <p><strong>Call us</strong></p>
                        <p>+123 456 7890</p>
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
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>How does online tutoring work?</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>What is your availibility?</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>Is online tutoring as effective as in person tutoring?</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>How Payment is made?</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span>Do you tutor in person?</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
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
                        title : 'Reserved',
                        start : '{{$appointment->start_datetime }}',
                        @if ($appointment->finish_datetime)
                        end: '{{$appointment->finish_datetime }}',
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
                nowIndicator: true,
                height: 500,
                slotDuration: '01:00:00',
                allDaySlot: false,
                eventColor: '#ed7b1d',
                eventTextColor: 'white'
            })
        });
    </script>
@endsection
