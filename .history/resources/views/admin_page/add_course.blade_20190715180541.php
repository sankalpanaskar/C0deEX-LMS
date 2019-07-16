@extends('layout_admin.main_container') @section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Course
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Course Details</a></li>
            <li class="active">Add Course</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="" method="">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header">
                            <a href="{{url('/rank_list')}}" class="btn btn-success"><i class="fa fa-list"></i> Course List</a>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Course Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Duration</label>
                                        <input type="text" class="form-control" placeholder="Enter Course Duration">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Link</label>
                                        <input type="text" class="form-control" placeholder="Enter Course Link">
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
    // $('#course_type').change(function() {

    //     if ($('#course_type').val() == '') {
    //         $('#course').attr('disabled', true);

    //         return true;
    //     }

    //     var u = "{{url('/course_fetch')}}/" + $('#course_type').val();

    //     $.getJSON(
    //         u,
    //         function(res) {
    //             $('#course').empty();
    //             $('#course').attr('disabled', false);
    //             $('#course').append($('<option>', {
    //                 value: '0',
    //                 text: "Select Course"
    //             }));
    //             res.forEach(function(data) {
    //                 $('#course').append($('<option>', {
    //                     value: data.id,
    //                     text: data.course_name
    //                 }));
    //             });

    //         }
    //     )


    // })
</script>
@endsection