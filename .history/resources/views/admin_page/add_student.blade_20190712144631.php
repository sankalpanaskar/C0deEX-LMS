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
                            <a href="{{url('/role_list')}}" class="btn btn-success"><i class="fa fa-list"></i> Student List</a>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="callout callout-success">
                                        <h4 style="margin-bottom: 0;">Personal Informations</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date Of Birth</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="width: 100%;">Gender</label>
                                        <label>
                                          <input type="radio" name="r3" class="flat-red" checked>
                                          Male
                                        </label>
                                        <label>
                                          <input type="radio" name="r3" class="flat-red">
                                          Female
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alternate Contact No</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Password</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Re-Enter Password</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PO Box No</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" id="" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="callout callout-success">
                                        <h4 style="margin-bottom: 0;">Gurdian Details</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Phone</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Email</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Password</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Guardian Re-Enter Password</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter ">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="callout callout-success">
                                        <h4 style="margin-bottom: 0;">Course Selection</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Applying Session</label>
                                        <select class="form-control select2" style="width: 100%;">
                                              <option selected="selected">Select Session</option>
                                              <option>2018</option>
                                              <option>2019</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Batch</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Select Batch</option>
                                            <option>C0deEX-C1-01</option>
                                            <option>C0deEX-C2-02</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Course Type</label>
                                        <select class="form-control select2" style="width: 100%;" id="course_type">
                                            <option selected="selected">Select Course Type</option>
                                              @foreach($coursetype as $ct)
                                                <option value="{{$ct->id}}">{{$ct->course_type_name}}</option>
                                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Course</label>
                                        <select class="form-control select2" style="width: 100%;" disabled="disabled" id="course">
                                            <option selected="selected">Select Course</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Batch</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Assign Teacher</option>
                                            <option>John Doe</option>
                                            <option>Steven Doe</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="callout callout-success">
                                        <h4 style="margin-bottom: 0;">Course Selection</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Document(Multiple)</label>
                                        <input type="file" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
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