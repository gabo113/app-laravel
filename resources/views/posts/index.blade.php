@extends('layouts.app')

@section('title', 'Blog')

@section('meta-description', 'Blog meta description')
   
@section('content')
    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Crear nuevo post</a>

    @foreach($posts as $post)

    <h2>
        <a href="{{ route('posts.show', $post->id)}}">{{ $post->title }}</a></h2>

    @endforeach
@endsection