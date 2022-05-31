@extends('layouts.layout')

@section('content')
    <div class="conteiner">
       <form action="" method="POST">
           <h1>Edit Post</h1>
           @csrf
           <input type='text' name='title' placeholder="title here" class='form-control' value='{{$post->title}}'>
           <textarea name=body cols='30' rows='10' placeholder="your text here " class='form-control'>{{$post->body}}</textarea>
           <button class='btn btn-primary'>POST!</button>
       </form>
    </div>
@endsection