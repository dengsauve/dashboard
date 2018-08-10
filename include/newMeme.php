<div class="row">
    <form action="/vault.php" method="post" class="col-12">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="name" placeholder="Name" name="name" />
            </div>
        </div>
        <div class="form-group row">
            <label for="site" class="col-sm-2 col-form-label col-form-label-sm">Image Address</label>
            <div class="col-sm-10">
                <input type="url" class="form-control form-control-sm" id="site" placeholder="URL" name="site" />
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label col-form-label-sm">Tags</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="tags" placeholder="tags" name="tags" />
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-primary" value="Add Image" name="submit" />
        </div>
    </form>
</div>