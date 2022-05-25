@extends('layouts.main')
@section('content')
    <a href="{{route('post.create')}}" class="btn btn-primary col-md-2">Add</a>
        @foreach($posts as $post)

            <div><a href="{{route('post.show',$post->id)}}"> {{$post->id}}.{{$post->title}}</a></div>

        @endforeach

@endsection
