{{--@extends('layouts.app')--}}
{{--@section('addEvent')--}}
<div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="modalAdd">
        <div class="modal-dialog" role="document" style="width: 670px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Event Info</h4>
                </div>
                <div class="modal-body">
                    <form action="{{action('EventController@addEvent')}}" id="frmAddEvent" class="ng-pristine ng-valid" name="frm-addEvent">
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="control-label">Summary:</label>
                                <input type="text" class="form-control txtSummary" name="summary" placeholder="Title" id="summary">
                                <label class="label label-danger lblErrSummary">Summary is required</label><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="control-label">Email:</label>
                                <input type="text" class="form-control txtEmail" name="email" placeholder="Email">
                                <label class="label label-danger lblErrEmail" style="display: none;">Email is invalid</label><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <label class="control-label">Group:</label>
                                <select name="group_id" class="form-control" id="selGroups"><option value="-1" selected="selected">-- None --</option><option value="5">BGĐ</option><option value="6">HCNS</option><option value="7">BrSE</option><option value="8">MOBILE</option><option value="9">SYSTEM</option><option value="10">COMTOR</option><option value="11">TESTER</option><option value="12">PRODUCT</option><option value="13">VHDN</option><option value="14">Công Đoàn</option><option value="15">Topleaders</option><option value="16">TTS</option></select>
                            </div>
                            <div class="col-xs-6">
                                <label class="control-label">Room:</label>
                                <select name="room_id" class="form-control" id="selRooms"><option value="12">KIKU</option><option value="14">TSUBAKI</option><option value="15">AJISAI</option><option value="16">SAKURA</option><option value="17">FUJI</option><option value="18">UME</option></select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <label class="control-label">Start time:</label>
                                <input type="text" placeholder="HH:mm" class="form-control timeStart timePicker ui-timepicker-input ng-pristine ng-untouched ng-valid ng-empty" name="timeStart" ng-model="eventInfo.timeStart" autocomplete="off" id="timeStart">
                                <label class="label label-danger lblErrStart">Start is required</label><br>
                            </div>
                            <div class="col-xs-3">
                                <label class="control-label">End time:</label>
                                <input type="text" placeholder="HH:mm" class="form-control timeEnd timePicker ui-timepicker-input ng-pristine ng-untouched ng-valid ng-empty" ng-model="eventInfo.timeEnd" name="timeEnd" autocomplete="off" id="timeEnd">
                                <label class="label label-danger lblErrEnd">End is required</label><br>
                            </div>
                            <div class="col-xs-3">
                                <label class="control-label">Date</label>
                                <input type="text" placeholder="yyyy/mm/dd" ng-model="eventInfo.dateStart" class="form-control event_date datePicker ng-pristine ng-untouched ng-valid ng-empty" name="event_date" id="event_date">
                            </div>
                        </div>
                        {{--<label style="padding: 10px 0px 5px 0px;" class="">--}}
                            {{--Repeat event <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="repeat_event" id="repeatEvent" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>--}}
                        {{--</label>--}}
                        {{--<div class="row repeat_event" style="display: none;">--}}
                            {{--<div class="col-xs-12 chk_week">--}}
                                {{--<label>Weekly:</label>--}}
                                {{--<label style="font-weight: 500;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="check_all" value="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> ALL--}}
                                {{--</label>--}}
                                {{--<!-- ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Mon--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Tue--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="3" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Wed--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="4" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Thu--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="5" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Fri--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="6" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Sat--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">--}}
                                    {{--<div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="0" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Sun--}}
                                    {{--&nbsp;--}}
                                {{--</label><!-- end ngRepeat: item in dayOfWeek -->--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6">--}}
                                {{--<label class="control-label">From date:</label>--}}
                                {{--<input type="text" class="form-control start_date datePicker datepicker-input" name="start_date" data-mask="9999-99-99" placeholder="yyyy-mm-dd">--}}
                                {{--<label class="label label-danger lblErrStart">Start is required</label><br>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6">--}}
                                {{--<label class="control-label">To date:</label>--}}
                                {{--<input type="text" class="form-control end_date datePicker datepicker-input" name="end_date" data-mask="9999-99-99" placeholder="yyyy-mm-dd">--}}
                                {{--<label class="label label-danger lblErrEnd">End is required</label><br>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </form>
                    <div id="alert" style="color: red"></div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary" id="btn-addEvent">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function($) {
        $("#addEventModal #timeStart").attr("value", 'aasdas');
        $("#addEventModal #timeStart").val("value");
        console.log('aaaa',$("#addEventModal #timeStart"));
    })
</script>