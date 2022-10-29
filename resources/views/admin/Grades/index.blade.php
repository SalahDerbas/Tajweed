@extends('layouts.master')
@section('css')

@section('title')
    Grades
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('main_trans.Grades')}} </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">{{trans('main_trans.Dashboard')}}</a></li>
                <li class="breadcrumb-item active">{{trans('main_trans.Grades')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
            <div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>{{trans('main_trans.Grades')}}</b></h2>
						@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>{{trans('main_trans.Add Grade')}}</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>{{trans('main_trans.Delete All')}}</span></a>						

					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Notes</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				    <?php $i = 0; ?>
                    @foreach ($Grades as $Grade)
					<tr>
					 <?php $i++; ?>
						<td>{{ $i }}</td>
						<td>{{$Grade->Name}}</td>
						<td>{{$Grade->Notes}}</td>
						<td>
							<a href="#editEmployeeModal{{ $Grade->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal{{ $Grade->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					
					<!-- Edit Modal HTML -->
                        <div id="editEmployeeModal{{ $Grade->id }}" class="modal fade">
                        	<div class="modal-dialog">
                        		<div class="modal-content">
                        			<form action="{{ route('Grades.update' , 'test') }}" method="post" enctype="multipart/form-data" >
                                    {{ method_field('patch') }}
                                                @csrf
                        				<div class="modal-header">						
                        					<h4 class="modal-title">{{trans('main_trans.Update')}} {{trans('main_trans.Grades')}}</h4>
                        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        				</div>
                        				<div class="modal-body">					
                        					<div class="form-group">
                        						<label>Name</label>
                        						<input type="text" name="Name" class="form-control" value="{{ $Grade->getTranslation('Name', 'en') }}" required>
                        						<input id="id" type="hidden" name="id" class="form-control" value="{{ $Grade->id }}">
                        					</div>
                                            <div class="form-group">
                        						<label>Name_en</label>
                        						<input type="text" name="Name_en" class="form-control" value="{{ $Grade->getTranslation('Name', 'ar') }}" required>
                        					</div>
                        					<div class="form-group">
                        						<label>Notes</label>
                        						<input type="text" name="Notes" value="{{ $Grade->Notes }}" class="form-control" required>
                        					</div>
                        				</div>
                        				<div class="modal-footer">
                        					<input type="button" class="btn btn-default" data-dismiss="modal" value="{{trans('main_trans.Cancel')}}">
                        					<input type="submit" class="btn btn-info" value="{{trans('main_trans.Save')}}">
                        				</div>
                        			</form>
                        		</div>
                        	</div>
                        </div>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal{{ $Grade->id }}" class="modal fade">
                        	<div class="modal-dialog">
                        		<div class="modal-content">
                        			<form action="{{route('Grades.destroy' , 'test')}}" method="post">
                                    {{ method_field('Delete') }}
                                                @csrf
                        			    
                        				<div class="modal-header">						
                        					<h4 class="modal-title">{{trans('main_trans.Delete')}} {{trans('main_trans.Grades')}}</h4>
                        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        				</div>
                        				<div class="modal-body">
                        				    <input id="id" type="hidden" name="id" class="form-control"
                                                                               value="{{ $Grade->id }}">					
                        					<!-- <p>Are you sure you want to delete these Records?</p>
                        					<p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        				</div>
                        				<div class="modal-footer">
                        					<input type="button" class="btn btn-default" data-dismiss="modal" value="{{trans('main_trans.Cancel')}}">
                        					<input type="submit" class="btn btn-danger" value="{{trans('main_trans.Delete')}}">
                        				</div>
                        			</form>
                        		</div>
                        	</div>
                        </div>


	                
	                @endforeach

				</tbody>
			</table>
		</div>
	</div>        
</div>

<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ route('Grades.store') }}"  enctype="multipart/form-data" method="POST">
			    @csrf
				<div class="modal-header">						
					<h4 class="modal-title">{{trans('main_trans.Add')}} {{trans('main_trans.Grades')}}</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="Name" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Name_en</label>
						<input type="text" name="Name_en" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Notes</label>
						<input type="text" name="Notes"  class="form-control" required>
					</div>
				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="{{trans('main_trans.Cancel')}}">
					<input type="submit" class="btn btn-success" value="{{trans('main_trans.Add')}}">
				</div>
			</form>
		</div>
	</div>
</div>


  




</div>
</div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')


@endsection
