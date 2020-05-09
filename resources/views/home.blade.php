@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a class="btn btn-primary" href="{{ url('news') }}" role="button">News</a>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> posts</h1>
                   
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($users)>0)
                        @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            </tr>
                           
                   

                    @endforeach
                    @else
                    @endif
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
