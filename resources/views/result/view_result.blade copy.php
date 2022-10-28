@extends('layout.master')

@section('content')

<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">Student Marksheet</h3>
                      </div><!-- /.card-header -->
                      <div class="card-body">
					  <button type="button" onclick="printDiv()">Print</button>
                         <div style="border:2px solid; padding:7px;" id="marksheet">
                              <div class="row">
                                   <div style="float: right" class="col-md-2 text-center">
                                   <img src="" style="width:100px;height:110px;border:1px solid #000;">
                                   </div>
                                   <div class="col-md-2"></div>
                                   <div class="col-md-4 text-center" style="float: left;">
                                        <h4><strong>East Delta University</strong></h4>
                                        <h6><strong>Chittagong</strong></h6>
                                        <h5><strong><u><i>Academic Transcript</i></u></strong></h5>
                                   </div>
                              </div><!-- /.row-->
                              <div class="col-md-12">
                                   <hr style="border:solid 1px; width:100%;color:#ddd;margin-bottom:0px;">
            
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <table border="1" width="100%" cellpadding="9" cellspacing="2">
                                            
                                             <tr>
                                                  <td width="50%">Student ID</td>
                                                  <td width="50%">{{$data->stuName}}</td>
                                             </tr>
                                             <tr>
                                                  <td width="50%">Name</td>
                                                  <td width="50%"></td>
                                             </tr>
                                             <tr>
                                                  <td width="50%">Department</td>
                                                  <td width="50%"></td>
                                             </tr>
                                             <tr>
                                                  <td width="50%">Semester</td>
                                                  <td width="50%"></td>
                                             </tr>
                                             <tr>
                                                  <td width="50%">Joining Year</td>
                                                  <td width="50%"></td>
                                             </tr>
                                             <tr>
                                                  <td width="50%">Date of Birth</td>
                                                  <td width="50%"></td>
                                             </tr>
                                            
                                        </table>
                                   </div>
                                   <div class="col-md-6">
                                        <table border="1" width="100%" cellpadding="1" cellspacing="1" class="text-center">
                                            <thead>
                                                  <tr>
                                                       <th>Letter Grade</th>
                                                       <th>Letter Interval</th>
                                                       <th>Grade Point</th>
                                                  </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>A</td>
                                                    <td>93-100</td>
                                                    <td>4.00</td>
                                                </tr>
                                                <tr>
                                                    <td>A-</td>
                                                    <td>90-92</td>
                                                    <td>3.70</td></td>
                                                  </tr>
                                                <tr>
                                                    <td>B+</td>
                                                    <td>87-89</td>
                                                    <td>3.30</td>
                                                  </tr>
                                                <tr>
                                                    <td>B</td>
                                                    <td>83-86</td>
                                                    <td>3.00</td>
                                                </tr>
                                                <tr>
                                                    <td>B-</td>
                                                    <td>80-82</td>
                                                    <td>2.70</td>
                                                </tr>
                                                <tr>
                                                    <td>C+</td>
                                                    <td>77-79</td>
                                                    <td>2.30</td>
                                                </tr>
                                                <tr>
                                                    <td>C</td>
                                                    <td>73-76</td>
                                                    <td>2.00</td>
                                                </tr>
                                                <tr>
                                                    <td>C-</td>
                                                    <td>70-72</td>
                                                    <td>1.70</td>
                                                </tr>
                                                <tr>
                                                       <td>D+</td>
                                                       <td>67-69</td>
                                                       <td>1.30</td>
                                                 </tr>
                                                 <tr>
                                                       <td>D</td>
                                                       <td>60-66</td>
                                                       <td>1.00</td>
                                                 </tr>
                                                  <tr>
                                                       <td>F</td>
                                                       <td>0-59</td>
                                                       <td>0.00</td>
                                                  </tr>
									</tbody>
                                        </table>
                                   </div>
                              </div><br><!--/row-->
                              <div class="row">
                                   <div class="col-md-12">
                                        <table border="1" width="100%" cellpadding="1" cellspacing="1" class="text-center">
                                             <thead>
                                                  <tr>
                                                       <th class="text-center">Serial</th>
                                                       <th class="text-center">Course</th>
                                                       <th class="text-center">Full Marks</th>
                                                       <th class="text-center">Get Marks</th>
                                                       <th class="text-center">Letter Grade</th>
                                                       <th class="text-center">Grade Point</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             
                                             
                                             </tbody>
                                        </table>
                                   </div>
                              </div></br>
                              <div class="row">
                                   <div class="col-md-12">
                                        <table border="1" width="100%" cellpadding="1" cellspacing="1" class="text-center">
                                                  <tr>
                                                       <td width="50%"><strong>Total Marks With Fraction</strong></td>
                                                       <td width="50%">></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div><br>
                              <div class="row">
                                   <div class="col-md-12">
                                        <table border="1" width="100%" cellpadding="1" cellspacing="1" class="text-center">
                                             <tbody>
                                                  <tr>
                                                       <td width="50%"><strong>Grade Point Average</strong></td>
                                                       <td width="50%">
                                                         
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                              </div></br>
                              <div class="row">
                                   <div class="col-md-4">
                                        <hr style="border:1px solid;width:60%;color:#000;margin-bottom:0px;">
                                        <p class="text-center">Faculty</p>
                                   </div>
                                   <div class="col-md-4">
                                        <hr style="border:1px solid;width:60%;color:#000;margin-bottom:0px;">
                                        <p class="text-center">Student</p>
                                   </div>
                                   <div class="col-md-4">
                                        <hr style="border:1px solid;width:60%;color:#000;margin-bottom:0px;">
                                        <p class="text-center">Proctor</p>
                                   </div>
                              </div>
                         </div><!-- /.Border Div -->
                      </div><!-- /.card Body-->
				</div><!-- /.card -->
			</div>
		</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  <!-- /.content-wrapper -->


@endsection