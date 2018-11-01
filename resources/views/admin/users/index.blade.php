@extends('layouts.admin')

@section('content')
<h1>Users</h1>

  <table class="table" style="width:100%">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Created</th>
          <th>Updated</th>
        </tr>
    </thead>
    @if($users)
        @foreach($users as $user)
    <tbody>
        <tr>
          <td>{{$user->id}}</td>
          <td><img height='50' src="{{$user->photo ? $user->photo->file: 'No user photo'}}"></img></td>
          <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
          <td>{{$user->email}}</td>
          <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
          <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
    </tbody>    
        @endforeach
    @endif
  </table>

@stop