@extends('layouts.layout')

@section('content')
    <div class="conteiner">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <a href='{{route('post.edit',$post)}}'><button class='btn btn-primary'>EDIT POST</button></a>
        <a href='{{route('post.delete',$post)}}'><button class='btn btn-danger'>DELETE POST</button></a>
        <a href='{{route('post.replypost',$post)}}'><button class='btn btn-primary'>REPLY</button></a>
    </div>
@endsection