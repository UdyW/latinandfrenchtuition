@extends('layouts.app', ['activePage' => 'faqs', 'titlePage' => __('FAQs')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::model($faq, ['method' => 'PUT', 'route' => ['faqs.update', $faq->id]]) !!}
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add FAQ') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Question') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('question') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" value="{{$faq->question}}" name="question" id="input-name" type="text" placeholder="{{ __('Question') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('question'))
                                                <span id="question-error" class="error text-danger" for="input-question">{{ $errors->first('question') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {!! Form::label('answer', 'Answer', ['class' => 'col-sm-2 col-form-label']) !!}
                                    <div class="col-md-7">
                                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                            {!! Form::textarea('answer', $faq->answer, ['class' => 'form-control', 'required' , 'value'=> '{{$faq->answer}}']) !!}

                                            <span class="help-block">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$faq->id}}">
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
