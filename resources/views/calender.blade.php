@extends('layouts.template', ['class' => '', 'activePage' => 'home', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <section class="welcome">
        {!! $calendar->calendar() !!}

    </section>
@endsection
