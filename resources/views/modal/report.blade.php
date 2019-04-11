<div class="modal" id="reportEventModal" tabindex="-1" role="dialog" aria-labelledby="modalAdd">
    <div class="modal-dialog" role="document" style="width: 670px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Report Event</h4>
            </div>
            <div class="modal-body">
                <h5 class="label" style="color: rgba(255, 0, 0, 0.81);font-size: 13px;padding: 0px;">
                    Note: Current time must be greater than the start time 1 hour
                </h5>
                <form action="" method="POST" id="frmReportEvent" class="ng-pristine ng-valid">
                    <input type="hidden" class="event_repeat" value="" name="repeat_event">
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="control-label">Content:</label>
                            <input type="text" class="form-control txtContentReport" name="contentReport" placeholder="Content report...">
                            <label class="label label-danger lblErrContentReport">Content report is required</label><br>
                        </div>
                        <div class="col-xs-4">
                            <label class="control-label">Image:</label>
                            <a class="file-input-wrapper btn">Browse<input type="file" file-model="Myfile" name="imageReport"></a>
                            <br>
                        </div>
                    </div>
                </form></div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-info btnReport" ng-click="reportEvent()">Report</button>
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>