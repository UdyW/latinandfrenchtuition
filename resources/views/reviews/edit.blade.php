@extends('layouts.app', ['activePage' => 'reviews', 'titlePage' => __('Reviews')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::model($review, ['method' => 'PUT', 'route' => ['reviews.update', $review->id]]) !!}
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Reviews') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{$review->title}}" name="title" id="input-name" type="text" placeholder="{{ __('Title') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('title'))
                                                <span id="question-error" class="error text-danger" for="input-question">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {!! Form::label('review', 'Review', ['class' => 'col-sm-2 col-form-label']) !!}
                                    <div class="col-md-7">
                                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                            {!! Form::textarea('answer', $review->review, ['class' => 'form-control', 'required' , 'value'=> '{{$review->review}}']) !!}

                                            <span class="help-block">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$review->name}}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$review->id}}">
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Edit FAQ') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
