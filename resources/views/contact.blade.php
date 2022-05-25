@extends('layouts.main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>

                <th scope="row"> {{$post->id}}</th>
                <th scope="row"> {{$post->title}}</th>
                <th scope="row">{{$post->content}}</th>
                <th scope="row"> {{$post->liks}}</th>

            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
