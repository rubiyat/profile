@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0">Add New Protfolio</h4>
                    </div>
                    <div class="card-body"> 
                        @if ($message = Session::get('success'))
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
                        <form action="{{ route('portfolios.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Project Name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Project Type</label>
                                            <input type="text" id="project_type" name="project_type" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Photo</label>
                                            <input type="file" id="photo" name="photo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">URL</label>
                                            <input type="text" id="url" name="url" class="form-control">
                                        </div>
                                  
                                    </div>
                                   
                                </div>
                        
                           
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                                <a role="button" class="btn btn-danger" href="{{ route('portfolios.index') }}">Cancel</a>
                                
                            </div>
                        </form>
                             
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
@stop 