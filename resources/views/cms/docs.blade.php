@extends('layouts.app', ['activePage' => 'docs', 'titlePage' => __('Document Repository')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('docs.save') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Document') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    {{--<div class="col-md-12 text-right">--}}
                                        {{--<a href="{{ route('doc.subcategory.save') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Document Name') }}</label>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Document Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}" value="{{ $name }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Sub Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="subcategory" id="input-category" required="true" aria-required="true">
                                                @foreach($subcategories as $c)
                                                    <option value="{{$c->id}}" @if($doc != null && $c->id == $doc->documentSubCategory->id) {{'selected'}}@endif>{{$c->documentCategory->name}} -> {{$c->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Document') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-file-upload form-file-simple">
                                            {{--<input type="text" class="form-control inputFileVisible" placeholder="Simple chooser...">--}}
                                            <input type="file" name='path' class="inputFileHidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Available') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" name="available" @if($doc != null && $doc->available == 1) {{'checked'}} @endif>
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Protected') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" name="protected" @if($doc != null && $doc->protected == 1) {{'checked'}} @endif>
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{($doc != null?$doc->id:null)}}">
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __($doc == null?'Add Document':'Edit Document') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Documents') }}</h4>
                            <p class="card-category"> {{ __('Here you can manage documents') }}</p>
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
                                    <th class="text-right">
                                        {{ __('Available') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Protected') }}
                                    </th>
                                    <th>
                                        {{ __('Uploaded date') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($docs as $d)
                                        <tr>
                                            <td>
                                                {{ $d->name }}
                                            </td>
                                            <td>
                                                {{ $d->documentSubCategory->name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $d->available }}
                                            </td>
                                            <td class="text-center">
                                                {{ $d->protected }}
                                            </td>
                                            <td>
                                                {{ $d->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('doc.subcategory.delete', $doc) }}" method="post">
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

                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('docs',$d->id) }}" data-original-title="" title="">
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
