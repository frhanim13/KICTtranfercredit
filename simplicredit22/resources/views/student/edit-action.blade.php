@extends('student.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Edit Transfer Credit Form</h1>
          </div>


          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Transfer Credit Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">

             <!-- general form elements -->
             <div class="card card-primary">
                <div class="card-header">

                  <h3 class="card-title">Course</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @foreach($status as $each)
                <form action="{{url('/student/editcourse')}}" enctype="multipart/form-data" method="POST" >
                {{ csrf_field() }}
                <input type ="hidden" name="cid"  value="{{$each -> id}}">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Code</label>
                      <input type="text" class="form-control" name= "courseCode"  id="nameUni" placeholder="Course Code" value="{{$each -> courseCode}}" >

                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Course Title</label>
                      <input type="text" class="form-control"  name="courseTitle" id="dipName" placeholder="Course Title" value="{{$each -> courseTitle}}"  >

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Credit Hours</label>
                      <input type="text" class="form-control"  name="credit" id="reason" placeholder="Credit Hours" value="{{$each -> credit}}" >

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Grade Obtained</label>
                      <input type="text" class="form-control"  name="grade"  id="yearStudy" placeholder="Grade Obtained" value="{{$each -> grade}}" >

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Course Code (from IIUM)</label>
                      <input type="text" class="form-control"  name="cciium" id="cgpa" placeholder="Course Code (from IIUM)" value="{{$each -> cciium}}" >

                    </div>
                   <input type="hidden" class="form-control" id="exampleInputPassword1"  name="user_id" id="amount" value="{{Auth::user()->id}}">
                   <input type="hidden" class="form-control" id="exampleInputPassword1"  name="matric_id" id="amount" value="{{Auth::user()->matric_id}}">
                      <label for="exampleInputFile">Upload Course Outline</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"  name ="courseOutline" id="transcript">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>

                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->



                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @endforeach
              </div>
        </div>
    </div>
</div>


              @endsection
