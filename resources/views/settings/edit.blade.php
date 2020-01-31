@extends('layouts.app', ['activePage' => 'settings', 'titlePage' => __('Settings')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::model($setting, ['method' => 'PUT', 'route' => ['settings.update', $setting->id]]) !!}
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Setting') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Setting') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('key') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}" value="{{$setting->key}}" name="key" id="input-key" type="text" required="true" aria-required="true" readonly="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {!! Form::label('value', 'Value', ['class' => 'col-sm-2 col-form-label']) !!}
                                    <div class="col-md-7">
                                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                            <input class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}" value="{{$setting->value}}" name="value" id="input-value" type="text" required="true" aria-required="true"/>
                                            <span class="help-block">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$setting->id}}">
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
