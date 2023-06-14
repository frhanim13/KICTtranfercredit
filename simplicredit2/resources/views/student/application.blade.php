@extends('student.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Transfer Credit Form</h1>
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
            <div class="col-lg-5 ml-auto">
                <!-- general form elements -->
                <div class="card card-primary" style="height: 95%;">
                    <div class="card-header">

                        <h3 class="card-title">Fill in Your Details</h3>
                    </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <form action="{{url('/user/claim')}}" enctype="multipart/form-data" method="POST" >
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"  id="name" placeholder="Enter Name" value="{{Auth::user()->name}}" disabled>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" name="name" id="name" placeholder="Enter Name" value="{{Auth::user()->name}}" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Matric Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"  id="ic" placeholder="IC Number"  value="{{Auth::user()->matric_id}}" disabled>
                                <input type="hidden" class="form-control" id="exampleInputPassword1"  name="ic" id="ic" placeholder="IC Number"  value="{{Auth::user()->matric_id}}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telephone No</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"  id="tel" placeholder="Tel"value="{{Auth::user()->phone_no}}" disabled>
                                <input type="hidden" class="form-control" id="exampleInputPassword1"  name="tel" id="tel" placeholder="Tel"value="{{Auth::user()->phone_no}}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"  id="tel" placeholder="Tel"value="{{Auth::user()->email}}" disabled>
                                <input type="hidden" class="form-control" id="exampleInputPassword1"  name="tel" id="tel" placeholder="Tel"value="{{Auth::user()->email}}" >
                            </div>
                            <input type="hidden" class="form-control" id="exampleInputPassword1"  name="id" id="amount" value="{{Auth::user()->user_id}}">

                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-lg-5 mr-auto">
                <div class="card card-primary" style="height: 95%;">
                    <div class="card-header">

                    <h3 class="card-title">Course</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('/student/course')}}" enctype="multipart/form-data" method="POST" >
                    {{ csrf_field() }}
                    <div class="card-body">
                        @if ($totalUni >= 1)
                            <div class="form-group">
                                <label for="exampleInputEmail1">Course Code</label>
                                <input type="text" class="form-control" name= "courseCode"  id="nameUni" placeholder="Course Code"  >

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Course Title</label>
                                <input type="text" class="form-control"  name="courseTitle" id="dipName" placeholder="Course Title"  >

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Credit Hours</label>
                                <input type="text" class="form-control"  name="credit" id="reason" placeholder="Credit Hours">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Grade Obtained</label>
                                <input type="text" class="form-control"  name="grade"  id="yearStudy" placeholder="Grade Obtained">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Course Code (from IIUM)</label>
                                <input type="text" class="form-control"  name="cciium" id="cgpa" placeholder="Course Code (from IIUM)" >

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
                                <button type="submit" class="btn btn-primary mt-3 mb-32">Submit</button>
                            </div>
                        @else
                            <div class="alert alert-danger">
                                You have to fill in your previous university details in <b><a href="{{url('student/previous')}}">Previous University Information</a></b>
                            </div>
                        @endif

                        @if ($totalUni >= 1)


                        @endif
                    </div>
                    <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">


                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List Of Course(s) </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                              <tr>

                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Credit Hours</th>
                                <th>Grade Obtained</th>
                                <th>Course Code (IIUM)</th>
                                <th>Course Outline</th>
                                <th>Submitted at</th>
                                <th>Status</th>
                                <th>Action</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                @foreach($status as $each)

                                <td>{{$each -> courseCode}}</td>
                                <td>{{$each -> courseTitle}}</td>
                                <td>{{$each -> credit}}</td>
                                <td>{{$each -> grade}}</td>
                                <td>{{$each -> cciium}}</td>
                                <td><a type="button" class="btn btn-block btn-primary" href="{{asset('courseOutline/'.$each->courseOutline)}}" ><i class="fa fa-eye" ></i> View</a></td>
                                <td>{{$each -> created_at}}</td>
                                <td>{{$each -> status}}</td>
                                <td>
                                    @if ($each->status != "Under Review" && $each->status != "Approved" && $each->status != "Rejected")
                                    <div class="form-group">
                                        <form action="{{url('/admin/updateStatus')}}"  method="POST" >
                                    {{ csrf_field() }}
                                    <input type ="hidden" name="cid"  value="{{$each -> id}}">
                                    <a type="button" class="btn btn-block btn-info" href="{{url('/student/edit-action/'.$each->id)}}"><i class="fa fa-edit"></i> Edit</a>
                                    <a type="button" class="btn btn-block btn-danger" href="{{ url('/student/delete1/'.$each->id) }}" onclick="return confirm('Are you sure you want to delete this course?')"><i class="fa fa-trash"></i> Delete</a>
                                    @else
                                    <button type="button" class="btn btn-block btn-info" disabled><i class="fa fa-edit"></i> Edit</button>
                                    <button type="button" class="btn btn-block btn-danger" disabled><i class="fa fa-trash"></i> Delete</button>
                                    @endif

                                  </td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>







@endsection
