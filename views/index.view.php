<?php require 'partials/head.php'; ?>

	<main>

		<a href="/add"><button class="btn btn-primary btn-sm new">New Task</button></a>

		<br><br>

		<div class="card-deck">

			<?php foreach ($tasks as $task) : ?>

				<div class="card">

					<div class="card-body">

				<h4 class="card-title">Task <?= $task->id; ?></h4>

				<ul class="card-text">


				<li><strong>Description: </strong> <?= $task->description; ?><br></li>

				<li><strong>Due Date: </strong> <?= $task->due_date; ?><br></li>


				<li><strong>Assigned to: </strong> <?= $task->assigned_to; ?><br></li>

				<li><strong>Status: </strong> 


					<?php if($task->completed) : ?> 

						<span class="icon">&#9989;</span>

					<?php else : ?>

						<span class="icon">&#10062;</span>
					
					<?php endif; ?>

				</li>
				</div>

				<div class="card-footer">

				<a href="/edit"><button class="btn btn-info btn-sm">Edit</button></a> <button class="btn btn-danger btn-sm">Delete</button>

				</div>

			</ul>

		</div>

				<?php endforeach; ?>

		</div>
	

	</main>

	<?php require 'partials/footer.php' ?>
