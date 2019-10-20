@extends('layouts.app', ['activePage' => 'appointments', 'titlePage' => __('Appointments')])

@section('content')
    {{--<h3 class="page-title">@lang('quickadmin.appointments.title')</h3>--}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Appointments') }}</h4>
                            <p class="card-category"> {{ __('Here you can manage your appoinments') }}</p>
                        </div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('appointments.create') }}" class="btn btn-sm btn-primary">{{ __('Add new') }}</a>
                            </div>
                        </div>

                <div id='calendar'></div>
                        </div>
                <br />

                    <div class="panel-heading">
                        @lang('quickadmin.qa_list')
                    </div>

                    <div class="panel-body table-responsive">
                        {{--<table class="table table-bordered table-striped {{ count($appointments) > 0 ? 'datatable' : '' }} @can('appointment_delete') dt-select @endcan">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--@can('appointment_delete')--}}
                                    {{--<th style="text-align:center;"><input type="checkbox" id="select-all"/></th>--}}
                                {{--@endcan--}}

                                {{--<th>@lang('quickadmin.appointments.fields.client')</th>--}}
                                {{--<th>@lang('quickadmin.clients.fields.last-name')</th>--}}
                                {{--<th>@lang('quickadmin.clients.fields.phone')</th>--}}
                                {{--<th>@lang('quickadmin.clients.fields.email')</th>--}}
                                {{--<th>@lang('quickadmin.appointments.fields.employee')</th>--}}
                                {{--<th>@lang('quickadmin.employees.fields.last-name')</th>--}}
                                {{--<th>@lang('quickadmin.appointments.fields.start-time')</th>--}}
                                {{--<th>@lang('quickadmin.appointments.fields.finish-time')</th>--}}
                                {{--<th>@lang('quickadmin.appointments.fields.comments')</th>--}}
                                {{--<th>&nbsp;</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}

                            {{--<tbody>--}}
                            {{--@if (count($appointments) > 0)--}}
                                {{--@foreach ($appointments as $appointment)--}}
                                    {{--<tr data-entry-id="{{ $appointment->id }}">--}}
                                        {{--@can('appointment_delete')--}}
                                            {{--<td></td>--}}
                                        {{--@endcan--}}

                                        {{--<td>{{ $appointment->client->first_name or '' }}</td>--}}
                                        {{--<td>{{ isset($appointment->client) ? $appointment->client->last_name : '' }}</td>--}}
                                        {{--<td>{{ isset($appointment->client) ? $appointment->client->phone : '' }}</td>--}}
                                        {{--<td>{{ isset($appointment->client) ? $appointment->client->email : '' }}</td>--}}
                                        {{--<td>{{ $appointment->employee->first_name or '' }}</td>--}}
                                        {{--<td>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>--}}
                                        {{--<td>{{ $appointment->start_time }}</td>--}}
                                        {{--<td>{{ $appointment->finish_time }}</td>--}}
                                        {{--<td>{!! $appointment->comments !!}</td>--}}
                                        {{--<td>--}}
                                            {{--@can('appointment_view')--}}
                                                {{--<a href="{{ route('admin.appointments.show',[$appointment->id]) }}"--}}
                                                   {{--class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>--}}
                                            {{--@endcan--}}
                                            {{--@can('appointment_edit')--}}
                                                {{--<a href="{{ route('admin.appointments.edit',[$appointment->id]) }}"--}}
                                                   {{--class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>--}}
                                            {{--@endcan--}}
                                            {{--@can('appointment_delete')--}}
                                                {{--{!! Form::open(array(--}}
                                                    {{--'style' => 'display: inline-block;',--}}
                                                    {{--'method' => 'DELETE',--}}
                                                    {{--'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",--}}
                                                    {{--'route' => ['admin.appointments.destroy', $appointment->id])) !!}--}}
                                                {{--{!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}--}}
                                                {{--{!! Form::close() !!}--}}
                                            {{--@endcan--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                            {{--@else--}}
                                {{--<tr>--}}
                                    {{--<td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>--}}
                                {{--</tr>--}}
                            {{--@endif--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

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
                        title : '{{$appointment->client_name }}',
                        start : '{{$appointment->start_datetime }}',
                        @if ($appointment->finish_datetime)
                                end: '{{$appointment->finish_datetime }}',
                        @endif
                        url : '{{ route('appointments.edit', $appointment->id) }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection
