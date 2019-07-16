@extends('layout_admin.main_container') @section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Course Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#" class="active"> Course</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h4>Course</h4>
                    </div>
                    <div class="box-body">
                        <iframe src="https://codecombat.com/play" frameborder="0" width="100%" height="100%"></iframe>
                    </div>
                </div>

            </div>
        </div>
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
@endsection @section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.js"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
        $('.check').click(function() {

            //alert($(this).data('id'));
            var u = "{{url('/applicant_fetch')}}/" + $(this).data('id');

            $.getJSON(
                u,
                function(res) {
                    console.log(res);

                    res[0].forEach(function(data) {
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