@extends('layouts.app', ['activePage' => 'cms.pricing', 'titlePage' => __('Document Repository')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <input class="form-control" type="text" id="color" style="width:400px" />
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('cms.pricing.save') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Package') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('doc.category.save') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Package Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('package_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('package_name') ? ' is-invalid' : '' }}" name="package_name" id="input-package_name" type="text" placeholder="{{ __('Name') }}" value="{{ ($package==null?'':$package->package_name) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-package_name">{{ $errors->first('package_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Color') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }} colorpicker" name="color" id="input-color" type="text" placeholder="{{ __('Color') }}" value="{{ ($package==null?'':$package->color) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('color'))
                                                <span id="color-error" class="error text-danger" for="input-color">{{ $errors->first('color') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __('Price') }}" value="{{ ($package==null?'':$package->price) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('price'))
                                                <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('Description') }}" value="{{ ($package==null?'':$package->description) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('description'))
                                                <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Offer') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('offer') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('offer') ? ' is-invalid' : '' }}" name="offer" id="input-offer" type="text" placeholder="{{ __('Offer') }}" value="{{ ($package==null?'':$package->offer) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('offer'))
                                                <span id="name-error" class="error text-danger" for="input-offer">{{ $errors->first('offer') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Available') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" name="available" @if($package != null && $package->available == 1) {{'checked'}} @endif>
                                                <span class="form-check-sign">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{($package==null?'':$package->id)}}">
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __($package==null?'Add Package':'Edit Package') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Package') }}</h4>
                            <p class="card-category"> {{ __('Here you can manage package') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        {{ __('Package Name') }}
                                    </th>
                                    <th>
                                        {{ __('Color') }}
                                    </th>
                                    <th>
                                        {{ __('Price') }}
                                    </th>
                                    <th>
                                        {{ __('description') }}
                                    </th>
                                    <th>
                                        {{ __('Offer') }}
                                    </th>
                                    <th>
                                        {{ __('Available') }}
                                    </th>
                                    <th>
                                        {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($pricing as $cat)
                                        <tr>
                                            <td>
                                                {{ $cat->package_name }}
                                            </td>
                                            <td>
                                                {{ $cat->color }}<div style="width: 10px; height: 10px; background-color: {{$cat->color}};"></div>
                                            </td>
                                            <td>
                                                {{ $cat->price }}
                                            </td>
                                            <td>
                                                {{ $cat->description }}
                                            </td>
                                            <td>
                                                {{ $cat->offer }}
                                            </td>
                                            <td>
                                                {{ $cat->available }}
                                            </td>
                                            <td>
                                                {{ $cat->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('doc.category.delete', $cat) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('cms.pricing', $cat->id) }}" data-original-title="" title="">
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
