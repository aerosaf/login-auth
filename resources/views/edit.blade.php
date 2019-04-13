@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="/home/{{$user->id}}">
                {{method_field('PATCH')}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Full Name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Username" value="{{$user->username}}">
                </div>

                <div class="form-group">
                    <label for="notes">Notes</label>
                    <input type="text" class="form-control" id="notes" name="notes" aria-describedby="notesHelp" placeholder="Your notes" value="{{$user->notes}}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/home" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection