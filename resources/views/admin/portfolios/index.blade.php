@extends('layouts.app.dashboard')

@section('content')
  <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                       <h1 class="card-title">Portfolio
                        
                        <a class="btn btn-primary float-right" href="{{ route('portfolios.create') }}" type="button">Add Portfolio</a>
                  
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
                                      <th>Project Type</th>
                                      <th>Project Name</th>
                                      <th>Photo</th>
                                      <th>URl</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                </thead>
                               @if($portfolios)
                               <tbody>
                                 @foreach($portfolios as $key=>$portfolio)
                                   <tr>
                                     <td>{{ ++$key }}</td>
                                     <td>{{ $portfolio->name }}</td>
                                     <td>{{ $portfolio->project_type }}</td>
                                     <td><img src="/images/{{ $portfolio->photo }}" width="100" height="60"></td>
                                     <td>{{ $portfolio->url }}</td>
                                     <td>
                                       <a role="button" href="{{ route('portfolios.edit',['portfolio' => $portfolio->id]) }}"><i class="fa fa-edit icon-size"></i></i></a>
                                      </td>
                                      <td>                
                                       <form action="{{ route('portfolios.destroy',['portfolio'=>$portfolio->id]) }}" method="post">
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