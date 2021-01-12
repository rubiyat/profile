@extends('layouts.app.dashboard')


@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="m-b-0">Add Experience Details</h4>
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
                        <form action="{{ route('experiences.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Comapny Name</label>
                                            <input type="text" id="company_name" name="company_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Position</label>
                                            <input type="text" id="position" name="position" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Star Date</label>
                                            <input type="date" id="star_date" name="star_date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">End date</label>
                                            <input type="date" id="end_date" name="end_date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea class="textarea_editor form-control" rows="15" name="description" style="height:200px"></textarea>
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
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
