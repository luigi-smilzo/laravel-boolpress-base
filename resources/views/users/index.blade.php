@extends('layouts.main')

@section('content')
    <h1>Users</h1>

    @foreach($users as $user)
        <div>
            <img src="{{ $user->info['avatar'] }}" alt="">
            <h5>{{ $user->name }}</h5>
            <span class="d-block">{{ $user->email }}</span>
            <span class="d-block">{{ $user->info['phone'] }}</span>
            <span class="d-block">{{ $user->info['address'] }}</span>
        </div>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach
@endsection