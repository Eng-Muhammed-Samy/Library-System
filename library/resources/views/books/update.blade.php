@extends('layouts.app')
@section('content')
<div class="container mt-5 text-dark">
    <h2>Update Book</h2>
    <form action="/books/{{$book['id']}}" method="post">
        @csrf
        @method("put")
        <div class="form-group">
            <label>Book Name</label>
            <input type="text" class="form-control" value="{{$book['bookname']}}" name="bookname" aria-describedby="emailHelp">
            <label class="text-danger">{{$errors->first("bookname")}}</label>
        </div>
        <div class="form-group">
            <label>Author Name</label>
            <input type="text" class="form-control" value="{{$book['authorname']}}" name="authorname">
            <label class="text-danger">{{$errors->first("authorname")}}</label>
        </div>
        <div class="form-group">
            <label>Edition Number</label>
            <input type="text" class="form-control" value="{{$book['editionnumber']}}" name="editionnumber">
            <label class="text-danger">{{$errors->first("departmentaddress")}}</label>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info" href="/books/{{$book['id']}}">cancel</a>

    </form>

</div>
@endsection