@extends('layouts.app')

@section('eventDetail')
<div class="modal" id="updateEventModal" tabindex="-1" role="dialog" aria-labelledby="modalAdd">
    <div class="modal-dialog" role="document" style="width: 670px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Event Info</h4>
            </div>
            <div class="modal-body">
                <form action="" id="frmUpdateEvent" class="ng-pristine ng-valid">
                    <input type="hidden" class="event_repeat" value="" name="repeat_event">
                    <div class="row">
                        <div class="col-xs-5">
                            <label class="control-label">Created by:</label>
                            <label class="lblCreatedBy"></label>
                        </div>
                        <div class="col-xs-7">
                            <p style="color:red" class="lblreport"></p>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="control-label">Summary:</label>
                            <input type="text" class="form-control txtSummary" name="summary" placeholder="Title">
                            <label class="label label-danger lblErrSummary">Summary is required</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="control-label">Email:</label>
                            <input type="text" class="form-control txtEmail" name="email" placeholder="Email">
                            <label class="label label-danger lblErrEmail">Email is invalid</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label class="control-label">Group:</label>
                            <select name="group_id" class="form-control" id="optGroups"></select>
                        </div>
                        <div class="col-xs-6">
                            <label class="control-label">Room:</label>
                            <select name="room_id" class="form-control" id="optRooms"></select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <label class="control-label">Start time:</label>
                            <input type="text" placeholder="yyyy/mm/dd H:m" class="form-control timeStart timePicker ui-timepicker-input" name="timeStart" autocomplete="off">
                            <label class="label label-danger lblErrStart">Start is required</label><br>
                        </div>
                        <div class="col-xs-3">
                            <label class="control-label">End time:</label>
                            <input type="text" placeholder="yyyy/mm/dd H:m" class="form-control timeEnd timePicker ui-timepicker-input" name="timeEnd" autocomplete="off">
                            <label class="label label-danger lblErrEnd">End is required</label><br>
                        </div>
                        <div class="col-xs-3">
                            <label class="control-label">Date</label>
                            <input type="text" placeholder="yyyy/mm/dd" class="form-control datePicker event_date " name="event_date">
                        </div>
                    </div>
                    <label style="padding: 10px 0px 5px 0px;">
                        Repeat event <div class="icheckbox_square-aero checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" checked="" name="repeat_event" id="repeatEventUpdate" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                    </label>
                    <div class="row repeat_event" style="display: none;">
                        <div class="col-xs-12 chk_week">
                            <label>Weekly:</label>
                            <label style="font-weight: 500;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="check_all" value="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> ALL
                            </label>
                            <!-- ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Mon
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Tue
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="3" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Wed
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="4" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Thu
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="5" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Fri
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="6" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Sat
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek --><label class="arrDays ng-binding ng-scope" ng-repeat="item in dayOfWeek" style="font-weight: 400;">
                                <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="chk_item" value="0" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp;Sun
                                &nbsp;
                            </label><!-- end ngRepeat: item in dayOfWeek -->
                        </div>
                        <div class="col-xs-6">
                            <label class="control-label">From date:</label>
                            <input type="text" class="form-control start_date datePicker datepicker-input" name="start_date" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
                            <label class="label label-danger lblErrStart">Start is required</label><br>
                        </div>
                        <div class="col-xs-6">
                            <label class="control-label">To date:</label>
                            <input type="text" class="form-control end_date datePicker datepicker-input" name="end_date" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
                            <label class="label label-danger lblErrEnd">End is required</label><br>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-info btnReport" id="btnReport" ng-click="showReportEventModal()">Report</button>
                <button type="button" class="btn btn-primary btnUpdate" ng-click="updateEvent()">Update</button>
                <button type="button" class="btn btn-danger btnDelete" ng-click="deleteEvent()">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    @endsection