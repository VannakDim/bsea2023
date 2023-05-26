@extends('admin.layouts.admin')
@section('content')
@section('heading1','Dashboard')
<div class="container">
   <div class="row">
      <div class="col-lg-12 col-md-offset-3">
             <table class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Email</th>
                  {{-- <th></th> --}}
                </thead>
                <tbody>
                   <tr>
                      <td>{{ Auth::user()->name }}</td>
                      <td>{{ Auth::user()->email }}</td>
                      {{-- <td><a href="{{ route('logout') }}">Logout</a></td> --}}
                   </tr>
                </tbody>
             </table>
             <ul>
                 <li><a href="/admin/dashboard">Dashboard</a></li>
                 <li><a href="/admin/profile">Profile</a></li>
                 <li><a href="/admin/settings">Settings</a></li>
                 <li><a href="/admin/staff">Staff</a></li>
             </ul>
      </div>
   </div>
</div>
@endsection