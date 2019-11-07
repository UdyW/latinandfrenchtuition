@extends('layouts.app', ['activePage' => 'leads', 'titlePage' => __('Leads')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Leads') }}</h4>
                            <p class="card-category"> {{ __('Here you can see leads from contact form') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Email') }}
                                    </th>
                                    <th>
                                        {{ __('Phone') }}
                                    </th>
                                    <th>
                                        {{ __('Requirement') }}
                                    </th>
                                    <th>
                                        {{ __('Submitted') }}
                                    </th>
                                    <th>
                                        {{__('Contacted')}}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($leads as $lead)
                                        <tr>
                                            <td>
                                                {{ $lead->firstname }} {{$lead->lastname}}
                                            </td>
                                            <td>
                                                {{ $lead->email }}
                                            </td>
                                            <td>
                                                {{$lead->phone}}
                                            </td>
                                            <td>
                                                {{$lead->requirement}}
                                            </td>
                                            <td>
                                                {{ $lead->created_at->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                @if($lead->contacted)
                                                    <i class="material-icons">done</i>
                                                @else
                                                    <a href="{{ url("/leads/contact/{$lead->id}") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning"><i class="material-icons">fiber_new</i></a>
                                                @endif
                                            </td>
                                            {{--<td class="td-actions text-right">--}}
                                                {{--@if ($user->id != auth()->id())--}}
                                                    {{--<form action="{{ route('user.destroy', $user) }}" method="post">--}}
                                                        {{--@csrf--}}
                                                        {{--@method('delete')--}}

                                                        {{--<a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">--}}
                                                            {{--<i class="material-icons">edit</i>--}}
                                                            {{--<div class="ripple-container"></div>--}}
                                                        {{--</a>--}}
                                                        {{--<button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">--}}
                                                            {{--<i class="material-icons">close</i>--}}
                                                            {{--<div class="ripple-container"></div>--}}
                                                        {{--</button>--}}
                                                    {{--</form>--}}
                                                {{--@else--}}
                                                    {{--<a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">--}}
                                                        {{--<i class="material-icons">edit</i>--}}
                                                        {{--<div class="ripple-container"></div>--}}
                                                    {{--</a>--}}
                                                {{--@endif--}}
                                            {{--</td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
