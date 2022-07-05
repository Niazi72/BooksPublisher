<?php
include('dbconn.php');
include('insert.php');
session_start();
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Books Publisher</title>
  </head>
  <body>
   <?php   
   require 'navbar.php';
   if(isset($_GET['existAlert'])	==	1)
   {
	   echo '<div id="alertMsg" class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Waning!</strong> This email address already exist.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
   }
   elseif(isset($_GET['signupAlert'])	==	1)
   {
	   echo '<div id="alertMsg" class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Success!</strong> You are successfully sign up.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
   }
   elseif(isset($_GET['signinAlert'])	==	1)
   {
	   echo '<div id="alertMsg" class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Success!</strong> You are successfully sign in.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
   }
   elseif(isset($_GET['signoutAlert'])	==	1)
   {
	   echo '<div id="alertMsg" class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Success!</strong> You are successfully sign out.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
   }
   elseif(isset($_GET['showAlert'])	==	1)
   {
	   echo '<div id="alertMsg" class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Warning!</strong> Your email or password is incorrect.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
   }
   $selectQ	=	mysqli_query($conn,"SELECT * FROM books");
   if(isset($_GET['pkbooksid']))
   {
	   $pkbooksid	=	$_GET['pkbooksid'];
	   $selectQ		=	mysqli_query($conn,"SELECT * FROM books WHERE pkbooksid='$pkbooksid'");
	   foreach($selectQ as $getSingleRec);
	   {
		   ?>
           
           <div class="row">
           <div class="container">
           <div class=" center">
               <img style=" padding:20px; width:20%; height:200px;" src="<?php echo $getSingleRec['image']; ?>"/>
               <h5 class="card-title">Title : <?php echo $getSingleRec['title']; ?></h5>
               <p class="card-text">Publish By : <?php echo $getSingleRec['publishby']; ?></p>
               <p class="card-text"><?php echo $getSingleRec['description']; ?></p>
           </div>
           </div>
           </div>
           <?php
	   }
   }
   else
   {
	   if(isset($_GET['loadform']))
	   {
			if(!isset($_SESSION['signin']) || $_SESSION['signin']!=true) //check session
			{
				echo '<!doctype html>
					<html lang="en">
					<head>
					<!-- Required meta tags -->
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
					
					<!-- Bootstrap CSS -->
					<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
					
					<title>Books Publisher</title>
					</head>
					<body>
					
							<div class="container">
							<div class="row">
								<div class="col-4 d-flex justify-content-center align-items-center">
									<div class="card text-white bg-dark mt-5">
										<div class="card-body" style="width:18cm;">
											<h5 class="card-title"></h5>
											<p class="card-text">For create a post please sign in or Sign up</p>
											<button class="btn btn-primary" style="cursor:pointer; margin:50px;" data-toggle="modal" data-target="#signin">Sign in</button>
										</div>
									</div>
								</div>
							</div>
							</div>
					
							<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<form method="post" action="insert.php">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
											</div>
											<div class="modal-body">
												<label>Email</label>
												<input class="form-control" type="email" name="email" id="email" />
											</div>
											<div class="modal-body">
												<label>Password</label>
												<input class="form-control" type="password" name="password" id="password" />
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" name="signin" class="btn btn-primary">Sign in</button>
											</div>
										</form>
										</div>
									</div>
								</div>
							<!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
					</body>
					</html>';
				exit;
			}
			else
			{
				?>
				<div class="container">
					<form method="post" action="insert.php">
						<div class="container">
							<div class="form-group">
								<label for="exampleInputEmail1">Title</label>
								<input type="hidden" id="pkbooksid" name="pkbooksid" value="<?php echo $pkbooksid; ?>">
								<input type="text" class="form-control" id="title" name="title" value="" placeholder="Enter title" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Publish By</label>
								<input type="text" class="form-control" id="publishby" name="publishby" value="<?php echo $_SESSION['name']; ?>" placeholder="Enter publisher name" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Image</label>
								<input type="file" class="form-control" id="image" name="image" value="" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Description</label>
								<textarea class="form-control" id="description" name="description" required></textarea>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
								<a href="welcome.php" class="btn btn-danger">Cancel</a>
							</div>
						</div>
					</form>
				</div>
				<?php
			}
	   }
	   else
	   {
			?>
			<div class="container">
			<div class="row">
			<?php foreach($selectQ as $select){ ?>
				<div class="col-4 d-flex justify-content-center align-items-center">
					<div class="card text-white bg-dark mt-5">
						<div class="card-body">
							<img width='250' height='200' src="<?php echo $select['image']; ?>"/>
							<h5 class="card-title"><?php echo $select['title']; ?></h5>
							<p class="card-text"><?php echo $select['publishby']; ?></p>
							<a href="welcome.php?pkbooksid=<?php echo $select['pkbooksid']; ?>" class="btn btn-light"> Discription<span class="text-danger">&rarr;</span></a>
						</div>
					</div>
				</div>
			<?php }?>
			</div>
			</div>
			<?php
		}
   }
   
	?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	
	<?php
	$signoutAlerts	=	isset($_GET['signoutAlert']);
	?>
    <input type="hidden" id="signoutalertbtn" name="signoutalertbtn" value="<?php echo 1; ?>">
  </body>
  <script>
		//$("#alertMsg").show().delay(5000).fadeOut();
		$("#alertMsg").show();
		setTimeout(function() { $("#alertMsg").hide(); }, 3000);
		function hide()
		{
			
			var signoutAlert	=	$('#signoutalertbtn').val();
			//alert(signoutAlert);
			if(signoutAlert	==	1)
			{
				$("#home").hide();
			}
		}
		//hide();
	</script>
</html>