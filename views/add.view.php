<?php require 'partials/head.php'; ?>

<main>
	
	<h4>Add a new Task</h4>
	<br>

	<form>
		  <div class="form-group">
		    <input type="text" class="form-control" id="description" placeholder="Describe the task">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="duedate" placeholder="Due Date">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="assigned_to" placeholder="Assigned to">
		  </div>

	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="status">
	    <label class="form-check-label" for="status">Mark as Complete</label>
	  </div>
	  <br>
	  <button type="submit" class="btn btn-primary">Add</button>
</form>

</main>

<?php require 'partials/footer.php' ?>

