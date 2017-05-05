@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as
                    @if(Auth::check())
                      @if(Auth::user()->role == 2)
                        Admin
                      @else
                        User
                      @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
