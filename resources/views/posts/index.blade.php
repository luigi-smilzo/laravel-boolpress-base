@extends('layouts.main')

@section('content')
    <h1>Archive</h1>

    @foreach($posts as $post)
        <article>
            <div>
                <h3>{{ $post->title }}</h3>
                <h4>Author: {{ $post->user['name'] }}</h4>
                <h4>Last edited: {{ $post->updated_at }}</h4>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.show', $post->id) }}">Read more...></a>
            </div>

        </article>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach

    <h5>Navigate</h5>
    {{ $posts->links() }}
@endsection