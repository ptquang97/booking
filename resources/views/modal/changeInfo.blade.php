
<div class="modal" id="changeAvatar" tabindex="-1" role="dialog" aria-labelledby="updateUser">
    <div class="modal-dialog modal-lg" role="document" style="z-index: 99;">
        <div class="modal-content ">
            <form id="changePhoto" method="POST" enctype="multipart/form-data" role="form" class="ng-pristine ng-valid">
                <input type="hidden" value="205" name="idUs">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">User Info</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="User Pic" id="fileA" style="width:200px; height:200px" src="https://omi-book-meeting.ominext.co/uploads/users/user.png" class="img-circle img-responsive">
                            {{--<div style="padding-top: 20px;">--}}
                                {{--<a class="file-input-wrapper btn">Browse<input type="file" name="avatar" id="avatar"></a>--}}
                            {{--</div>--}}
                            <p id="eMessage"></p>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Name: </td>
                                    <td>{{Auth::user() -> name}}</td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td>{{Auth::user() -> email}}</td>
                                </tr>
                                <tr>
                                    <td>Group: </td>
                                    <td>{{Auth::user() -> group}}</td>
                                </tr>
                                <tr>
                                    <td>Create Date: </td>
                                    <td>{{Auth::user() -> created_at}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    {{--<button type="submit" id="btnUpdate" class="btn btn-success">Update</button>--}}
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
