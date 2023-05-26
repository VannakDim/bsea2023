@extends('admin.layouts.admin')
@section('heading1','User')
@section('content')

    <!-- Page Wrapper -->
    
    <div class="card">
        <!-- Page Header -->
        <div class="card-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Change Profile Info</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (\Session::has('profile_message'))
            <div class="alert alert-info">
                    {!! \Session::get('profile_message') !!}
            </div>
        @endif
        <!-- /Page Header -->
        <form method="POST" action="{{ url('/admin/user/'.Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <img src="{{ asset('/storage/app/img/'. Auth::user()->photo) }}" alt="" width="250px">
                </br><label>Profile photo</label></br>
                <input type="file" name="photo">
            </div>
            <div class="submit-section">
                <button type="submit" class="btn btn-primary submit-btn">Update</button>
            </div>
        </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Change Password</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (\Session::has('account_message'))
                <div class="alert alert-info">
                        {!! \Session::get('account_message') !!}
                </div>
            @endif
            <form method="POST" action="{{ url('/admin/user/'.Auth::user()->id) }}">
                @csrf
                @method("PATCH")
                
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control " name="username" value="{{ $user->name }}" placeholder="Enter Username">
                    <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Old password</label>
                    <input type="password" class="form-control @error('current_password') is-invalid @enderror " name="password" placeholder="Enter Old Password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>New password</label>
                    <input type="password" class="form-control" name="new_password" placeholder="Enter Current Password">
                    <span class="text-danger">@error('new_password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Choose Confirm Password">
                    <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
                </div> 
                <div class="submit-section">
                    <button type="submit" class="btn btn-primary submit-btn">Change</button>
                </div>
            </form>
        </div>
    </div>
@endsection