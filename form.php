<?php
include("dbconn.php");

/*$title			=	'';
$description	=	'';
$publishby		=	'';
$image			=	'';
$edit_state		=	'';
if(isset($_GET['pkbooksid']))
{
	$edit_state		=	true;
	$pkbooksid		=	$_GET['pkbooksid'];
	$selectQueryR	=	mysqli_query($conn,"SELECT * FROM books WHERE pkbooksid=$pkbooksid");
	$record     	=	mysqli_fetch_array($selectQueryR);
	$title			=	$record['title'];
	$description	=	$record['description'];
	$publishby		=	$record['publishby'];
	$image			=	$record['image'];
	$pkbooksid		=	$record['pkbooksid'];
}*/
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  	<?php
	include('insert.php');
	if($alertMsg)
	{
	   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Success!</strong> Your account is now created and you can login.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
	}
	?>
    <form method="post" action="insert.php">
    	<div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="hidden" id="pkbooksid" name="pkbooksid" value="<?php echo $pkbooksid; ?>">
                <input type="text" class="form-control" id="title" name="title" value="" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Publish By</label>
                <input type="text" class="form-control" id="publishby" name="publishby" value="" placeholder="Enter publisher name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
            	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="form.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!---For Grid--->

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel		="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity	="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel		="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<!--<div class="container my-4">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Publish By</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
		$selectQuery	=	mysqli_query($conn,"SELECT * FROM books");
		while($row	=	mysqli_fetch_assoc($selectQuery))
		{
			?>
			<tr>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['publishby']; ?></td>
				<td><?php echo $row['description']; ?></td>
                
                
				<td><img width='50' height='50' src="<?php echo $row['image']; ?>"/></td>
				<td> 
				<a href="form.php?pkbooksid=<?php echo $row['pkbooksid']; ?>" class='edit btn btn-sm btn-primary' >Edit</a>
				<a onClick="return confirm('Are you sure?')" href="delete.php?pkbooksid=<?php echo $row['pkbooksid']; ?>" class='delete btn btn-sm btn-danger' >Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
        </tbody>
    </table>
</div>-->
<script>
	$(document).ready(function () {
		$('#myTable').DataTable();
	});
</script>
</html>
