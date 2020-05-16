@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Member Details') }}</div>

                <div class="card-body">
                    
                       

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Name') }}</label>

                            
                            <div class="col-md-6">
                                <p>{{$userinfo->name}}</p>
                            </div>                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Name Of Company') }}</label>

                            <div class="col-md-6">
                                <p>{{$userinfo->companyName}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 text-md-right">{{ __('Name of President/Managing Director or CEO') }}</label>

                            <div class="col-md-6">
                                <p> {{$userinfo->nameCEO}} </p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Category Of Business') }}</label>

                            <div class="col-md-6">
                                <p> {{$userinfo->businessCategory}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <p> {{$userinfo->address}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <p>{{$userinfo->mobile}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4  text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <p> {{$userinfo->email}} </p>
                            </div>
                        </div>

                       

                       

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Date of Bank Transfer') }}</label>

                            <div class="col-md-6">
                                <p> {{$userinfo->transferDate}} </p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Money Receipt Image') }}</label>

                            <div class="col-md-6">
                                <img src="{{ asset('storage/' . $userinfo->moneyReceipt) }}" class="img-fluid" style= "width:400px; margin:0 auto" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a  href="{{route('activateUser',['userid'=>$userinfo->id])}}"class="btn btn-sm btn-danger" >Activate</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(window).ready(function(){
            $('img').click(function() {
                var img = $('img', this);
                img.prop('src', img.data('src')).toggleClass('hidden');
            });
        });
    </script>

@endsection
