@extends('layouts.app2')
@section('content')
<div class="container mt-5 text-dark">
    <h2>Borrow Book</h2>
    <form action="/borrowbook{{$book['id']}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Return date</label>
            <input type="date" class="form-control" name="date" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label>Return time</label>
            <input type="time" class="form-control" name="time">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info " href="/showbooks">cancel</a>
    </form>
</div>
@endsection