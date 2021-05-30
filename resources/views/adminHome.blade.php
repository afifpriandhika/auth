@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $key => $data)
                            <tr> 
                                <th>{{$data->id}}</th>  
                                <th>{{$data->name}}</th>
                                <th>{{$data->email}}</th>
                                <th>@if ($data->is_admin == 1)
                                admin
                                @else
                                user
                                @endif
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection