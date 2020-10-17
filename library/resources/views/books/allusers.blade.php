@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
  #myInput  {
    width: 150px;
    transition: all .3s linear;
  }

  #myInput:focus {
    width: 300px;
  }
</style>
<div class="row justify-content-center bg-dark d-flex pb-3">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for id.." class="form-control "><span style="font-size: 1.8rem; background-color:white; border-radius:5px; padding:5px ;color:black;text-align: center;font-size: 1.1rem;margin-left: 5px; cursor: pointer;"><i style="width: 30px;" class="fa fa-search"></i></span>
</div>
<div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table table-light table-hover text-dark text-center" id="myTable" style='border-collapse:collapse;'>
    <thead style="background-color: #212121;" class="text-light">
      <tr class="header">
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Is Admin</th>
        <th scope="col">update</th>
        <th scope="col">Show</th>

      </tr>
    </thead>
    <tbody >
      @foreach($users as $user)
      <tr>
        <td  scope="row">{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td >{{$user['email']}}</td>
        <td>{{$user['is_admin']}}</td>
        <td  ><a class=" btn btn-warning "  href="/edituser/{{$user['id']}}">Update</a></td>
        <td><a class="btn btn-info  " href="/showuser/{{$user['id']}}">Show</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
<script>
  function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>

@endsection