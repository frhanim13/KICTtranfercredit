@extends('admin.index')
@section('content')

<div class="content-wrapper">
<!-- /.card -->

                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List of student & university</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-striped">
                        <thead>
                          <tr>

                            <th>Matric ID</th>
                            <th>Name of University</th>
                            <th>Diploma Name</th>
                            <th>Reason</th>
                            <th>Year of Study</th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($review as $each)

                            <td>{{$each -> matric_id}}</td>
                            <td>{{$each -> nameUni}}</td>
                            <td>{{$each -> dipName}}</td>
                            <td>{{$each -> reason}}</td>
                            <td>{{$each -> yearStudy}}</td>
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
