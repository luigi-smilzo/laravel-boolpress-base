@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Archive</h1>

    @foreach($posts as $post)
        <article>
                <h3>{{ $post->title }}</h3>
                <span>Author: {{ $post->user['name'] }} - </span>
                <em>Last edited: {{ $post->updated_at }}</em>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.show', $post->slug) }}">Read more...></a>
        </article>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach

    <h5>Navigate</h5>
    {{ $posts->links() }}
@endsection