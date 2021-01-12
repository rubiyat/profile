@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0">Edit Education Details</h4>
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
                        <form action="{{ route('educations.update',['education'=>$education->id]) }}" method="post">
                            {{ csrf_field() }}{{ method_field('PATCH') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Inistitute Name</label>
                                            <input type="text" id="inistitute_name" name="inistitute_name" class="form-control" value="{{ $education->inistitute_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Board Name</label>
                                            <input type="text" id="board_name" name="board_name" class="form-control" value="{{ $education->board_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Certificate</label>
                                            <input type="text" id="cartificate" name="certificate" class="form-control" value="{{ $education->certificate }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Result</label>
                                            <input type="text" id="result" name="result" class="form-control" value="{{ $education->result }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Session</label>
                                            <input type="text" id="Session" name="session" class="form-control" value="{{ $education->session }}">
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                        
                           
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Update</button>
                                <a role="button" class="btn btn-danger" href="{{ route('educations.index') }}">Cancel</a>
                                
                            </div>
                        </form>
                             
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
@stop 