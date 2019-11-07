@extends('layouts.app', ['activePage' => 'blog_tags', 'titlePage' => __('Blog Tags')])

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-heading card-header-primary">
                        <h4>
                            Edit Tag

                            <a href="{{ url('admin/tags') }}" class="btn btn-default pull-right">Go Back</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        {!! Form::model($tag, ['method' => 'PUT', 'url' => "/admin/tags/{$tag->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('blog.admin.tags._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
