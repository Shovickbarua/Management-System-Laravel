@extends('layout.master')

@section('content')


<div class="form-row">
                <div class="form-group col-md-3">
                  <label for="dep_id">Department<font style="color:red">*</font></label>
                  <select class="form-control" id="department" name="department">
                      <option value="">--Select Department --</option>
                      @foreach($departments as $dept)
                      <option value="{{$dept->id}}">{{$dept->dep_name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                  <label>Course<font style="color:red">*</font></label>
                  <select class="form-control" id="course" name="course">
                    <option value="">--Select course --</option>
              
                  </select>
                </div>
                <div class="form-group col-md-3 " style="padding-top:32px" >
                    <button type="submit" id="search" name="search" class="btn btn-primary btn-sm ">Search</button>
                </div>
              </div>

 

@endsection
@section('scripts')
<script type="text/javascript">
  jQuery(document).ready(function()
  {
    jQuery('select[name="department"]').on('change',function(){
      var DepartmentID = jQuery(this).val();
      if(DepartmentID)
      {
        jQuery.ajax({
          url:'/getcourses/'+ DepartmentID,
          type: "GET",
          dataType:"json",
          success:function(data)
          {
            jQuery('select[name="course"]').empty();
            jQuery.each(data,function(key,value){
              $('select[name="course"]').append('<option value="'+ key +'">'+ value +'</option>');
            });
          }
        });
      }
      else
      {
        $('select[name="course"]').empty();
      }
    });
    
  });
</script>

<script type="text/javascript">
  $('#search').on("click",function(){
    var link = document.getElementById("course").value;

    $.ajax({
      url: window.location.href="/getData/"+link
    });
  });

</script>
@endsection