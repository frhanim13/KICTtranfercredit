@extends('admin.index')
@section('content')

<div class="content-wrapper">
<!-- /.card -->

                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Details of Application from {{$matric_id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
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
                            @foreach($details as $each)

                            <td>{{$each -> courseCode}}</td>
                            <td>{{$each -> courseTitle}}</td>
                            <td>{{$each -> credit}}</td>
                            <td>{{$each -> grade}}</td>
                            <td>{{$each -> cciium}}</td>
                            <td><a type="button" class="btn btn-block btn-primary" href="{{asset('courseOutline/'.$each->courseOutline)}}" ><i class="fa fa-eye" ></i> View</a></td>
                            <td>{{$each -> created_at}}</td>
                            <td>{{$each -> status}}</td>
                            <td>  <div class="col-sm-8">
                                <!-- select -->
                                <div class="form-group">
                                <form action="{{url('/admin/updateStatus')}}"  method="POST" >
                        {{ csrf_field() }}
                            <input type ="hidden" name="cid"  value="{{$each -> id}}">
                                  <select name="status" class="form-control" >
                                    <option value ="Under Review">Under Review</option>
                                    <option value ="Rejected" >Approved</option>
                                    <option value ="Rejected" >Rejected</option>

                                  </select>
                                  <br>
                                  <div  class ="col-sm-8" id="div1"></div>
                                </div>
                              </td>
                              <td>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                              </form>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <script type="text/javascript">
                    function showfield(name){
                      if(name=='Rejected')document.getElementById('div1').innerHTML='Reason : <input type="text" name="reason" />';
                      else document.getElementById('div1').innerHTML='';
                    }
                    </script>
                  @endsection
