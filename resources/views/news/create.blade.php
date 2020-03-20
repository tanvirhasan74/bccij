@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    <h3>Create News</h3>
                </div>
                
                <div class="card-body">
                    <form action="/news" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Enter title" value="{{ old('title') }}">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" rows="5" placeholder="Write something">{{ old('description') }}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Upload image</label>
                            <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" accept="image/*">
                            @if($errors->has('image'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span class="border border-primary"></span>
            </div>
        </div>
    </div>
</div>
@endsection