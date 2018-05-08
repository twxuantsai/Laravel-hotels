@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form method="post" for="/register">
                    <div class="form-group">
                        <lable>E-mail</lable>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Password</lable>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Comfirm</lable>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Name</lable>
                        <input type="text" name="name" class="form-control">
                    </div>

                    {{ csrf_field() }}
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@endsection