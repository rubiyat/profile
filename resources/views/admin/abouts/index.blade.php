@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                       <h3 class="card-title">About Me 
                        @if(!$about)
                        <a class="btn btn-primary float-right" href="{{ route('abouts.create') }}" type="button">Add MySelf</a>
                        @else
                        
                         <a class="btn btn-primary float-right" href="{{ route('abouts.edit',['about' => $about->id]) }}" type="button">Update MySelf</a>
                         
                        @endif
                        </h3>                  
                       <div class="clearfix"></div>
                       <hr>
                        @if($about)
                            {!! $about->about_me !!}<br><hr>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset('/images/'.$about->profile_image) }}" width="180" height="200">
                                </div>
                                <div class="col-lg-8">
                                    <ul class="list-icons">
                                    <li><b>Address:</b> {{ $about->address }}</li>
                                    <li><b>Phone:</b> {{ $about->phone }}</li>
                                    <li><b>Email:</b> {{ $about->email }}</li>
                                    <li><b>FaceBook Link:</b><a href="{{ $about->fb }}"> {{ $about->fb }} </a></li>
                                    <li><b>Twitter Link:</b><a href="{{ $about->tw }}"> {{ $about->tw }} </a></li>
                                    <li><b>Linkedin Link:</b><a href="{{ $about->li }}"> {{ $about->li }} </a></li>
                                    <li><b>Github Link:</b><a href="{{ $about->git }}"> {{ $about->git }} </a></li>
                                    <li><b>Bitbucket Link:</b><a href="{{ $about->bitbucket }}"> {{ $about->bitbucket }} </a></li>
                                    <li><b>Google+ Link:</b><a href="{{ $about->google }}"> {{ $about->google }} </a></li>
                                   
                                </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="row">
                                <embed width="100%" height="600px" src="{{ asset('/images/'.$about->cv) }}" type="application/pdf">
                                    
                            </div> 
                                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
@stop 