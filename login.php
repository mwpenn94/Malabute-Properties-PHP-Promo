<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Jason Malabute</title>
</head>
<body>
  
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="form-control input-group">
  		<label class="px-3">Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="form-control input-group">
  		<label class="px-3">Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="form-control input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
  </form>
</body>
</html>