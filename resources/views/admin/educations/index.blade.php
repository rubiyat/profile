@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                        <h3 class="card-title">Education Details
                        <a class="btn btn-primary float-right" href="{{ route('educations.create') }}" type="button">Add Education</a>
                        <div class="clearfix"></div>
                        </h3>
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
                                      <th width="20%">Inistitute Name</th>
                                      <th width="15%">Board Name</th>
                                      <th width="25%">Certificate</th>
                                      <th width="20%">Result</th>
                                      <th width="20%">Session</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                </thead>
                                @if($educations)
                                <tbody>
                                    @foreach($educations as $key=>$education)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $education->inistitute_name }}</td>
                                        <td>{{ $education->board_name }}</td>
                                        <td>{{ $education->certificate }}</td>
                                        <td>{{ $education->result }}</td>
                                        <td>{{ $education->session }}</td>
                                        <td>
                                            <a role="button" href="{{ route('educations.edit',['education' => $education->id]) }}"><i class="fa fa-edit icon-size"></i></i></a>

                                        </td>
                                        <td>
                                            
                                            <form action="{{ route('educations.destroy',['education'=>$education->id]) }}" method="post">
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