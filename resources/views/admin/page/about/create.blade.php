@extends('admin.layouts.admin')
@section('heading1','About')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h2>Create About Information</h2></div>
  <div class="card-body">
    @if (\Session::has('flash_message'))
      <div class="alert alert-info">
              {!! \Session::get('flash_message') !!}
      </div>
    @endif
      <form action="{{ url('/admin/page/about') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" class="form-control">
        <span class="text-danger">@error('title'){{ $message }} @enderror</span></br>
        <label>Description</label></br>
        <textarea name="description" class="form-control"></textarea>
        <span class="text-danger">@error('description'){{ $message }} @enderror</span></br>
        <label>Class</label></br>
        <input type="text" name="class" class="form-control"></br>
        <label>Icon as text</label></br>
        <input type="text" name="icon" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop