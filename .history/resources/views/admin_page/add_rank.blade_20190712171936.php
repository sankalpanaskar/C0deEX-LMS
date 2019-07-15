@extends('layout_admin.main_container') @section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Rank
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Course Details</a></li>
            <li class="active">Add Rank</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="" method="">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header">
                            <a href="{{url('/rank_list')}}" class="btn btn-success"><i class="fa fa-list"></i> Rank List</a>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rank Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Rank Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Course Add To Rank</label>
                                        <select class="form-control select2" style="width: 100%;" multiple>
                                            <option value="0" disabled>Choose Course</option>
                                            <option value="1">Scratch 1</option>
                                            <option value="2">Scratch 2</option>
                                            <option value="1">Scratch 3</option>
                                            <option value="2">Scratch 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" class="form-control" placeholder="Enter Rank Description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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