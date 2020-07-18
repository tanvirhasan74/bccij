@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    <h3>Post Notice</h3>
                </div>
                
                <div class="card-body">
                    <form action="/notice" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="notice" rows="5" placeholder="Write something">{{ old('notice') }}</textarea>
                            @if($errors->has('notice'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('notice') }}
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