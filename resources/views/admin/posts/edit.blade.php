@extends('admin.layouts.admin')
@section('heading1','Post')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h2>Create New Post</h2></div>
  <div class="card-body">
    @if (\Session::has('flash_message'))
        <div class="alert alert-info">
                {!! \Session::get('flash_message') !!}
        </div>
      @endif
       
      <form action="{{ url('/admin/post/'.$post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <label>Title</label></br>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control"></br>
        <label>Content</label></br>
        <textarea type="text" name="content" class="form-control">{{ $post->content }}</textarea></br>
        <input type="file" class="form-controll mb-3" name="photo"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop