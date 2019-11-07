@extends('layouts.app', ['class' => '', 'activePage' => 'appointments', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{--<form method="post" action="{{ route('appointments.update') }}" autocomplete="off" class="form-horizontal">--}}
                        {{--@csrf--}}
    {!! Form::model($appointment, ['method' => 'PUT', 'route' => ['appointments.update', $appointment->id]]) !!}
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Appointment') }}</h4>
                                <p class="card-category"></p>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('All day') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" name="all_day" @if($appointment != null && $appointment->all_day == 1) {{'checked'}} @endif>
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        {!! Form::label('start_datetime', 'Start time*', ['class' => 'control-label']) !!}
                                        {!! Form::text('start_datetime', old('start_datetime'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('start_datetime'))
                                            <p class="help-block">
                                                {{ $errors->first('start_datetime') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        {!! Form::label('finish_datetime', 'Finish time', ['class' => 'control-label']) !!}
                                        {!! Form::text('finish_datetime', old('finish_datetime'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('finish_datetime'))
                                            <p class="help-block">
                                                {{ $errors->first('finish_datetime') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
                                        {!! Form::textarea('comments', old('comments'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                                        <p class="help-block"></p>
                                        @if($errors->has('comments'))
                                            <p class="help-block">
                                                {{ $errors->first('comments') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="id" value="{{$appointment->id}}">
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ "Save" }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop
