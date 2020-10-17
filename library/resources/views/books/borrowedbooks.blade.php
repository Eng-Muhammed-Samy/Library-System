@extends('layouts.app')

@section('content')
<div class="mt-1 table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table  table-light table-hover text-dark text-center">
    <thead >
      <tr  style="background-color: #212121;" class="text-light">
        <th scope="col">id</th>
        <th scope="col">Book Name</th>
        <th scope="col">Author Name</th>
        <th scope="col">Edition Number</th>
        <th scope="col">created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">borrowed by</th>
        <th scope="col">return date</th>
        <th scope="col">return time</th>
      </tr>
    </thead>
    <tbody >
      @foreach($books as $book)
      <tr>
        <th scope="row">{{$book['id']}}</th>
        <td>{{$book['bookname']}}</td>
        <td>{{$book['authorname']}}</td>
        <td>{{$book['editionnumber']}}</td>
        <td >{{$book['created_at']}}</td>
        <td>{{$book['updated_at']}}</td>
        <td>{{$book['borrowedby']}}</td>
        <td>{{$book['returndate']}}</td>
        <td >{{$book['returntime']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-outline-primary d-block w-25 m-auto" href="/books">back</a>
</div>
@endsection