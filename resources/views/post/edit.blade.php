@extends('layouts.main')
@section('content')
    <form method="post" action="{{route('post.update',$post->id)}}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}" >

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <textarea  class="form-control"  name="content" id="content" >{{$post->content}}</textarea>

        </div>
        <div class="mb-3">
            <label for="img" class="form-label">img</label>
            <input type="text" class="form-control" name="img" id="titlimge" value="{{$post->img}}">

        </div>
        <div class="mb-3">
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach($categories as $categorie)
                    <option
                        {{$categorie->id === $post->category->id ? 'selected' : ''}}
                        value="{{$categorie->id}}">{{$categorie->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" name="tages[]" multiple aria-label="multiple select example">
                @foreach($tages as $tage)
                    <option
                        @foreach($post->tages as $postTage)
                        {{$tage->id === $postTage->id ? 'selected' : ''}}
                        @endforeach
                        value="{{$tage->id}}">{{$tage->title}}</option>
                @endforeach
            </select>

        </div>

        <x-FormButton />
    </form>
@endsection
