@extends('layouts.app')
@section('content')

<div class="container mt-5 text-dark">
    <h2>Add New Book</h2>
    <form action="/books" method="post">
        @csrf
        <div class="form-group">
            <label>Book Name</label>
            <input type="text" class="form-control" name="bookname" aria-describedby="emailHelp">
            <label class="text-danger">{{$errors->first("bookname")}}</label>
        </div>
        <div class="form-group">
            <label>Author Name</label>
            <input type="text" class="form-control" name="authorname">
            <label class="text-danger">{{$errors->first("authorname")}}</label>
        </div>
        <div class="form-group">
            <label>Edition Number</label>
            <input type="text" class="form-control" name="editionnumber">
            <label class="text-danger">{{$errors->first("editionnumber")}}</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

</div>
@endsection