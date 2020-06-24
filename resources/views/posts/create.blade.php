@extends('layouts.main')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-6">
            <h1 class="mb-4">Create new post</h1>

            @if ($errors->any())
            
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form class="" action="{{ route('posts.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
                </div>
                
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                </div>

                @foreach($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
                        <label class="form-check-label" for="tag-{{ $loop->iteration }}" class="form-check-label">{{ $tag->name }}</label>
                    </div>
                @endforeach

                <input class="btn btn-primary float-right" type="submit" value="Save">
            </form>
        </div>
    </div>
@endsection