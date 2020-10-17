@extends('layouts.app')
@section('content')

<div class="mt-1 table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table  table-light table-hover text-light text-center text-dark table-borderless">
    <thead>
      <tr style="background-color: #212121;" class="text-white">
        <th scope="col">id</th>
        <th scope="col">Book Name</th>
        <th scope="col">Author Name</th>
        <th scope="col">Edition Number</th>
        <th scope="col">created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">show</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <th  scope=" row">{{$book['id']}}</th>
        <td>{{$book['bookname']}}</td>
        <td >{{$book['authorname']}}</td>
        <td>{{$book['editionnumber']}}</td>
        <td >{{$book['created_at']}}</td>
        <td>{{$book['updated_at']}}</td>
        <td ><a class=" btn btn-info " 
            href="/books/{{$book['id']}}">Show
          </a></td>
        <td><a class=" btn btn-warning" 
            href="/books/{{$book['id']}}/edit">Update
          </a></td>
        <td >
          <form action=" /books/{{$book['id']}}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger " >Delete </button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <a class="btn btn-outline-info mb-3 d-block m-auto w-25" href="/books/create">Add Book</a>
</div>
@endsection