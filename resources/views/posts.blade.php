@extends('layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{$post->slug}}"><h1>{{$post->title}}</h1></a>
            <p>{{$post->excerpt}}</p>
        </article>
    @endforeach
@endsection
