@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Users</h3>
          </div>
          <div class="panel-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Role</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->role }}</td>
                  <td>
                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">Edit</a> |
                    <a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
