@extends('layouts.app', ['activePage' => 'blog_categories', 'titlePage' => __('Blog Categories')])

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-heading card-header-primary">
                        <h4>
                            Create Category

                            <a href="{{ url('admin/categories') }}" class="btn btn-default pull-right">Go Back</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        {!! Form::open(['url' => '/admin/categories', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('blog.admin.categories._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Create
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
