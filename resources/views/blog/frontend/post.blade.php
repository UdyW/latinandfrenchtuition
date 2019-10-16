@extends('layouts.template', ['class' => '', 'activePage' => 'BlogPost', 'title' => __('Niovi\'s Blog')])

@section('content')
    <section class="faqs">
    <div class="container">
        <div class="row">

            <div class="col-md-8 blog-main">
                <div class="blog-post">
                    <div class="blog-post-title">
                        <h2>{{ $post->title }} - <small>by {{ $post->user->name }}</small></h2>

                        <span class="pull-right">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </span>
                    </div>

                        <p>{!! $post->body !!}</p>
                        <p>
                            Category: <span class="label label-success">{{ $post->category->name }}</span> <br>
                            Tags:
                            @forelse ($post->tags as $tag)
                                <span class="label label-default">{{ $tag->name }}</span>
                            @empty
                                <span class="label label-danger">No tag found.</span>
                            @endforelse
                        </p>
                    </div>


                @include('blog.frontend._form')
                {{--@includeWhen(Auth::user(), 'blog.frontend._form')--}}

                @include('blog.frontend._comments')

            </div>

        </div>
    </div>
    </section>
@endsection
