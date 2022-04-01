<?php 
 

 
if (!isset($_POST['email'])) {
    header("Location: sign_in.php");
}
 
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Profile</title>
</head>

<body>
	<form action="" method="POST">
	<div class="container-lg">
		<div class="card">
			<div class="card-header">
				Profile
			</div>
			<div class="card-body">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Email" id="email" value="<?php echo $_SESSION['name']; ?>" " readonly>				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Email" id="email" value="<?php echo $_SESSION['email']; ?>" " readonly>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nomor Telepon" id="telepon" value="<?php echo $_SESSION['phone']; ?>"  readonly>
				</div>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>
</form>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"ntegrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>