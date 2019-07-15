@extends('layout_admin.main_container') @section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Student
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Student</a></li>
            <li class="active">Add Student</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="" method="">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Course Selection</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Re-Enter Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Course</label>
                                <select class="form-control select2" style="width: 100%;" disabled="disabled" id="course">
                                      <option selected="selected">Select Course</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Applying Session</label>
                                <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Select Session</option>
                                      <option>2018</option>
                                      <option>2019</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Batch</label>
                                <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Select Batch</option>
                                      <option>BPA-GD-01</option>
                                      <option>BPA-PH-01</option>
                                    </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection @section('js')
<script type="text/javascript">
    $('#state').change(function() {

        if ($('#state').val() == '') {
            $('#districts').attr('disabled', true);
            return true;
        }

        var u = "{{url('/district_fetch')}}/" + $('#state').val();

        $.getJSON(
            u,
            function(res) {
                $('#districts').empty();
                $('#districts').attr('disabled', false);
                $('#districts').append($('<option>', {
                    value: '0',
                    text: "Select District"
                }));
                res.forEach(function(data) {
                    $('#districts').append($('<option>', {
                        value: data.id,
                        text: data.district_name
                    }));
                });

            }
        )


    })
    $('#course_type').change(function() {

        if ($('#course_type').val() == '') {
            $('#course').attr('disabled', true);

            return true;
        }

        var u = "{{url('/course_fetch')}}/" + $('#course_type').val();

        $.getJSON(
            u,
            function(res) {
                $('#course').empty();
                $('#course').attr('disabled', false);
                $('#course').append($('<option>', {
                    value: '0',
                    text: "Select Course"
                }));
                res.forEach(function(data) {
                    $('#course').append($('<option>', {
                        value: data.id,
                        text: data.course_name
                    }));
                });

            }
        )


    })
</script>
@endsection