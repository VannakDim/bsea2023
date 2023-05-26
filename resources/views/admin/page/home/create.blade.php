@extends('admin.layouts.admin')
@section('heading1','Post')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h2>Create New Post</h2></div>
  <div class="card-body">
       
      <form action="{{ url('/admin/post') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" id="name" class="form-control"></br>
        <label>Content</label></br>
        <input type="text" name="content" id="address" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop