@extends('layout_admin.main_container')
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Online Apply Student List
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#" class="active">Applicant Student</a></li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Applicant Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Gender</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="">
                          @foreach($applicant as $index=>$app)
                        <tr id="{{$app->id}}">
                          <td>{{$index+1}}</td>
                          <td>{{$app->fullname}}</td>
                          <td>{{$app->email}}</td>
                          <td>{{$app->phone}}</td>
                          <td>{{$app->gender}}</td>
                          <!--<td style="display:none">{{$app->address}}</td>-->
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-pencil-square-o"></i></button>
                              <button type="button" data-id="{{$app->id}}" class="btn btn-success btn-flat check"  data-target="#modal-default" data-toggle="modal"><i class="fa fa-eye"></i></button>
                              <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                            </div>
                          </td>
                        </tr>
                        @endforeach

                        </tbody>
                    <tfoot>

                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
    </div>

    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Applicant Details</h4>
              </div>
              <div class="modal-body">
                <table class="table table-bordered">
                  <tr>
                    <td>Applicant Name</td>
                    <td>:</td>
                    <td id="applicant_name"></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td id="applicant_email"></td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td id="applicant_phone"></td>
                  </tr>
                  <tr>
                    <td>DOB</td>
                    <td>:</td>
                    <td id="applicant_dob"></td>
                  </tr>
                  <tr>
                    <td>SEX</td>
                    <td>:</td>
                    <td id="applicant_sex"></td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td id="applicant_address"></td>
                  </tr>
                  <tr>
                    <td>State</td>
                    <td>:</td>
                    <td id="applicant_state"></td>
                  </tr>
                  <tr>
                    <td>District</td>
                    <td>:</td>
                    <td id="applicant_district"></td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td>:</td>
                    <td id="applicant_city"></td>
                  </tr>
                  <tr>
                    <td>Education Qualification</td>
                    <td>:</td>
                    <td id="applicant_qualification"></td>
                  </tr>
                  <tr>
                    <td>Course Type</td>
                    <td>:</td>
                    <td id="applicant_course_type"></td>
                  </tr>
                  <tr>
                    <td>Course</td>
                    <td>:</td>
                    <td id="applicant_course"></td>
                  </tr>
                  <tr>
                    <td>Message</td>
                    <td>:</td>
                    <td id="applicant_message"></td>
                  </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.js"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
        $('.check').click(function(){

          //alert($(this).data('id'));
          var u="{{url('/applicant_fetch')}}/"+$(this).data('id');

            $.getJSON
            (
                u,
                function(res)
                {
                  console.log(res);

                  res[0].forEach(function(data)
                  {
                  $('#applicant_name').text(data.fullname);
                  $('#applicant_email').text(data.email);
                  $('#applicant_phone').text(data.phone);
                  $('#applicant_dob').text(data.dob);
                  $('#applicant_sex').text(data.gender);
                  $('#applicant_address').text(data.address);
                  $('#applicant_state').text(data.states.state_name);
                  $('#applicant_district').text(data.districts.district_name);
                  $('#applicant_city').text(data.city);
                  $('#applicant_qualification').text(data.education);
                  $('#applicant_course_type').text(res[1][0].course_type.course_type_name);
                  $('#applicant_course').text(res[1][0].course_name);
                  $('#applicant_message').text(data.msg);


                 });

                }
            )


          //alert($("#3").find("td:eq(3)").text());
        })
      })
    </script>
@endsection
