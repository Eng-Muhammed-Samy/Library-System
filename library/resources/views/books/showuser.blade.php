@extends('layouts.app')
@section('content')
<div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg text-dark container">
  <h2>Show User</h2>
  <table  class="table text-dark  text-center bg-light " style="font-size:18px;font-weight:bold">
    <tr>
      <th class="bg-primary text-white w-25">id</th>
      <td>{{$user['id']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">Name</th>
      <td>{{$user['name']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">Email</th>
      <td>{{$user['email']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">Is Admin</th>
      <td>{{$user['is_admin']}}</td>
    </tr>

    </table>
      <a class="btn btn-primary w-25 " href="/allusers">
          Back</a> 
          
         </div> @endsection