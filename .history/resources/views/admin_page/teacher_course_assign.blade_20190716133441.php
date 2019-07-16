@extends('layout_admin.main_container') @section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Course Assign
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#" class="active"> Course Assign</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h4>Student List</h4>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="">
                                <tr>
                                    <td>C0deEX/ST/01</td>
                                    <td>John Doe</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>1234567890</td>
                                    <td>Male</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Hooray!"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Hooray!"><i class="fa fa-check"></i></button>
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Hooray!"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                        <div class="box-group" id="accordion">
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title course_b_t">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Rank 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="box-body">
                                        <a href="javascript:void(0);" class="btn btn-app">
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-danger">
                                <div class="box-header with-border">
                                    <h4 class="box-title course_b_t">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Rank 2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-success">
                                <div class="box-header with-border">
                                    <h4 class="box-title course_b_t">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Rank 3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="box-body">
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-app" disabled>
                                            <i class="fa fa-graduation-cap"></i> Scratch With Javascript Basic
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>
@endsection