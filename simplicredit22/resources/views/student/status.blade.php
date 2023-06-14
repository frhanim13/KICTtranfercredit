@extends('student.index')
@section('content')

<div class="content-wrapper">
<!-- /.card -->
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Your  Course Application </h3>
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
                            <td>{{$each -> courseOutline}}</td>
                            <td>{{$each -> created_at}}</td>
                            <td>{{$each -> status}}</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                  @endsection
