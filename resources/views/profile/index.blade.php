@extends('layouts.profile')
@section('title', 'プロフィールの閲覧')

@section('content')
    <h1>プロフィールの閲覧</h1>

    <ul>
        @foreach($posts as $post)
            <li>
                <strong>名前:</strong> {{ $post->name }}<br>
                <strong>性別:</strong> {{ $post->gender }}<br>
                <strong>趣味:</strong> {{ $post->hobby }}<br>
                <strong>自己紹介:</strong> {{ $post->introduction }}
            </li>
        @endforeach
    </ul>
@endsection