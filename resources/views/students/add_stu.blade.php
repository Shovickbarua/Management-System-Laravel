@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('student.store')}}" enctype="multipart/form-data">
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Student Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="stuName">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">Fathers Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="fName" placeholder="Father's Name" name="fName">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="mName">Mothers Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="mName" placeholder="Mother's Name" name="mName">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pNum">Mobile<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pNum">Email<font style="color:red">*</font></label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="adress">Address<font style="color:red">*</font></label>
                    <textarea class="form-control" id="adress" name="address" rows="2"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="gender">Select Gender<font style="color:red">*</font></label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">--Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="religion">Religion<font style="color:red">*</font></label>
                    <select name="religion" id="religion" class="form-control">
                        <option value="">--Select Religion--</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Cristian">Christian</option>
                        <option value="Buddhist">Buddhist</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dob">Date Of Birth<font style="color:red">*</font></label>
                    <input type="date" class="form-control singledatepicker" id="dob" name="dob" autocomplete="off">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="discount">Scholarship<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="discount" name="discount" autocomplete="off">
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="class_id">Select Semester<font style="color:red">*</font></label>
                    <select class="form-control" id="sem_id" name="sem_id">
                      <option value="">--Select Semester --</option>
                      @foreach($semesters as $semester)
                      <option value="{{$semester->id}}">{{$semester->sem_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="group_id">Select Department</label>
                    <select class="form-control" id="group_id" name="dep_id">
                      <option value="">--Select Department --</option>
                      @foreach($departments as $department)
                      <option value="{{$department->id}}">{{$department->dep_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="shift_id">Select Program</label>
                    <select class="form-control" id="shift_id" name="shift_id">
                      <option value="">--Select Program --</option>
                      @foreach($programs as $program)
                      <option value="{{$program->id}}">{{$program->shift_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="year_id">Select Program</label>
                    <select class="form-control" id="year_id" name="year_id">
                      <option value="">--Select Year --</option>
                      @foreach($years as $year)
                      <option value="{{$year->id}}">{{$year->year_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                      <label for="image">Image Upload</label>
                      <input type="file" class="form-control" id="image" name="image">
                  </div>
                  <div class="form-group col-md-4">
                        <img id="showImage" src="" style="width:100px;height:110px;border:1px solid #000;">
                  </div>
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="add_student">Save</button>
                </div>
              </div>
            </form>


@endsection