<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<nav class="navbar navbar-expand-md shadow " aria-label="Fourth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#">myBlog</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" >Contact</a>
            </li>
   
          </ul>
        
        </div>
    </div>
</nav>


<div class="container my-5">

		<h1>Contact Us</h1>
    <?php 
    
        session_start();

        if(isset($_SESSION['success']) && $_SESSION['success']==true )
        {
           ?>
              <div class="alert alert-success" role="alert">
               Form Submitted Successfully
              </div>
           <?php
        }else if( isset($_SESSION['success']) && $_SESSION['success']==false ){
          ?>
             <div class="alert alert-danger" role="alert">
               Some Error Occured
             </div>
          <?php
        }

    ?>
		<form method="post" action="process_contact.php" >
			<div class="form-group my-2">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group my-2">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group my-2">
				<label for="subject">Subject:</label>
				<input type="text" class="form-control" id="subject" name="subject" required>
			</div>
			<div class="form-group my-2">
				<label for="message">Message:</label>
				<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body> 

</html>

<?php
session_destroy();
?>