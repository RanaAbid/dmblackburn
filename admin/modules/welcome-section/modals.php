<div class="modal" id="core_values_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add / Edit Core Values</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <form id="core_values_form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="add_edit">
                <input type="hidden" name="value_id" id="value_id" value="0">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <p class="mg-b-10">Title</p>
                                <input type="text" class="form-control" name="value_title" id="value_title" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p class="mg-b-10">Description</p>
                                <textarea class="form-control" name="short_desc" id="value_short_desc" rows="3" placeholder="Short Description.."></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p class="mg-b-10">Icon</p>
                                <input type="file" id="value_icon" name="value_icon" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="save_button" class="btn ripple btn-primary" type="button">Save</button>
                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>