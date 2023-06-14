@extends('admin.index')


@section('content')

<div class="content-wrapper">
    <!-- /.card -->
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Pending Application  </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table table-striped">
                            <thead>
                              <tr>

                                <th>Matric_id</th>
                                <th>Name </th>
                                <th>From University</th>
                                <th>Academic Transcript</th>
                                <th>Details</th>


                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                @foreach($pending as $each)

                                <td>{{$each -> matric_id}}</td>
                                <td>{{$each -> name}}</td>
                                <td>{{$each -> nameUni}}</td>

                                <td><a type="button" class="btn btn-block btn-primary" href="{{asset('transcript/'.$each->transcript)}}" ><i class="fa fa-eye" ></i> View</a></td>
                                <td> <a href="{{url('/admin/details/'.$each->matric_id)}}"><button type="button" class="btn btn-info"> see details</button> </a></td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>



@endsection
