@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Students</h3>
					<a href="add_student.php" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"></i>Add Student</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
                <th>ID No</th>
                <th>Year</th>
                <th>Department</th>
                <th>Semester</th>
                <th>Image</th>
                <th width="17%">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($students as $student)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$student->stuName}}</td>
									<td>{{$student->stu_id}}</td>
									<td>{{$student->year_name}}</td>
									<td>{{$student->dep_name}}</td>
									<td>{{$student->sem_name}}</td>
									<td><img src="{{Storage::url('app/students/'. $student->image)}} " style="height:150px;"/></td>
									<td><a href="{{route('student_des', $student->stu_id)}}" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i></a></td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection