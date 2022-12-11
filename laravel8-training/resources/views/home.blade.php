
@extends('layouts.master')  
    @section('title','Home')

    @section('content')
        <h1>Welcome to Laravel</h1>
        <h3>My Name is - {{ $name; }}</h3>
        <h3>Today is {{ date('d-M-Y'); }}</h3>
        <h3>Today is {{ date('d-M-Y : H:i:s'); }}</h3>
        
        <h2>Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection

    
