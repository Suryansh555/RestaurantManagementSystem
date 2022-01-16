@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @include('management.inc.sidebar')
      <div class="col-md-8">
        <i class="fas fa-chair"></i>Table
        <a href="/management/table/create " class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create a Table</a>
        <hr>
        @if(Session()->has('status'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{Session()->get('status')}}
          </div>
        @endif
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Table</th>
              <th scope="col">Status</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tables as $table)
              <tr>
                <td>{{$table->id}}</td>
                <td>{{$table->name}}</td>
                <td>{{$table->status}}</td>
                <td>
                  <a href="/management/table/{{$table->id}}/edit" class="btn btn-warning">Edit</a>
                </td>
                <td>
                  <form action="/management/table/{{$table->id}}" method="post">
                  @csrf 
                  @method('DELETE')
                  <input type="submit" value="Delete" class="btn btn-danger">
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection