@extends('admin::home')
@section('body')
	 <div class="row">
        <div class="col-xs-12">
	       <div class="row-fluid">
		        <div class="span6 ">
		          <h2>Assignment Type</h2>
		        </div>
		        <div class="span6">
		          <ul class="breadcrumb pull-right">
		            <li><a href="{{url('admin')}}">Admin</a> <span class="divider">/</span></li>
		            <li class="active">Assignment Type</li>
		          </ul>
		        </div>
	      </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
                <hr>
    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ url('price/assignment/add')}}"><button  class="btn btn-primary">Add</button></a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    	<div class="row">
                                    	
                                    	<div class="col-sm-6">
                                    		
                                    		</div>
                                    		</div>
                                    		<div class="row"><div class="col-sm-12">
                                        <form method="POST" action="http://localhost/recruitment/public/notification/%7Bnotification%7D" accept-charset="UTF-8" class="navbar-form"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="DsbuEOpguqJpGdEq4vomRw8dlZ7mfPGRNXmuEMw8">                             
                                        <input type="hidden" name="_token" value="{csrf_toeken()}"> 
                                       
                                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                                <th> S.N.</th>
                                            	<th>Name</th>
                                            	<th>Status</th>
                                                <th>Date</th>
                                            	<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if(count($assignmentTypes) > 0)
                                          	@foreach($assignmentTypes as $index => $assignmentType)
											<tr class="gradeA odd" role="row">
	                                           <td>{{$index + 1 }} <input name="email[]" type="checkbox" value="2"></td>
	                                           <td>{{$assignmentType->name}}</td>
	                                           <td>{{{ ($assignmentType->status) ? 'Active' : 'Inactive' }}}</td>
	                                           <td>{{date('Y-m-d',strtotime($assignmentType->created_at))}}</td>
	                                           <td>
	                                            <a href="#"><button type="button" class="btn-xs btn-info">view</button></a>
	                                            
	                                                 <input class="btn-xs btn-danger" type="submit" value="Delete">
	                                                
	                                              </td>
	                                        </tr>
                                          	@endforeach
                                          @else
                                          	<tr>
                                          		<td colspan="5"> No Assignment Added Yet!</td>
                                          	</tr>
                                          @endif                                                                               <!---->
                                        
                                        
                                                                                                                         </tbody>
                                    </table>
                                     <input class="btn-xs btn-danger" type="submit" value="Delete"> 
                                        </form>
                                    </div>
                                    </div>
                                    <!-- <div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 50 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div>
                                    </div> -->
                                    </div>
                                </div>
                                <!-- /.table-responsive -->
                             
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
@endsection