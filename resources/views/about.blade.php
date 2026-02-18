@extends('layout')

@section('title', 'About Me')

@section('content')

    <h2>About Me</h2>

    @isset($user)
        <p>Name: {{ $user['name'] }}</p>
        <p>Role: {{ $user['role'] }}</p>
    @endisset

    @if($user['role'] === 'admin')
        <p class="badge">Administrator</p>
    @else
        <p class="badge">Regular user</p>
    @endif

    <h3>Skills</h3>

    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>

@endsection
