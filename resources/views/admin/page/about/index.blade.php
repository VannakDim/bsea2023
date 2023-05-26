@extends('admin.layouts.admin')
@section('heading1','About')
@section('username', 'Admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>About page</h2>
        </div>
        @if (\Session::has('flash_message'))
        <div class="alert alert-danger">
                {!! \Session::get('flash_message') !!}
        </div>
        @endif
        <div class="card-body">
            <a href="{{ url('/admin/page/about/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abouts as $about)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td><a href="{{ url('/admin/page/about/'. $about->id .'/edit') }}">{{ $about->title }}</a></td>
                            <td>
                                @if($about->title == 'image')
                                    <img src="/storage/app/img/{{ $about->description }}" alt="about image" id="cover" style="max-width: 150px">
                                @else
                                    {{ \Illuminate\Support\Str::limit($about->description, 50) }}
                                @endif
                            </td>

                            <td>
                                {{-- <a href="" title="View Post"><button class="btn btn-info btn-sm"><i aria-hidden="true"></i> View</button></a>  --}}
                                {{-- <a href="{{ url('/admin/page/about/' . $about->id .'/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="far fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>  --}}

                                <form method="POST" action="{{ url('/admin/page/about/' . $about->id) }}" accept-charset="UTF-8" style="display:inline">
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </a>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection