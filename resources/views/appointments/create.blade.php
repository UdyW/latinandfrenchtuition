@extends('layouts.app', ['class' => '', 'activePage' => 'appointments', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('appointments.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Create Appointment') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                            <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
{{--                                    {!! Form::text('date', old('date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}--}}
                                    <div class="col-sm-7">
                                        <div class="form-check">
                                            <input type="text" name="date" id="date" class="form-control date">
                                            <p class="help-block"></p>
                                            @if($errors->has('date'))
                                                <p class="help-block">
                                                    {{ $errors->first('date') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('All day') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" name="all_day">
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <div class="row" id="start_time">
                                <label class="col-sm-2 col-form-label">{{ __('Start time') }}</label>
                                <div class="col-sm-7">
                                    {{--{!! Form::label('start_time', 'Start time*', ['class' => 'control-label']) !!}--}}
                                    <div class="form-inline">
                                    <select name="starting_hour" id="starting_hour" class="form-control" required style="max-width: 85px;">
                                        <option value="-1" selected>Please select</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                    </select>
                                    :
                                    <select name="starting_minute" id="starting_minute" class="form-control" required style="max-width: 85px;">
                                        <option value="-1" selected>Please select</option>
                                        <option value="00">00</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="finish_time">
                                    <label class="col-sm-2 col-form-label">{{ __('Finish time') }}</label>
                                    <div class="col-sm-7">
{{--                                    {!! Form::label('finish_time', 'Finish time*', ['class' => 'control-label']) !!}--}}
                                    <div class="form-inline">
                                    <select name="finish_hour" id="finish_hour" class="form-control" required style="max-width: 85px;">
                                        <option value="-1" selected>Please select</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                    </select>
                                    :
                                    <select name="finish_minute" id="finish_minute" class="form-control" required style="max-width: 85px;">
                                        <option value="-1" selected>Please select</option>
                                        <option value="00">00</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div id="results" style="display: none;">
                            <p class="total_time"><strong>Total time: <span id="time">0</span> hour(s)</strong></p>
                            <p class="total_price"><strong>Total price: $<span id="price_total">0</span></strong></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
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
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary">{{ "Add" }}</button>
                                </div>
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
    <script src="{{ url('assets/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
	<script>
	$('.date').datepicker({
		autoclose: true,
		dateFormat: "yy-mm-dd"
	}).datepicker("setDate", "0");
    </script>
@stop
