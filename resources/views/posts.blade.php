@extends('layouts.layout')


@section('content')
    <div class="conteiner">
        <h1>posts</h1>
        @foreach($posts as $post)
            @include('includes.post')            
        @endforeach
    </div>
@endsection