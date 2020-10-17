@extends('layouts.app')
@section('content')
<div class="container mt-5 text-dark">
    <h2>Update User</h2>
    <form action="/updateuser/{{$user['id']}}" method="post">
        @csrf
        <div class="form-group">
            <label>user Name</label>
            <input type="text" class="form-control" value="{{$user['name']}}" name="name" aria-describedby="emailHelp" disabled>

        </div>
        <div class="form-group">
            <label>User Email</label>
            <input type="text" class="form-control" value="{{$user['email']}}" name="email" disabled>

        </div>
        <div class="form-group">
            <label>Is Admin</label>
            <input type="text" class="form-control" value="{{$user['is_admin']}}" name="admin">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info" href="/allusers">cancel</a>

    </form>

</div>
@endsection