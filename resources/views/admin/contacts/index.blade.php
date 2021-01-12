@extends('layouts.app.dashboard')

@section('content')
	<div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"> 
                       <h1 class="card-title">Message 
                        </h1>                  
                       <div class="clearfix"></div>
                       <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Message</th>
                                    </tr>
                                </thead>
                                @if($contacts)
                                <tbody>
                                    @foreach($contacts as $key=>$contacts)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $contacts->name }}</td>
                                        <td>{{ $contacts->email }}</td>
                                        <td>{{ $contacts->message }}</td>
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