<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Assignment 6</title>
</head>
<body>
<div class="row">
<div class="col-md-4">
</div>
<dic class="col-md-4">    
        <h2>User Submit Form</h2>
        <form action="main.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" required> 
        </div>
        <div class="form-group">
            <label for ="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="profile_pic">Profile Picture:</label>
            <input type="file"  class="form-control" name="profile_pic" id="profile_pic" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </form>
</div>    
        <div class="col-md-4">
        </div>
</div>   
</body>
</html>
