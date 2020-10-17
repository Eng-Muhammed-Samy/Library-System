@extends('layouts.app2')
@section('content')

<div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table table-light table-hover text-dark text-center">
    <thead>
      <tr style="background-color: #212121; " class="text-light">
        <th scope="col">id</th>
        <th scope="col">Book Name</th>
        <th scope="col">Author Name</th>
        <th scope="col">Edition Number</th>
        <th scope="col">created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">Borrow</th>
      </tr>
    </thead>
    <tbody  >
      @foreach($books as $book)
      <tr>
        <th  scope="row">{{$book['id']}}</th>
        <td>{{$book['bookname']}}</td>
        <td >{{$book['authorname']}}</td>
        <td>{{$book['editionnumber']}}</td>
        <td >{{$book['created_at']}}</td>
        <td>{{$book['updated_at']}}</td>
        <td><a class="btn btn-info" href="/borrow/{{$book['id']}}">Borrow</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection