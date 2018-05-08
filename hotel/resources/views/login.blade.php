@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form method="post" for="/register">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <lable>E-mail</lable>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Password</lable>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        @if (isset($error))
            <div class="alert alert-danger">
                <ul>
                   <li>{{ $error }}</li>
                </ul>
            </div>
        @endif
    </div>
</div>
@endsection