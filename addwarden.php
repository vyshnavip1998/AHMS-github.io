 <?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$wphno=$_POST['wphno'];
$hloc=$_POST['hloc'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql=$conn->query("INSERT INTO warden(wphno,name,email,pass,hloc)VALUES('$wphno','$name','$email','$pass','$hloc')");
if($sql)
{
echo"<script>alert('Warden Succssfully register');</script>";
}
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/bsidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
			<h2 class="page-title">Add Warden</h2>
<p>*Please add Warden only after creating the allotted hostel.If Hostel not created click <a href="reghostel.php">Create Hostel</a> to create hostel</p>

<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
											
<div class="form-group">
<label class="col-sm-2 control-label">Warden Phone Number : </label>
<div class="col-sm-8">
<input type="number" name="wphno" id="wphno"  class="form-control" required="required">
</div>
</div>	
<div class="form-group">
<label class="col-sm-2 control-label">Name : </label>
<div class="col-sm-8">
<input type="text" name="name" id="name"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Email: </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Hostel Location : </label>
<div class="col-sm-8">
<select name="hloc" class="form-control" required="required">
<option value="">Select </option>
<?php
  $sql = mysqli_query($conn, "SELECT hostloc From hostel");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['hostloc'] ."'>" .$row['hostloc'] ."</option>" ;
}
?>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Password: </label>
<div class="col-sm-8">
<input type="password" name="pass" id="pass"  class="form-control" required="required">
</div>
</div>
<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>



					
						
