@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @foreach ($users as $user)
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p class="card-title"><strong>Name:</strong> {{$user->name}}</p>
                        <p class="card-text"><strong>Username:</strong> {{$user->username}}</p>
                        <p class="card-text"><strong>Email:</strong> {{$user->email}}</p>
                        <p class="card-text"><strong>Notes:</strong> {{$user->notes}}</p>
                        <a class="btn btn-primary" href="/home/{{$user->id}}/edit">Edit</a>
                        <form method="POST" action="/home/{{$user->id}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
