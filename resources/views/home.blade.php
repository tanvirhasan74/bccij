@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Auth::user()->hasRole('admin'))
            <a class="btn btn-lg btn-primary" href="{{ url('news') }}" role="button">Manage News</a>
            @endif
            <div class="card">
                <div class="card-header" style="text-align: center"><h2>Current Active Members</h2></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($activeusers)>0)
                        @foreach($activeusers as $user)
                            <tr>
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
        @if(Auth::user()->hasRole('admin'))
        <div col-md-4>

            <h2>New Application</h2>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($activeusers)>0)
                    @foreach($pendingusers as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a  href="{{route('activateUser',['userid'=>$user->id])}}"class="btn btn-sm btn-danger" >Activate</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                   
                    @endif
        </div>
        @endif
    </div>
</div>
@endsection
