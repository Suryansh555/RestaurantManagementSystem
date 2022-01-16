@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @include('management.inc.sidebar')
      <div class="col-md-8">
        <i class="fas fa-user"></i>Create a User
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
        <form action="/management/user" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name...">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email...">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password...">
          </div>
          <div class="form-group">
            <label for="Role">Role</label>
            <select name="role" class="form-control">
              <option value="admin">Admin</option>
              <option value="cashier">Cashier</option>
            </select>
          </div>
        
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection