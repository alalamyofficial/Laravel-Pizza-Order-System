@extends('admin.layout')
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            
            <div class="d-flex">
                <h2 class="mr-5">Users</h2>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
  
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($users as $user)
                    <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->role_as == 0)
                                <span class="badge badge-info">User</span>
                            @else
                                <span class="badge badge-success">Admin</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection