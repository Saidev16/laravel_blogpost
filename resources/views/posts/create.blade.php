@extends('layout')

@section('content')

    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div>
            <label for="title">Your title</label>
            <input name="title" id="title" type="text">
        </div>
        <div>
            <label for="content">your content</label>
            <input type="text" name="content" id="content">
        </div>

        <button type="submit" >Add Post</button>
    </form>

@endsection