@extends('layouts.layout')


@section('content')
    <div class="conteiner">
       <form action="" method="POST">
           @csrf
           <input type='text' name='title' placeholder="title here" class='form-control'>
           <textarea name=body cols='30' rows='10' placeholder="your text here " class='form-control'></textarea>
           <button class='btn btn-primary'>POST!</button>
       </form>
    </div>
@endsection