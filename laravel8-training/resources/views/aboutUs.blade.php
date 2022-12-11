@extends('layouts.master')  
    @section('title','About Us')
    @section('content')
        <h1>Laravel About Us</h1>
        <form method="POST" class="form-horizontal" style="border:1px solid #ccc;padding:20px;" action="/create">
            @csrf
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" required></br>
            <label for="content" class="control-label">Content</label>
            <input type="text" class="form-control" name="content" placeholder="Content" required></br>
            <label for="body" class="control-label">Body</label>
            <input type="text" class="form-control" name="body" placeholder="Body" required></br>
            <button class="btn btn-success">Send</button>
        </form>
    @endsection