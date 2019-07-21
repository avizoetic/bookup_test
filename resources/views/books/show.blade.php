@extends('layouts.app')

@section('content')
<div class="container">




    <div class="card mt-5">
        <div class="card-header">
            {{$book->name}}
        </div>
        <div class="card-body">
            {{$book->description}}
        </div>

    </div>

<form action="{{route('booklikers.store')}}" method="post" class="mt-2">
    @csrf
<input type="hidden" name="book_id" value="{{$book->id}}">
        <input type="submit" value="Like(select)" class="btn btn-success">
</form>
</div>

@endsection
