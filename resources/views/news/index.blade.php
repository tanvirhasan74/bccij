@extends('layouts.app')
@section('content')
<div class="container">
    
    <a class="btn btn-primary" href="{{ url('news/create') }}" role="button">Add a News</a>
    <br><br>
    <div class="row">
        @foreach($newspack as $news )
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card" style="height: 100%">    
                <img src="{{ asset('storage/' . $news->image_url) }}" class="card-img-top" height="200px" width="100% ">
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 18px">{{$news->title}}</h4>
                    <p class="card-text" style="font-size: 12px">{{ substr($news->description,0,50) }}</p>
                    
                    <div></div>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-sm btn-secondary">Read More</a>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmationModal{{$news->id}}" data-whatever="@getbootstrap">Delete</button>
                 </div>
            </div>
                        <!-- Modal -->
        <div class="modal fade" id="confirmationModal{{$news->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmationLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationLabel">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this News ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger" form="form{{$news->id}}">Yes damn sure !</button>                        </div>
                    </div>
                </div>
            </div>

        <div class="modal-body">
        <form id='form{{$news->id}}' method="post" action="{{route('deleteNews')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$news->id}}">
                
            </form>
        </div>
        </div>


    @endforeach
    </div>
    

</div>
@endsection