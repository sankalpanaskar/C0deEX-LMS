<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C0deEX-LMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="{{asset('assets_admin/img/favicon.png')}}" type="image/x-icon">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets_admin/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets_admin/css/_all-skins.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('assets_admin/css/all.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css">
    <!-- bootstrap DataTable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="overlay" style="position: fixed;width: 100%;height: 100%;z-index: 100000;background: #0000009e;">
        <div style="position: fixed;left: 50%;top: 42%;">
            <svg width="130px" height="130px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple">
                <circle cx="50" cy="50" r="14.0334" fill="none" stroke="#fff" stroke-width="7">
                    <animate attributeName="r" calcMode="spline" values="0;40" keyTimes="0;1" dur="1" keySplines="0 0.2 0.8 1" begin="-0.5s" repeatCount="indefinite"></animate>
                    <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1" keySplines="0.2 0 0.8 1" begin="-0.5s" repeatCount="indefinite"></animate>
                </circle>
                <circle cx="50" cy="50" r="33.5671" fill="none" stroke="#2a93d5" stroke-width="7">
                    <animate attributeName="r" calcMode="spline" values="0;40" keyTimes="0;1" dur="1" keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite"></animate>
                    <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1" keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite"></animate>
                </circle>
            </svg>
        </div>
    </div>
    <div class="wrapper">

        @section('header') @include('layout_admin.header')
        <!-- Left side column. contains the logo and sidebar -->
        @section('side_menu') @include('layout_admin.side_menu') @yield('body')
        <!-- /.content-wrapper -->
        @section('footer') @include('layout_admin.footer')

        <!-- Control Sidebar -->
        @section('right_menu') @include('layout_admin.right_menu')
        <!-- /.control-sidebar -->

        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Slimscroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets_admin/js/adminlte.min.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets_admin/js/demo.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            document.onreadystatechange = function() {
                var state = document.readyState
                if (state == 'complete') {
                    setTimeout(function() {
                        document.getElementById('interactive');
                        //document.getElementById('loader12').style.display='none';
                        $(".overlay").css("display", "none");
                    }, 1000);
                }
            }
        });
    </script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Date range picker
            $('#reservation').daterangepicker()
                //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    format: 'MM/DD/YYYY h:mm A'
                })
                //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                })
                //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                })
                //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            })

            //Colorpicker
            // $('.my-colorpicker1').colorpicker()
            //color picker with addon
            // $('.my-colorpicker2').colorpicker()

            //Timepicker
            // $('.timepicker').timepicker({
            //   showInputs: false
            // })
        })
    </script>
    @yield('js')
</body>

</html>