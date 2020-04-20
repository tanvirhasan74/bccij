@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($newspack as $news)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">    
                <img src="{{ asset('storage/' . $news->image_url) }}" class="card-img-top" width="100%">  
                <div class="card-body">
                    <h4 class="card-title">{{$news->title}}</h4>
                    <p>{{$news->description}}</p>
                    <div></div>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-sm btn-secondary">Read More</a>
                    <a href="" class="btn btn-sm btn-secondary">Delete</a>
                 </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection