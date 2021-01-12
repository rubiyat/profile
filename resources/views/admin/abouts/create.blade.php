@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
	        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Person Info</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('abouts.store') }}" method="post" enctype="multipart/form-data">
                        	{{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Designation</label>
                                            <input type="text" name="designation" id="designation" class="form-control" placeholder="Software Engineer...">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <label class="control-label">About My Profession</label>
                                            <textarea class="textarea_editor form-control" rows="15" name="about_me" placeholder="Enter text ..." style="height:200px"></textarea>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                	<div class="col-md-6">
                                		<div class="form-group">
						           	    	<label for="profile_image">Profile Image</label>
						           	    	<input type="file" id="profile_image" name="profile_image">
						           	  	</div>
						            </div>
						            <div class="col-md-6">      	
						           	  	<div class="form-group">
						           	    	<label for="cv">Upload My Resume</label>
						           	    	<input type="file" id="cv" name="cv">
						           	  	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="address">Address</label>
						           	    	<input type="text" class="form-control" id="address" name="address" placeholder="Address">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="phone">Phone</label>
						           	    	<input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="email">Email</label>
						           	    	<input type="text" class="form-control" id="email" name="email" placeholder="email">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="fb">FaceBook Link</label>
						           	    	<input type="text" class="form-control" id="fb" name="fb" placeholder="FaceBook Link">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="tw">Twitter Link</label>
						           	    	<input type="text" class="form-control" id="tw" name="tw" placeholder="Twitter Link">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="li">Linkedin Link</label>
						           	    	<input type="text" class="form-control" id="li" name="li" placeholder="Linkedin Link">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="google">Google Link</label>
						           	    	<input type="text" class="form-control" id="google" name="google" placeholder="google">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="git">Github Link</label>
						           	    	<input type="text" class="form-control" id="git" name="git" placeholder="Github Link">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="bitbucket">Bitbucket Link</label>
						           	    	<input type="text" class="form-control" id="bitbucket" name="bitbucket" placeholder="Bitbucket Link">
						           	 	</div>
						           	</div>
                                    <div class="col-md-6" style="padding-top: 32px;">
		                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
		                                 <a role="button" class="btn btn-danger" href="{{ route('abouts.index') }}">Cancel</a>
		                            </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
@stop

