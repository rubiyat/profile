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
                        <form action="{{ route('abouts.update', ['about' => $about->id]) }}" method="post" enctype="multipart/form-data">
                        	{{ csrf_field() }}{{ method_field('PATCH') }}
                            <div class="form-body">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Designation</label>
                                            <input type="text" name="designation" id="designation" class="form-control" placeholder="Software Engineer..." value="{{ $about->designation }}">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group has-danger">
                                            <label class="control-label">About My Profession</label>
                                            <textarea class="textarea_editor form-control" rows="15" name="about_me" placeholder="Enter text ..." style="height:200px">{{ $about->about_me }}</textarea>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                	<div class="col-md-6">
                                		<div class="form-group">
						           	    	<label for="profile_image">Profile Image</label><br>
						           	    	<img width="100" height="100" src="{{ asset('/images/'.$about->profile_image) }}" >
						           	    	{{-- <img width="250" height="269" style="border-radius: 50%;" src="{{ asset('public/images/'.$about->profile_image) }}" alt=""/> --}}<br>
						           	    	<input type="file" id="profile_image" name="profile_image">
						           	  	</div>
						            </div>
						            <div class="col-md-6">      	
						           	  	<div class="form-group">
						           	    	<label for="cv">Upload My Resume</label><br>
						           	    	<lable><embed src="{{ asset('/images/'.$about->cv) }}" type="application/pdf" height="100px" width="200px"></lable><br>
						           	    	<input type="file" id="cv" name="cv">
						           	  	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="address">Address</label>
						           	    	<input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $about->address }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="phone">Phone</label>
						           	    	<input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{ $about->phone }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="email">Email</label>
						           	    	<input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ $about->email }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	  	<div class="form-group">
						           	    	<label for="fb">FaceBook Link</label>
						           	    	<input type="text" class="form-control" id="fb" name="fb" placeholder="FaceBook Link" value="{{ $about->fb }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="tw">Twitter Link</label>
						           	    	<input type="text" class="form-control" id="tw" name="tw" placeholder="Twitter Link" value="{{ $about->tw }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="li">Linkedin Link</label>
						           	    	<input type="text" class="form-control" id="li" name="li" placeholder="Linkedin Link" value="{{ $about->li }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="google">Google Link</label>
						           	    	<input type="text" class="form-control" id="google" name="google" placeholder="google" value="{{ $about->google }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="git">Github Link</label>
						           	    	<input type="text" class="form-control" id="git" name="git" placeholder="Github Link" value="{{ $about->git }}">
						           	 	</div>
						           	</div>
						           	<div class="col-md-6">
						           	 	<div class="form-group">
						           	    	<label for="bitbucket">Bitbucket Link</label>
						           	    	<input type="text" class="form-control" id="bitbucket" name="bitbucket" placeholder="Bitbucket Link" value="{{ $about->bitbucket }}">
						           	 	</div>
						           	</div>
                                    <div class="col-md-6" style="padding-top: 32px;">
		                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Update</button>
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

@section('script')
	<!--stickey kit -->
    <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/lib/html5-editor/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('js/lib/html5-editor/bootstrap-wysihtml5.js') }}"></script>
    <script src="{{ asset('js/lib/html5-editor/wysihtml5-init.js') }}"></script>
@stop