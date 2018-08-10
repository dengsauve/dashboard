<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add A New Dashboard Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/" method="post">
        <div class="modal-body">
            <div class="form-group row">
                <div class="col-12">
                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Site Name" name="name" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <input type="url" class="form-control form-control-sm" id="site" placeholder="URL" name="site" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <input type="text" class="form-control form-control-sm" id="description" placeholder="Description" name="description" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <input type="text" class="form-control form-control-sm" id="image" placeholder="Image" name="image" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Add Site" name="submit" />
            </div>
      </div>
        </form>
    </div>
  </div>
</div>




