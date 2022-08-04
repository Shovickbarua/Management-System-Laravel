@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('year.store')}}">
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Year<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Year" name="year_name" value="">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div>
</form>



@endsection