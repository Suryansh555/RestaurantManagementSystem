@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @include('management.inc.sidebar')
      <div class="col-md-8">
        <i class="fas fa-align-justify"></i>Create a Category
        <hr>
        @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
          </div>
        @endif
        <form action="/management/category" method="POST">
          @csrf
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="Category...">
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection