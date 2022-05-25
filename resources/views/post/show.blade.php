@extends('layouts.main')
@section('content')
    <div> {{$post->id}}.{{$post->title}}</div>
    <div> {{$post->content}}</div>
    <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary col-md-2">Edit</a>

    <form action="{{ route('post.delete',$post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="delete">
    </form>

    <a href="{{ route('post.index') }}" class="btn btn-primary col-md-2">Back</a>
@endsection
