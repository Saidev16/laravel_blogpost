@extends('layout');

@section('content')


        <h2> {{ $post->title }} </h2>
        <p> {{ $post->content }} </p>
        <em> {{ $post->created_at }} </em>
        <p>Staus: 
        @if($post->active)
            Enabled
        @else
            Disabled 
        @endif
        </p>
                



@endsection
