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
          <div class="col-md-6">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">

                <h3 class="card-title">Fill in Your Previous University Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/student/edit/'.$uni -> id)}}" enctype="multipart/form-data" method="POST" >
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of Institution</label>
                    <input type="text" value="{{$uni -> nameUni}}" class="form-control" name= "nameUni"  id="nameUni" placeholder="Name of Institution"  >

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Name of Diploma/Degree</label>
                    <input type="text" value="{{$uni -> dipName}}" class="form-control"  name="dipName" id="dipName" placeholder="Name of Diploma/Degree"  >

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Reason For Leaving</label>
                    <input type="text" value="{{$uni -> reason}}" class="form-control"  name="reason" id="reason" placeholder="Reason For Leaving">

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year of Study( ex. 2018-2023)</label>
                    <input type="text" value="{{$uni -> yearStudy}}" class="form-control"  name="yearStudy"  id="yearStudy" placeholder="( ex. 2018-2023)">

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Highest Qualification (CGPA)</label>
                    <input type="text" value="{{$uni -> cgpa}}" class="form-control"  name="cgpa" id="cgpa" placeholder="(CGPA)" >

                  </div>
                 <input type="hidden" class="form-control" id="exampleInputPassword1"  name="user_id" id="amount" value="{{Auth::user()->user_id}}">
                 <input type="hidden" class="form-control" id="exampleInputPassword1"  name="matric_id" id="amount" value="{{Auth::user()->matric_id}}">
                 <input type="hidden" class="form-control" id="exampleInputPassword1"  name="oldTranscript" id="amount" value="{{$uni->transcript}}">
                    <label for="exampleInputFile">Academic Transcript</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  name ="transcript" id="transcript">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>

                    </div>
                    <small><a type="button" href="{{asset('transcript/'.$uni->transcript)}}">View current file</a></small>
                  </div>

                </div>





                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                    <a href="{{url('/student/previous')}}" class="btn btn-secondary">Back</a>
                  </div>
              </form>
            </div>
        </div>
        <br>


                </div>
          </div>

        </div>
    </div>

      </div>
    </section>

  </div>






@endsection
