@extends('layouts.app')

@section('resultSearch')
<div class="modal fade" id="modalSearchResult" tabindex="-1" role="dialog" aria-labelledby="modalSearchResult">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="modalSearchResult">Search Event</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover table-responsive" id="table_calendar_search">
                    <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th class="text-center">Event name</th>
                        <th class="text-center">Start</th>
                        <th class="text-center">End</th>
                        <th class="text-center">Room</th>
                        <th class="text-center">Group</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="not_found text-center" style="display: none;">
                    <label>Not found</label>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    @endsection