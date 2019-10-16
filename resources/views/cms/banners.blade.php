@extends('layouts.app', ['activePage' => 'cms.banners', 'titlePage' => __('Content of home')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('cms.banners.save') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Banners') }}</h4>
                                <p class="card-category">{{ __('Upload benner images here') }}</p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Page') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="page" id="input-page" required="true" aria-required="true">
                                                @foreach($banners as $b)
                                                    <option value="{{$b->id}}">{{$b->page}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Banner') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-file-upload form-file-simple">
                                            {{--<input type="text" class="form-control inputFileVisible" placeholder="Simple chooser...">--}}
                                            <input type="file" name='banner' class="inputFileHidden">
                                        </div>
                                    </div>
                                </div>
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
