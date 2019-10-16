@extends('layouts.app', ['activePage' => 'blog_posts', 'titlePage' => __('Blog Posts')])

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-heading card-header-primary">
                        <h2>
                            Edit Post

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="card-body">
                        {!! Form::model($post, ['method' => 'PUT', 'url' => "/admin/posts/{$post->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('blog.admin.posts._form')

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
    </div>
@endsection
