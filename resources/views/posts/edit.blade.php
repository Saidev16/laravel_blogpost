@extends('layout')

@section('content')

    <form method="POST" action="{{route('posts.update', ['post'=> $post->id])}}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Your title</label>
            <input name="title" id="title" type="text" value="{{old('title', $post->title)}}">
        </div>
        <div>
            <label for="content">your content</label>
            <input type="text" name="content" id="content" value="{{old('content',$post->content)}}">
        </div>

        @if( $errors->any() )
        <ul>
            @foreach( $errors->all() as $error )
                <li> {{ $error }} </li>
            @endforeach
        </ul>
        @endif

        <button type="submit" >Update Post</button>
    </form>


@endsection