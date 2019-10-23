@extends('layouts.app', ['activePage' => 'doc_category', 'titlePage' => __('Document Repository')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('faqs.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')

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
                                            <input class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" id="input-name" type="text" placeholder="{{ __('Question') }}" required="true" aria-required="true"/>
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
                                            {!! Form::textarea('answer', null, ['class' => 'form-control', 'required']) !!}

                                            <span class="help-block">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{--<input type="hidden" name="id" value="{{$id}}">--}}
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Add FAQ') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('FAQs') }}</h4>
{{--                            <p class="card-category"> {{ __('Here you can manage categories') }}</p>--}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        {{ __('Question') }}
                                    </th>
                                    <th>
                                        {{ __('Answer') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($faqs as $faq)
                                        <tr>
                                            <td>
                                                {{ $faq->question }}
                                            </td>
                                            <td>
                                                {{ $faq->answer }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('faqs.destroy', $faq) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('faqs.edit', $faq->id) }}" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this category?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </form>
                                            </td>
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
