@extends('layout.master')

@section('content')


			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Semester</h3>
					<a href="{{route('semester.create')}}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Department </a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
						  <thead>
							<tr>
								<th width="7%">Serial</th>
								<th>Name</th>
								<th width="10%">Action</th>
							</tr>
						  </thead>
						  <tbody>
						  @foreach($semesters as $semester)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$semester->sem_name}}</td>
								<td>
									<div class="d-flex">
										<a href="{{route('semester.edit', $semester->id)}}" class="btn shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>

										<form action="{{route('semester.destroy',$semester->id)}}" method="POST">
										@method('DELETE')    
										@csrf
										<button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
										</form>
									</div>
                                </td>	
							</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>


@endsection