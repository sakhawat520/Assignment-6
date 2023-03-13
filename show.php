<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
    <title>Summit from</title>
  </head>
  <body>
  <h2>Submit Successful</h2>
	<p>Thank you for registering!</p>
	<table class="table table-striped table-dark">
			<thead>
				<tr>
				
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Photo</th>
				</tr>
			</thead>
			<tbody>
			<?php
				// read users data from CSV file
				$file = fopen('users.csv', 'r');

				while (($data = fgetcsv($file)) !== false) {
					echo '<tr>';
					echo '<td>' . $data[0] . '</td>';
					echo '<td>' . $data[1] . '</td>';
					echo '<td><img src="uploads/' . $data[2] . '"></td>';
					echo '</tr>';
				}

				fclose($file);
			?>
			</tbody>
			</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
