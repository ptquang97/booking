<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.css" rel="stylesheet" type="text/css">
@extends('layouts.app')

@section('content')
    <body class="fixed-left  ng-scope widescreen vsc-initialized pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div></div>&lt;--[endif]--&gt;

    <style type="text/css">
        .lblErrSummary, .lblErrStart, .lblErrEnd, .lblErrRoomName, .lblErrGroupName, .lblErrEmail {
            display: none;
            text-align: center;
        }
    </style>

    <!-- Modal Start -->
    <!-- Modal Task Progress -->

    <!-- Modal Logout -->
            <!-- Modal End -->
    <!-- Begin page -->
    <div id="wrapper" class="forced">
        <!-- Top Bar Start -->
        <div class="topbar">
            <div class="topbar-left">
                <div class="logo">
                    <h1><a href="{{route('home')}}"><img src="https://omi-book-meeting.ominext.co/img/logo-ominext.png" alt="Logo"></a></h1>
                </div>
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-collapse2">
                        <ul class="nav navbar-nav hidden-xs">
                            <li class="dropdown">

                                <div class="dropdown-menu grid-dropdown">
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calc" data-status="inactive" class="clickable"><i class="fa fa-calculator"></i>Calculator</a>
                                        </div>
                                    </div>
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="stock-app" data-status="inactive" class="clickable"><i class="icon-chart-line"></i>Stocks</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right top-navbar">
                            <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                            <li class="dropdown topbar-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img style="width: 35px; height:35px" src="https://omi-book-meeting.ominext.co/uploads/users/user.png"></span>
                                    <strong>{{Auth::user() -> name}}</strong> <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" id="changeInfo"><i class="fa fa-user"></i> My Profile</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#changePassword"><i class="fa fa-lock"></i> Change password</a></li>
                                    <li class="divider"></li>
                                    <li><a class="md-trigger" href="{{route('logout')}}"><i class="icon-logout-1"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 919px;"><div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 919px;">
                    <!-- Search form -->
                    <div class="clearfix"></div>
                    <!--- Profile -->
                    <div class="profile-info" style="padding: 10px 0px 10px 0px;">
                        <div class="col-xs-4">
                            <a href="{{route('home')}}" class="rounded-image profile-image"><img style="width: 45px; height:45px" src="https://omi-book-meeting.ominext.co/uploads/users/user.png"></a>
                        </div>
                        <div class="col-xs-8">
                            <div class="profile-text">Welcome <b>{{Auth::user() -> name}}</b></div>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div class="clearfix"></div>
                    <hr class="divider">
                    <div class="clearfix"></div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="{{ route('home') }}"><i class="icon-home-3"></i><span>Home</span>

                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="portlets ui-sortable">

                        <div id="recent_tickets" class="widget transparent nomargin">
                            <h2>New Events</h2>
                            <div class="widget-content" id="new_events">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br><br><br>
                </div><div class="slimScrollBar" style="background: rgb(122, 134, 143); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; left: 1px; height: 919px; visibility: visible;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div></div>

        </div>
        <!-- Left Sidebar End -->
        <!-- Right Sidebar Start -->
        <!-- Right Sidebar End -->

        <!-- Start right content -->
        <div class="content-page">
            <div class="content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 portlets ui-sortable">
                            <div class="row">
                                <div class="col-md-12" id="search_event">
                                    <div class="row">
                                        <form id="frmSearchRoom" name="frmSearchRoom" class="ng-pristine ng-valid">
                                            <div class="col-md-2 col-xs-6 cl-start-time">
                                                <input type="text" style="color: #9e7373;"
                                                       class="form-control datetimepicker dStart ng-pristine ng-untouched ng-valid ng-empty"
                                                       ng-model="data.dateStartSearch" name="start"
                                                       placeholder="From: yy/mm/dd hh:mm">
                                            </div>
                                            <div class="col-md-2 col-xs-6 cl-end-time">
                                                <input type="text" style="color: #9e7373;"
                                                       class="form-control datetimepicker dEnd ng-pristine ng-untouched ng-valid ng-empty"
                                                       ng-model="data.dateEndSearch" name="end"
                                                       placeholder="To: yy/mm/dd hh:mm">
                                            </div>
                                            <div class="col-md-3 col-xs-12 cl-button-search-room">
                                                <button type="button" class="btn btn-info form-control"
                                                        ng-click="searchRoomsEmpty()">Search Empty Rooms
                                                </button>
                                            </div>
                                        </form>
                                        <div class="col-md-3 col-md-offset-1 cl-text-search">
                                            <input type="text"
                                                   class="form-control txtSearchEvent ng-pristine ng-untouched ng-valid ng-empty"
                                                   ng-enter="searchEvent()" ng-model="data.txtSearchEvent"
                                                   placeholder="Search event...">
                                        </div>
                                        <div class="col-md-1 cl-button-search">
                                            <button type="button" class="btn btn-info form-control"
                                                    ng-click="searchEvent()">Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="widget">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-sm-2 col-xs-6" style="padding: 4px 20px 0px 20px;">
                                                        <button class="btn btn-success form-control"
                                                                onclick="addEvent()">Add Event
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-10 col-xs-6">
                                                        <h2 class=" text-center" style="padding-right: 50px;">Events
                                                            Manager</h2>
                                                    </div>
                                                </div>

                                                <div class="additional-btn">
                                                    <a href="#" class="hidden reload" ng-click="reloadCalendar()"><i
                                                                class="icon-ccw-1"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content padding">
                                                <div class="col-md-2">
                                                    <div class="widget bg-gray-light">
                                                        <div class="widget-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <h3 class="text-white" id="calender-current-date">
                                                                        Events</h3>
                                                                    <div id="draggable-events">
                                                                        <p>Drag and drop your event or click in the
                                                                            calendar</p><br>
                                                                        <div data-id-room="12"
                                                                             class="item_room draggable-event btn btn-block bg-green-1 text-white-1 ui-draggable"
                                                                             style="background-color: rgb(128, 0, 128) !important; position: relative;"
                                                                             data-class="bg-blue-1">
                                                                            <i class="fa fa-move"></i>KIKU
                                                                            <input type="hidden" value="12">
                                                                        </div>
                                                                        <div data-id-room="14"
                                                                             class="item_room draggable-event btn btn-block bg-green-1 text-white-1 ui-draggable"
                                                                             style="background-color: rgb(255, 128, 0) !important; position: relative;"
                                                                             data-class="bg-blue-1">
                                                                            <i class="fa fa-move"></i>TSUBAKI
                                                                            <input type="hidden" value="14">
                                                                        </div>
                                                                        <div data-id-room="15"
                                                                             class="item_room draggable-event btn btn-block bg-green-1 text-white-1 ui-draggable"
                                                                             style="background-color: rgb(40, 180, 24) !important; position: relative;"
                                                                             data-class="bg-blue-1">
                                                                            <i class="fa fa-move"></i>AJISAI
                                                                            <input type="hidden" value="15">
                                                                        </div>
                                                                        <div data-id-room="16"
                                                                             class="item_room draggable-event btn btn-block bg-green-1 text-white-1 ui-draggable"
                                                                             style="background-color: rgb(227, 0, 114) !important; position: relative;"
                                                                             data-class="bg-blue-1">
                                                                            <i class="fa fa-move"></i>SAKURA
                                                                            <input type="hidden" value="16">
                                                                        </div>
                                                                        <div data-id-room="17"
                                                                             class="item_room draggable-event btn btn-block bg-green-1 text-white-1 ui-draggable"
                                                                             style="background-color: rgb(176, 0, 0) !important; position: relative;"
                                                                             data-class="bg-blue-1">
                                                                            <i class="fa fa-move"></i>FUJI
                                                                            <input type="hidden" value="17">
                                                                        </div>
                                                                        <div data-id-room="18"
                                                                             class="item_room draggable-event btn btn-block bg-green-1 text-white-1 ui-draggable"
                                                                             style="background-color: rgb(0, 101, 202) !important; position: relative;"
                                                                             data-class="bg-blue-1">
                                                                            <i class="fa fa-move"></i>UME
                                                                            <input type="hidden" value="18">
                                                                        </div>
                                                                        <br>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="widget bg-white">
                                                        <div class="widget-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div id="calendar">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End right content -->
    </div>
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="csrfToken">
    @include('modal.addEvent')
    @include('modal.changeInfo')

    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{--<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <script src="https://omi-book-meeting.ominext.co/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/fastclick/fastclick.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jquery-blockui/jquery.blockUI.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/bootstrap-bootbox/bootbox.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/nifty-modal/js/classie.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/nifty-modal/js/modalEffects.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/sortable/sortable.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/bootstrap-select2/select2.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/pace/pace.min.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/jquery-icheck/icheck.min.js"></script>

    <script src="https://omi-book-meeting.ominext.co/libs/js/datetimepicker/datetimepicker.full.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/js/custom.js"></script>
    <script src="https://omi-book-meeting.ominext.co/libs/js/moment/moment.min.js"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="https://omi-book-meeting.ominext.co/libs/prettify/prettify.js"></script>

    <script src="https://omi-book-meeting.ominext.co/js/init.js"></script>
    <!-- Page Specific JS Libraries -->
    <script src="https://omi-book-meeting.ominext.co/libs/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha384-tIwI8+qJdZBtYYCKwRkjxBGQVZS3gGozr3CtI+5JF/oL1JmPEHzCEnIKbDbLTCer" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>

    <script type="text/javascript" src="https://omi-book-meeting.ominext.co/libs/timepicker/jquery.timepicker.js"></script>
    <script type="text/javascript" src="https://omi-book-meeting.ominext.co/libs/timepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="https://omi-book-meeting.ominext.co/libs/js/datetimepicker/datetimepicker.full.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{--<script src="/assets/js/calendar.js"></script>--}}
    <script type="text/javascript">
        $(".modal").modal({
            show: false,
            backdrop: 'static'
        });
        $('.dStart').datetimepicker({
            format: 'Y-m-d H:m',
            minDate: new Date(),
            allowTimes:['8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00'],
        });
        $('.dEnd').datetimepicker({
            format: 'Y-m-d H:m',
            onShow: function (ct) {
                this.setOptions({
                    minDate: jQuery('.dStart').val() ? jQuery('.dStart').val() : false
                })
            },
            allowTimes:['8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00'],
        });
        $(".timePicker").timepicker({
            'timeFormat': 'H:i',
            'minTime' : '08:00:00',
            'maxTime' : '19:00:00'
        });
        $(".datePicker").datepicker({
            'format': 'dd-mm-yyyy',
            'autoclose': true,
            'todayHighlight': true
        });
        function addEvent() {
            $('#addEventModal').modal('show')
        }

        $(document).ready(function(e) {
            $('#addEventModal').on('shown.bs.modal', function () {
                $('#summary').trigger('focus');
            })
            $('#changeInfo').on('click', function(){
                $('#changeAvatar').modal('show')

            })
            $('#btn-addEvent').click(function(e){
                e.preventDefault();
                var url=$("form[name='frm-addEvent']").attr('action');
                var data = $('#frmAddEvent').serialize();
                console.log('data', data);
                var token = "<?php echo csrf_token(); ?>";
                console.log('token', token);
                $.ajax({
                    url:url,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    type:'POST',
                    data:data,
                    success: function(data){
                        // data=$.parseJSON(data);

                        if (data === 's200'){
                            $('#alert').html('');
                            swal({
                                title:"Đặt phòng thành công",
                                icon:"success",
                                showConfirmButton: false,
                                timer: 1500,
                            })
                                .then((value) => {
                                    location.reload();
                                });
                        } else {
                            $('#alert').html('Điền đầy đủ thông tin');
                        }
                        // $('#departmentNameAlert').html("<h5>"+data.result['departmentName']+"</h5>");
                        // $('#leaderNameAlert').html("<h5>"+data.result['leaderName']+"</h5>");
                        // $('#leaderEmailAlert').html("<h5>"+data.result['leaderEmail']+"</h5>");
                        // if (data.result['1']==''){
                        //     $(".Alert").html('');
                        //

                        // }
                    }
                });
            });
        });
    </script>
    <script type="text/javascript" src="{{ URL::asset('../assets/js/calendar.js') }}"></script>
    </body>
@endsection
