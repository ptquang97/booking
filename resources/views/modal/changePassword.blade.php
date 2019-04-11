@extends('layouts.app')

@section('changePassword')
<div class="modal" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="changePassword">Change Password</h4>
            </div>
            <div class="modal-body">
                <form action="" id="frmChangePassword" class="ng-pristine ng-valid">
                    <input type="hidden" name="auth_id" value="205" class="auth_id">
                    <label class="control-label">New Password:</label>
                    <input type="password" class="form-control txtPasswordNew" name="password_new" placeholder="**********">
                    <label class="label label-danger lblErrPasswordOld" style="display:none">Password is
                        required</label><br>
                    <label class="control-label">Confirm Password:</label>
                    <input type="password" class="form-control txtConfirmPasswordNew" name="confirm_password_new" placeholder="**********">
                    <label class="label label-danger lblErrConfirmPassword" style="display:none">Confirm Password is
                        required</label><br>
                </form>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary" ng-click="btnChangePassword()">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    @endsection