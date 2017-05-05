<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Data</title>

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} ">

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
	<center>
		<h1>Daftar Mahasiswa</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
    <thead>
    	<tr>
    		<th>Nama</th>
    		<th>Address</th>
    		<th>Phone</th>
    		<th>Email</th>
        <th>Action</th>
    		<!-- <th colspan="2">Menu</th> -->
    	</tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>
          <a href="{{ route('users.edit'.$user->id) }}" class="btn btn-primary">Edit</a> |
          <a href="" class="btn btn-danger">Delete</a>
      </tr>
      @endforeach;
    </tbody>
	</table>
	</div>
</body>
</html>
