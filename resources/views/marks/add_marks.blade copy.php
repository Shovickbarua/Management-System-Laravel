@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('addMarks.store')}}" enctype="multipart/form-data">
@csrf
<div class="form-row">
                <div class="form-group col-md-3">
                  <label for="dep_id">Department<font style="color:red">*</font></label>
                  <select class="form-control" id="department" name="department">
                      <option value="">--Select Department --</option>
                      @foreach($departments as $department)
                      <option value="{{$department->id}}">{{$department->dep_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                  <label>Course<font style="color:red">*</font></label>
                  <select class="form-control" id="course" name="course">
                    <option value="">--Select course --</option>
                    @foreach($courses as $course)
                      <option value="{{$course->id}}">{{$course->course_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="exam_type_id">Exam<font style="color:red">*</font></label>
                  <select class="form-control" id="shift_id" name="exam">
                      <option value="">--Select Exam --</option>
                      @foreach($exams as $exam)
                      <option value="{{$exam->id}}">{{$exam->exam_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4" style="padding-top:32px">
                    <a id="search" name="search" class="btn btn-primary btn-sm">Search</a>
                </div>
              </div><br>
            <!--  <div class="row d-none" id="marks-entry">
                  <div class="col-md-12">
                      <table class="table table-bordered table-striped dt-responsive" style="width: 100%;">
                        <thead>
                          <tr>
                            <th>ID No</th>
                            <th>Students Name</th>
                            <th>Department</th>
                            <th>Course</th>
                            <th>Marks</th>
                          </tr>
                        </thead>
                        <tbody id="marks-entry-tr">
                            @foreach($marks as $mark)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mark->stu_id}}</td>
                                <td>{{$mark->stuName}}</td>
                                <td>{{$mark->dep_name}}</td>
                                <td>{{$mark->course_name}}</td>
                                <td><input type="text"></td>
            
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <button type="submit" class="btn btn-success btn-sm" name="marks_entry">Submit</button>
                  </div>
              </div>-->
            </form>

 

@endsection