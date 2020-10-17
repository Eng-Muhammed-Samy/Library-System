@extends('layouts.app2')
@section('content')
<div class="mt-5 ">
    <div class=" m-auto w-100  ">
        <a class="btn btn-outline-success btn-lg" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            borrowed by me
        </a>
        <a class="btn btn-outline-info btn-lg" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            borrowed by others
        </a>
    </div>
    <div class="collapse" id="collapseExample">
        <div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg">

            <table class="table table-light table-hover text-dark text-center">
                <thead>
                    <tr  style="background-color: #212121;" class="text-light">
                        <th scope="col">id</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Edition Number</th>
                        <th scope="col">created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Return date</th>
                        <th scope="col">Return time</th>
                        <th scope="col">Borrowed by</th>
                        <th scope="col">Restore</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($books as $book)
                    @if ($book['borrowedby']== Auth::user()->name )
                    <tr>
                        <th  scope="row">{{$book['id']}}</th>
                        <td>{{$book['bookname']}}</td>
                        <td >{{$book['authorname']}}</td>
                        <td>{{$book['editionnumber']}}</td>
                        <td >{{$book['created_at']}}</td>
                        <td>{{$book['updated_at']}}</td>
                        <td >{{$book['returndate']}}</td>
                        <td>{{$book['returntime']}}</td>
                        <td >{{$book['borrowedby']}} </td>
                        <td><a class="btn btn-warning" href="/restore/{{$book['id']}}">Restore</a></td>

                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="collapse" id="collapseExample1">
        <div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg">

            <table class="table  table-light table-hover text-dark text-center">
                <thead>
                    <tr style="background-color: #212121;" class="text-light">
                        <th scope="col">id</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Edition Number</th>
                        <th scope="col">created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Return date</th>
                        <th scope="col">Return time</th>
                        <th scope="col">Borrowed by</th>

                    </tr>
                </thead>
                <tbody >
                    @foreach($books as $book)
                    @if ($book['borrowedby'] !== Auth::user()->name )
                    <tr>
                        <th  scope="row">{{$book['id']}}</th>
                        <td>{{$book['bookname']}}</td>
                        <td >{{$book['authorname']}}</td>
                        <td>{{$book['editionnumber']}}</td>
                        <td >{{$book['created_at']}}</td>
                        <td>{{$book['updated_at']}}</td>
                        <td >{{$book['returndate']}}</td>
                        <td>{{$book['returntime']}}</td>
                        <td >{{$book['borrowedby']}} </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection