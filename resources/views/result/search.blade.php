@extends('layout.master')

@section('content')


  <form id="myForm" method="GET"  action="{{route('result.index')}}" enctype="multipart/form-data">

        <div class="form-row ">
                <div class="form-group col-md-3">
                <label>ID NO<font style="color:red">*</font></label>
                  <input type="text" class="form-control" name="stu_id">
                </div>
                <div class="form-group col-md-3">
                  <label>Department<font style="color:red">*</font></label>
                  <select class="form-control" id="course" name="dep_id">
                    <option value="">--Select department --</option>
                    @foreach($departments as $department)
                      <option value="{{$department->id}}">{{$department->dep_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-4" style="padding-top:32px">
                    <button type="submit" id="search" name="search" class="btn btn-primary btn-sm">Search</button>
                </div>
              </div>
            </form>
    <div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Students</h3>
				  </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
						  <thead>
                <tr>
                    <th>ID No</th>
                    <th>Students Name</th>
                    <th>Department</th>
                    <th>Programs</th>
                    <th>Action</th>
                </tr>
						  </thead>
						  <tbody>
                @foreach($students as $stu)
                      <tr>
                        <td>{{$stu->stu_id}}</td>
                        <td>{{$stu->stuName}}</td>
                        <td>{{$stu->dep_name}}</td>
                        <td>{{$stu->shift_name}}</td>
                        <td><a href="{{route('view_result',$stu->stu_id)}}" class="btn btn-primary btn-sm">View Result</a></td>
                        
                      </tr>
                @endforeach
						  </tbody>
						</table>
					</div>
        </div>
			</div>
		</div>


@endsection