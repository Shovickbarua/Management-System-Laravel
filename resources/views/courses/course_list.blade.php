@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Course</h3>
					<a href="add_sub.php" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i> Add Course </a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
							<th width="7%">Serial</th>
							<th>Course Name</th>
							<th>Department</th>
							<th>Course Code</th>
							<th width="10%">Action</th>
						  </tr>
						  </thead>
						  <tbody>
						  @foreach($courses as $course)
						  <tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $course->course_name }}</td>
							<td>{{ $course->dep_name }}</td>
							<td>{{ $course->course_code }}</td>
							<td>
                                    <a href="{{route('course.edit', $course->id)}}" class="btn shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>

                                    <form action="{{route('course.destroy',$course->id)}}" method="POST">
                                    @method('DELETE')    
                                    @csrf
                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
						  </tr>
						  @endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>



@endsection