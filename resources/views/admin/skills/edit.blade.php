@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">                  
                      	<!-- Start Page Content -->
                      	<div class="row">
                      	    <div class="col-lg-6">
                      	        <div class="card card-outline-primary">
                      	            <div class="card-header">
                      	                <h4 class="m-b-0">Edit Skill</h4>
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
                      	                <form action="{{ route('skills.update',['skill' => $skill->id]) }}" method="post">
                      	                	{{ csrf_field() }}{{ method_field('PATCH') }}
                      	                    <div class="form-body">
                      	                        <div class="row p-t-20">
                      	                            <div class="col-md-12">
                      	                                <div class="form-group">
                      	                                    <label class="control-label">Your Skill</label>
                      	                                    <input type="text" id="name" name="name" class="form-control" value="{{ $skill->name }}">
                      	                                </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Skill progress</label>
                                                            <input type="text" id="progress" name="progress" value="{{ $skill->progress }}" class="form-control">
                                                        </div>
                      	                            </div>
                      	                           
                      	                        </div>
                      	             
                      	                   
                      	                    </div>
                      	                    <div class="form-actions">
                      	                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Update</button>
                      	                       
                      	                    </div>
                      	                </form>
                      	            </div>
                      	        </div>
                      	    </div>
                      		

                      		<div class="col-lg-6">
                      	        <div class="card card-outline-info">
                      	            <div class="card-header">
                      	                <h4 class="m-b-0">List of Skills</h4>
                      	            </div>
                      	            <div class="card-body">
                                      @if ($message = Session::get('delete'))
                                      <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @endif
                      	                <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                      <th>#</th>
                                                      <th>Skill</th>
                                                      <th>Progress</th>
                                                      <th>Edit</th>
                                                      <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                @if($skills)
                                                <tbody>
                                                	@foreach($skills as $key=>$skill)
                                                    <tr>
                                                    	<td>{{ ++$key }}</td>
                                                    	<td>{{ $skill->name }}</td>
                                                      <td>{{ $skill->progress }}</td>
                                                    	<td>
                                                    		<a href="{{ route('skills.edit',['skill' => $skill->id]) }}"><i class="fa fa-edit icon-size"></i></a>
                                                    	</td>
                                                      <td>
                                                        <form action="{{ route('skills.destroy',['skill' => $skill->id]) }}" method="post">
                                                          {{ csrf_field() }}{{ method_field('DELETE') }}
                                                          <button role="link" class="fa fa-trash icon-size" type="submit"></button>
                                                        </form>
                                                      </td>
                                                    </tr>   
                                                    @endforeach                                             
                                                </tbody>
                                                @endif
                                            </table>
                                        </div>
                      	            </div>
                      	        </div>
                      	    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
@stop 