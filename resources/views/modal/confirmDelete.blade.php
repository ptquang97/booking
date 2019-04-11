@extends('layouts.app')

@section('confirmDelete')
    <div class="modal" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="modalConfirmDelete">
    <div class="modal-dialog modal-lg" role="document" style="width: 400px;">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="modalConfirmDelete">Delete repeat event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <h4 class="text-center">Choose the type delete?</h4>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-xs-5">
                        <button class="btn btn-danger form-control" ng-click="actionDelete('one')">Only this event</button>
                    </div>
                    <div class="col-xs-5 pull-right">
                        <button class="btn btn-danger form-control" ng-click="actionDelete('all')">All related events</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    @endsection