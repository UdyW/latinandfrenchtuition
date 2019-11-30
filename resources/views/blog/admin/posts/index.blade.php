@extends('layouts.app', ['activePage' => 'blog_posts', 'titlePage' => __('Blog Posts')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">

                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Posts') }}</h4>
                                <p class="card-category">{{ __('Edit/ Add here') }}</p>

                            </div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ url('admin/posts/create') }}" class="btn btn-sm btn-primary">{{ __('Add post') }}</a>
                            </div>
                        </div>
                        {{--<a href="{{ url('admin/posts/create') }}" class="btn btn-default pull-right">Create New</a>--}}
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Published</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($posts as $post)
                                            <tr>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ str_limit($post->body, 60) }}</td>
                                                <td>{{ $post->user->name }}</td>
                                                <td>{{ $post->category->name }}</td>
                                                <td>{{ $post->tags->implode('name', ', ') }}</td>
                                                <td>{{ $post->published }}</td>
                                                <td>
                                                    @if (Auth::user()->is_admin)
                                                        @php
                                                            if($post->published == 'Yes') {
                                                                $label = 'Draft';
                                                            } else {
                                                                $label = 'Publish';
                                                            }
                                                        @endphp
                                                        <a href="{{ url("/admin/posts/{$post->id}/publish") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                                    @endif
                                                    <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn btn-xs btn-success">Show</a>
                                                    <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn btn-xs btn-info">Edit</a>
                                                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" href="{{ url("/admin/posts/{$post->id}") }}" class="btn btn-xs btn-danger" value="Delete"/>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">No post available.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                {!! $posts->links() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
