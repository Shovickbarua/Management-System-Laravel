@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
      <form id="myForm" method="POST"  action="{{route('addMarks.store')}}" enctype="multipart/form-data">
                  @csrf
				<div class="card">
				  <div class="card-header">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <h3 class="card-title">All Students</h3>
                </div>
        
                <div class="form-group col-md-4">
                  <select class="form-control" id="shift_id" name="exam_id[]">
                      <option value="">--Select Exam --</option>
                      @foreach($exams as $exam)
                      <option value="{{$exam->id}}">{{$exam->exam_name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <button type="submit" class="btn btn-success btn-sm float-right" name="marks_entry">Submit</button>
                </div>
            </div>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                  <th>ID No</th>
                  <th>Students Name</th>
                  <th>Marks</th>
						  </tr>
						  </thead>
						  <tbody>
                @foreach($data as $dt)
                      <tr>
                        <td name="stu_id[]">{{$dt->stu_id}}</td>
                        <td>{{$dt->stuName}}</td>
                        <td><input type="text" class="form-control" name="mark"></td>
                      </tr>
                @endforeach
						  </tbody>
						</table>
            
					</div>
         
				</div>
        </form>	
			</div>
		</div>
@endsection