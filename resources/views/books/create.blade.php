@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
            <label for="name" class="form-label">
                Book Name
            </label>
            <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
            <label for="description" class="form-label" >
                Description
            </label>
            <textarea class="form-control" name="description" id="description">
            </textarea>
    </div>

    <div class="form-group">
            <label for="photo" class="form-label">
                Photo
            </label>
            <input type="file" class="form-control" name="photo" id="photo">
    </div>

    <div class="form-group">

            <input type="submit" class="btn btn-success">
    </div>
</form>


</div>

@endsection
