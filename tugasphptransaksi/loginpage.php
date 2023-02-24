<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
body {
	padding-top: 200px;
	padding-left: 600px;
}
</style>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4 py-4" style="border: 1px solid grey;border-radius: 10px;">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please Sign In</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="POST" action="savecrudlogin.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Name" name="nama" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>