@extends('layouts.app.dashboard')


@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0">Edit Experience Details</h4>
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
                        <form action="{{ route('experiences.update',['experience' => $experience->id]) }}" method="post">
                            {{ csrf_field() }}{{ method_field('PATCH') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Comapny Name</label>
                                            <input type="text" id="company_name" name="company_name" class="form-control" value="{{ $experience->company_name  }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Position</label>
                                            <input type="text" id="position" name="position" class="form-control" value="{{ $experience->position }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Star Date</label>
                                            <input type="date" id="star_date" name="star_date" class="form-control" value="{{ $experience->star_date }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">End date</label>
                                            <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $experience->end_date }}">
                                        </div>
                                        <div class="form-group fr-view">
                                            <label class="control-label">Description</label>
                                            <textarea id="description" class="form-control" rows="15" name="description" style="height:200px">{{ $experience->description }}</textarea>
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                        
                           
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Update</button>
                                 <a role="button" class="btn btn-danger" href="{{ route('experiences.index') }}">Cancel</a>
                            </div>
                        </form>
                             
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
@stop 
