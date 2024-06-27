<div class="modal fade" id="view_details{{$user->id}}" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="badge badge-pill badge-info">{{$user->role->name}}</p>

                <form>
                    <div class="row form-row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input readonly type="text" class="form-control" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input readonly type="text" class="form-control" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input readonly type="text" class="form-control" value="{{$user->address}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input readonly type="text" class="form-control" value="{{$user->phone_number}}">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Department</label>
                                <input readonly type="text" class="form-control" value="{{$user->department}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Education</label>
                                <input readonly type="text" class="form-control" value="{{$user->education}}">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Description</label>
                                <input readonly type="text" class="form-control" value="{{$user->description}}">
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                </form>
             </div>
        </div>
    </div>
</div>
