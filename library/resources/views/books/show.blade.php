@extends('layouts.app')
@section('content')

<div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg container">
  <h2 class="text-dark">Show Book</h2>
  <table class="table text-dark  text-center bg-light table-bordered table-striped table-hover" style="font-size:18px;font-weight:bold">
    <tr >
      <th class="bg-primary text-white w-25">id</th>
      <td >{{$book['id']}}</td>
    </tr>
    <tr>
      <th class="bg-primary  text-white  w-25">Book Name</th>
      <td >{{$book['bookname']}}</td>
    </tr>
    <tr>
      <th class="bg-primary  text-white  w-25">Author Name</th>
      <td >{{$book['authorname']}}</td>
    </tr>
    <tr>
      <th class="bg-primary   text-white  w-25">Edition Number</th>
      <td >{{$book['editionnumber']}}</td>
    </tr>
    <tr>
      <th class="bg-primary   text-white   w-25">created At</th>
      <td >{{$book['created_at']}}</td>
    </tr>
    <tr>
      <th class="bg-primary   text-white   w-25">updated At</th>
      <td >{{$book['updated_at']}}</td>
    </tr>
    <tr>
     </table>
     <a class="btn btn-primary w-25 d-block " href="/books">
          Back</a> 
      </div> @endsection