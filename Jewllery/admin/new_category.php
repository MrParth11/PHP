<form action="tbl_home_action.php" id="manage-category" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="control-label">Category Name</label>
                <input type="text" class="form-control form-control-sm" name="Name" value="<?php echo isset($Name) ? $Name : '' ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label for="" class="control-label">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="summernote form-control"></textarea>
            </div>
        </div>
    </div>
    <div class="card-footer border-top border-info">
        <div class="d-flex w-100 justify-content-center align-items-center">
            <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-category" type="submit">Save</button>
            <button class="btn btn-flat bg-gradient-secondary mx-2" type="button">Cancel</button>
        </div>
    </div>
</form>
