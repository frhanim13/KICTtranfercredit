@extends('student.index')
@section('content')
<script src="{{ asset('js/pdfGenerator.js') }}"></script>

<div class="content-wrapper">
<!-- /.card -->

                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Completed</h3>
                    </div>
                    <!-- /.card-header -->
                    <div id="table">
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
                            <th><a type="button" class="btn btn-block btn-primary" onclick="createPDF()" id="btPrint"></i>Generate Letter</a></th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($complete as $each)

                            <td>{{$each -> courseCode}}</td>
                            <td>{{$each -> courseTitle}}</td>
                            <td>{{$each -> credit}}</td>
                            <td>{{$each -> grade}}</td>
                            <td>{{$each -> cciium}}</td>
                            <td><a type="button" class="btn btn-block btn-primary" href="{{asset('courseOutline/'.$each->courseOutline)}}" ><i class="fa fa-eye" ></i> View</a></td>
                            <td>{{$each -> created_at}}</td>
                            <td>{{$each -> status}}</td>

                                  <br>
                                  <div  class ="col-sm-8" id="div1"></div>
                                </div>
                              </td>
                              <td>

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
            </div>
                <script type="text/javascript">
                    function showfield(name){
                      if(name=='Rejected')document.getElementById('div1').innerHTML='Reason : <input type="text" name="reason" />';
                      else document.getElementById('div1').innerHTML='';
                    }
                </script>

                <script>
                    function createPDF() {
                    var sTable = document.getElementById('table').innerHTML;

                    var style = "<style>";
                    style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.


    }


</script>

                @endsection
