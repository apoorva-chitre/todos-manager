<?php

 ?>



<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<link rel="shortcut icon" href="/assets/img/favicon.png" />

	<title>Tasks Manager</title>

	<!-- CSS Stylesheets -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

	<div class="container fill">

	<!-- header section -->

	<header>

		<h1>Tasks for the Day</h1>

	</header>

	<!-- main content -->

		<hr>

	<main>

		<button class="btn btn-primary btn-sm new">New Task</button>

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

				<button class="btn btn-info btn-sm">Edit</button> <button class="btn btn-danger btn-sm">Delete</button>

				</div>

			</ul>

		</div>

				<?php endforeach; ?>

		</div>
	

	</main>


	<!-- footer section -->

	<footer>

	</footer>


	<!-- --------- JS -------------->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</div>

</body>
</html>