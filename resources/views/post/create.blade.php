@extends('layouts.main')
@section('content')
    <form method="post" action="{{route('post.store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <textarea  class="form-control"  name="content" id="content" >{{ old('content') }}</textarea>
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">img</label>
            <input type="text" class="form-control" name="img" id="titlimge" value="{{ old('img') }}">
            @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
        <select class="form-select" name="category_id" aria-label="Default select example">
            @foreach($categories as $categorie)
                {{old('category_id') === $categorie->id ? 'selected' : ''}}
            <option value="{{$categorie->id}}">{{$categorie->title}}</option>
            @endforeach
        </select>
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select" name="tages[]" multiple aria-label="multiple select example">
                @foreach($tages as $tage)
                    {{old('tages') === $tage->id ? 'selected' : ''}}
                    <option value="{{$tage->id}}">{{$tage->title}}</option>
                @endforeach
            </select>
            @error('tages')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
    <x-FormButton />
    </form>
@endsection
