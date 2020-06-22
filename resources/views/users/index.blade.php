@extends('layouts.main')

@section('content')
    <h1>Users</h1>

    @foreach($users as $user)
        <div>
            <img src="{{ $user->info['avatar'] }}" alt="">
            <h4>{{ $user->name }}</h4>
            <h4>{{ $user->email }}</h4>
            <h4>{{ $user->info['phone'] }}</h4>
            <h4>{{ $user->info['address'] }}</h4>
        </div>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach
@endsection