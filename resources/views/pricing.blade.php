@extends('layouts.template', ['class' => '', 'activePage' => 'pricing', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <section class="pricing">
        <div class="container">
            <h2>Packages</h2>
            <div class="pricing-container">
            @foreach(\App\Pricing::all() as $package)
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: {{$package->color}};">{{$package->package_name}}</li>
                    <li class="grey">£ {{$package->price}} / hour</li>
                    <li class="description">{{$package->description}}</li>
                    <li class="offer grey">{{$package->offer}}</li>
                    {{--<li class="grey"><a href="#" class="button">Sign Up</a></li>--}}
                </ul>
            </div>
            @endforeach
            </div>
        </div>
    </section>


@endsection
