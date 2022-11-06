@extends('layouts.master')
@section('css')

@section('title')
{{ trans('main_trans.Grades') }}

@stop
@endsection
@section('page-header')
	<!-- breadcrumb -->
		<div class="page-title">
			<div class="row">
				<div class="col-sm-6">
					<h4 class="mb-0">  {{ trans('main_trans.Grades') }} </h4>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">{{ trans('main_trans.Dashboard') }}</a></li>
						<li class="breadcrumb-item active">{{ trans('main_trans.Grades') }}</li>
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
			<div class="card card-statistics h-100" style="min-height:480px;max-height:480px;">
				<div class="card-body">
				<div class="container-xl">
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-6">
									<h2>{{ trans('main_trans.Grades') }}</b></h2>
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ( $errors->all() as $error )
												<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
										@endif
								</div>
								<div class="col-sm-6">
									<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>{{trans('main_trans.Add Grade')}}</span></a>
									<a id="btn_delete_all" href="#deleteEmployeeModal1" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>{{trans('main_trans.Delete All')}}</span></a>						

								</div>
							</div>
						</div>
						<table id="table" class="table table-striped table-hover">
							<thead>
								<tr>
									<th><input name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)" /></th>
									<th>{{ trans('main_trans.ID') }}</th>
									<th>{{ trans('main_trans.Name') }}</th>
									<th>{{ trans('main_trans.Notes') }}</th>
									<th>{{ trans('main_trans.Actions') }}</th>
								</tr>
							</thead>
							<tbody>
									<?php $i = 0; ?>
									@foreach ($Grades as $Grade)
									<tr>
										<?php $i++; ?>
										<td><input type="checkbox"  value="{{ $Grade->id }}" class="box1" ></td>

										<td> {{ $i }} </td>
										<td> {{ $Grade->Name }} </td>
										<td> {{ $Grade->Notes }} </td>
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
															<div class="row">
																<div class="col-lg-6">
																	<label>{{ trans('main_trans.Name') }}</label>
																	<input type="text" name="Name" class="form-control" value="{{ $Grade->getTranslation('Name', 'en') }}" required>
																	<input id="id" type="hidden" name="id" class="form-control" value="{{ $Grade->id }}">
																</div>
																<div class="col-lg-6">
																	<label>{{ trans('main_trans.Name_en') }}</label>
																	<input type="text" name="Name_en" class="form-control" value="{{ $Grade->getTranslation('Name', 'ar') }}" required>
																</div>
															</div>
														</div>
						
															<div class="form-group">
																<label>{{ trans('main_trans.Notes') }}</label>
																<textarea  name="Notes" row="5" class="form-control">{{ $Grade->Notes }}</textarea>
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
															<p>{{ trans('main_trans.Are you sure you want to delete these Records?') }} </p>
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
								<div class="row">
									<div class="col-lg-6">
									<label>{{ trans('main_trans.Name') }}</label>
									<input type="text" name="Name" class="form-control" required>
									</div>
									<div class="col-lg-6">
									<label>{{ trans( 'main_trans.Name_en') }}</label>
									<input type="text" name="Name_en" class="form-control" required>
									</div>
								</div>
								
								</div>
				
								<div class="form-group">
									<label>{{ trans('main_trans.Notes') }}</label>
									<textarea  name="Notes" row="5" class="form-control"></textarea>
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
			<!-- Delete Modal HTML -->
			<div id="deleteEmployeeModal1" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<form action="{{route('grads_delete_all')}}" method="post">
							{{ method_field('Delete') }}
										@csrf
								
								<div class="modal-header">						
									<h4 class="modal-title">{{trans('main_trans.Delete')}} {{trans('main_trans.Grades')}}</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
								<input class="text" type="text" id="delete_all_id" name="delete_all_id" value=''>
								<p>{{ trans('main_trans.Are you sure you want to delete these Records?') }} </p>
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="{{trans('main_trans.Cancel')}}">
									<input type="submit" class="btn btn-danger" value="{{trans('main_trans.Delete')}}">
								</div>
							</form>
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

<script type="text/javascript">
    $(function() {
        $("#btn_delete_all").click(function() {
            var selected = new Array();
            $("#table input[type=checkbox]:checked").each(function() {
                selected.push(this.value);
            });

            if (selected.length > 0) {
				$('#deleteEmployeeModal1').modal('show')
				$('input[id="delete_all_id"]').val(selected);
            }
        });
    });

</script>

@endsection
