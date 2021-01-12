@extends('themes.app.pages')

@section('content')
  <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body"> 
                       <h1 class="card-title">Testimonial
                        
                        <a class="btn btn-primary pull-right" href="{{ route('testimonials.create') }}" type="button">Add New Testimonial</a>
                  
                        </h1>                  
                       <div class="clearfix"></div>
                       <hr>
                     <div class="table-responsive">
                          @if ($message = Session::get('delete'))
                               <div class="alert alert-danger alert-block">
                                   <button type="button" class="close" data-dismiss="alert">×</button> 
                                   <strong>{{ $message }}</strong>
                               </div>
                               @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th width="10%">Name</th>
                                      <th width="50%">Description</th>
                                      <th width="20%">Photo</th>
                                      <th width="10%">Status</th>
                                      <th width="5%">Edit</th>
                                      <th width="5%">Delete</th>
                                    </tr>
                                </thead>
                                 @if($testimonials)
                               <tbody>
                                 @foreach($testimonials as $key=>$testimonial)
                                   <tr>
                                     <td>{{ ++$key }}</td>
                                     <td>{{ $testimonial->name }}</td>
                                     <td>{{ $testimonial->description }}</td>
                                     <td><img src="/images/{{ $testimonial->image }}" width="100" height="60">
                                     {{-- <img width="100" height="60" src="{{ asset('public/images/'.$testimonial->image ) }}"> --}}
                                      </td>
      
                                       <td>
                                        @if($testimonial->status == 0)
                                          <span>Approve</span>
                                        @else
                                          <span>Unapprove</span>
                                        @endif    
                                      </td>
                                      <td>
                                       <a role="button" href="{{ route('testimonials.edit',['testimonial' => $testimonial->id]) }}"><i class="fa fa-edit icon-size"></i></i></a>
                                      </td>
                                      <td>
                                       <form action="{{ route('testimonials.destroy',['testimonial' => $testimonial->id]) }}" method="post" enctype="multipart/form-data">
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
        <!-- End PAge Content -->
    </div>
@stop 