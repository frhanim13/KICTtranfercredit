@extends('student.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Previous University Information</h1>
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
          <div class="col-lg-10 mx-auto">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">

                <h3 class="card-title">Fill in Your Previous University Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/student/previous')}}" enctype="multipart/form-data" method="POST" >
              {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Name of Institution</label>
                            <input type="text" class="form-control" name= "nameUni"  id="nameUni" placeholder="Name of Institution"  >

                          </div>

                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Name of Diploma/Degree</label>
                            <input type="text" class="form-control"  name="dipName" id="dipName" placeholder="Name of Diploma/Degree"  >

                          </div>
                          <div class="form-group col-lg-6">
                            <label for="exampleInputPassword1">Reason For Leaving</label>
                            <input type="text" class="form-control"  name="reason" id="reason" placeholder="Reason For Leaving">

                          </div>
                          <div class="form-group col-lg-3">
                            <label for="exampleInputPassword1">Year of Study( ex. 2018-2023)</label>
                            <input type="text" class="form-control"  name="yearStudy"  id="yearStudy" placeholder="( ex. 2018-2023)">

                          </div>
                        </div>
                        <div class="row">
                            <input type="hidden" class="form-control" id="exampleInputPassword1"  name="user_id" id="amount" value="{{Auth::user()->user_id}}">
                            <input type="hidden" class="form-control" id="exampleInputPassword1"  name="matric_id" id="amount" value="{{Auth::user()->matric_id}}">
                            <div class="col-lg-6">
                                <label for="exampleInputFile">Academic Transcript</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name ="transcript" id="transcript">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>

                                </div>
                            </div>
                          <div class="form-group col-lg-3">
                            <label for="exampleInputPassword1">Highest Qualification (CGPA)</label>
                            <input type="text" class="form-control"  name="cgpa" id="cgpa" placeholder="(CGPA)" >

                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <!-- /.card-body -->




                  </div>
              </form>
            </div>
        </div>
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Your University History </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>

                            <th>University</th>
                            <th>Diploma/Degree Name</th>
                            <th>Reason Leave</th>
                            <th>Year Study</th>
                            <th>CGPA</th>
                            <th>Transcript</th>
                            <th>Action</th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($uni as $each)

                            <td>{{$each -> nameUni}}</td>
                            <td>{{$each -> dipName}}</td>

                            <td>{{$each -> reason}}</td>
                            <td>{{$each -> yearStudy}}</td>

                            <td>{{$each -> cgpa}}</td>
                            <td><a type="button" class="btn btn-block btn-primary" href="{{asset('transcript/'.$each->transcript)}}" ><i class="fa fa-eye" ></i> View</a></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('/student/edit/'.$each -> id)}}" class="btn btn-primary mr-1">Edit</a>
                                    <form id="delete-form" action="{{url('/student/delete/'.$each -> id)}}" method="get">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></button>
                                    </form>
                                </div>

                              </div></td>

                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
        </div>


          </div>
          <!--/.col (right) -->
        </div>
    </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>






@endsection
