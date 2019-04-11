@extends('layouts.app')

@section('searchRoom')
<div class="modal fade" id="modalSearchRooms" tabindex="-1" role="dialog" aria-labelledby="modalSearchRooms">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="modalSearchRooms">Search Empty Rooms</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table table-bordered table-hover table-responsive" id="table_calendar_search">
                            <thead>
                            <tr>
                                <!-- <th class="text-center">STT</th> -->
                                <th class="text-center">Room</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="not_found text-center" style="display: none;">
                            <label>Not found</label>
                        </div>
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