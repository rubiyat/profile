@extends('layouts.app.dashboard')

@section('content')
  <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                       <h3 class="card-title">Experience
                        
                        <a class="btn btn-primary float-right" href="{{ route('experiences.create') }}" type="button">Add Experience</a>
                  
                        </h3>                  
                       <div class="clearfix"></div>
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
                                      <th width="5%">#</th>
                                      <th width="20%">Comapny name</th>
                                      <th width="20%">Position</th>
                                      <th width="20%">Stat Date</th>
                                      <th width="20%">End Date</th>
                                      <th width="5%">Edit</th>
                                      <th width="5%">Delete</th>
                                    </tr>
                                </thead>
                                @if($experiences)
                                <tbody>
                                  @foreach($experiences as $key=>$experience)
                                    <tr>
                                      <td>{{ ++$key }}</td>
                                      <td>{{ $experience->company_name }}</td>
                                      <td>{{ $experience->position }}</td>
                                      <td>{{ $experience->star_date }}</td>
                                      <td>{{ $experience->end_date }}</td>
                                      <td>
                                        <a role="button" href="{{ route('experiences.edit',['experience' => $experience->id]) }}"><i class="fa fa-edit icon-size"></i></i></a>

                                       
                                      </td>
                                      <td>
                                        <form action="{{ route('experiences.destroy',['experience'=>$experience->id]) }}" method="post">
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