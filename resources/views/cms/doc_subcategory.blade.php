@extends('layouts.app', ['activePage' => 'doc_subcategory', 'titlePage' => __('Document Repository')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('doc.subcategory.save') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Sub Category') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('doc.subcategory.save') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Sub Category Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ $name }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="category" id="input-category" required="true" aria-required="true">
                                                @foreach($categories as $c)
                                                    <option value="{{$c->id}}" @if($cat != null && $c->id == $cat->documentCategory->id) {{'selected'}}@endif>{{$c->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{($cat != null?$cat->id:null)}}">
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __($cat == null?'Add Sub Category':'Edit Sub Category') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Sub Categories') }}</h4>
                            <p class="card-category"> {{ __('Here you can manage sub categories') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Category') }}
                                    </th>
                                    <th>
                                        {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($cats as $cat)
                                        <tr>
                                            <td>
                                                {{ $cat->name }}
                                            </td>
                                            <td>
                                                {{ $cat->documentCategory->name }}
                                            </td>
                                            <td>
                                                {{ $cat->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('doc.subcategory.delete', $cat) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    {{--<a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $cat->id) }}" data-original-title="" title="">--}}
                                                    {{--<i class="material-icons">edit</i>--}}
                                                    {{--<div class="ripple-container"></div>--}}
                                                    {{--</a>--}}
                                                    <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this sub category?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </form>

                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('doc.subcategory',$cat->id) }}" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
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
