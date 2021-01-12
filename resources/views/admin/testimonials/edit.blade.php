@extends('themes.app.pages')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Protfolio</h4>
                    </div>
                    <div class="card-body"> 
                         @if ($message = Session::get('update'))
                        <div class="alert alert-info alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @if(count($errors))
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br/>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('testimonials.update', ['testimonial' => $testimonial->id]) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}{{ method_field('PATCH') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ $testimonial->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description" style="height:200px">{{ $testimonial->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Photo</label><br>
                                            <label><img width="100" height="100" src="/images/{{ $testimonial->image }}" ></label>
                                           {{--  <label><img width="100" height="100" src="{{ asset('public/images/'.$testimonial->image ) }}"></label> --}}
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="0">Approve</option>
                                                <option value="1">Unapprove</option>
                                            </select>
                                        </div>
                                  
                                    </div>
                                   
                                </div>
                        
                           
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                 <a role="button" class="btn btn-inverse" href="{{ route('testimonials.index') }}">Cancel</a>
                                
                            </div>
                        </form>
                             
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
@stop 