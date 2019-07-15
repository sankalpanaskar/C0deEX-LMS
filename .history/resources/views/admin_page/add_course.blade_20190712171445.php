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