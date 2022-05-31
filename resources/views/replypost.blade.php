@extends('layouts.layout')

@section('content')
    <div class="conteiner">
        <form action="" method="POST">
            <h1>reply</h1>
            @csrf
            <input type='text' >
            <textarea name=body cols='30' rows='10' placeholder="your text here " class='form-control'></textarea>
            <button class='btn btn-primary'>REPLY</button>
        </form>
    </div>
@endsection