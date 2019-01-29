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
      <form action="/snippets.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="description" placeholder="Describe the snippet's function, etc.">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="language" placeholder="Provide the language">
					</div>
					<div class="form-group">
						<label for="code">Code:</label>
						<textarea class="form-control" rows="5" name="body"></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Add Snippet" name="submit" />
				</div>
			</form>
    </div>
  </div>
</div>




