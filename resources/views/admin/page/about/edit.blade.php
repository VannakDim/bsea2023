@extends('admin.layouts.admin')
@section('heading1','About')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h2>Edit About Information</h2></div>
  <div class="card-body">
    @if (\Session::has('flash_message'))
      <div class="alert alert-info">
              {!! \Session::get('flash_message') !!}
      </div>
    @endif
       
      <form action="{{ url('/admin/page/about/'.$abouts->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$abouts->id}}" />
        
        @if ($abouts->title == 'image')
          <img src="/storage/app/img/{{ $abouts->description }}" alt="about image" id="cover" style="max-width: 200px"></br>
          <input type="file" name="description" class="form-controll py-3"></br>
        @else
          <label>Title</label></br>
          <input type="text" name="title" value="{{$abouts->title}}" class="form-control"></br>
          <label>Description</label></br>
          <textarea name="description" class="form-control">{{$abouts->description}}</textarea></br>
          <label>Class</label></br>
          <input type="text" name="class" value="{{$abouts->class}}" class="form-control"></br>
          <label>Icon as text</label></br>
          <input type="text" name="icon" value="{{$abouts->icon}}" class="form-control"></br>

        @endif
        
        <input type="submit" value="Update" class="btn btn-success mt-3"></br>
    </form>
    
  </div>
</div>

@stop