@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($books as $book)


    <div class="card mt-5">
        <div class="card-header">
            {{$book->name}}
        </div>
        <div class="card-body">
            {{$book->description}}
        </div>
    <a href="{{route('books.show',$book->id)}}"><button class="btn btn-success">View book</button></a>
    </div>

    @endforeach
</div>

@endsection
