@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <br>
                    <a href="landing" class="btn btn-lg btn-default" >Landing Page</a>
                    <a href="main" class="btn btn-default btn-lg"> Tes </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection