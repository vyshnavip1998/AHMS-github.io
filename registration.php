<?php
session_start();
$hloc=$_SESSION['loc'];
include('includes/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$iphno=$_POST['contact'];
$pname=$_POST['pname'];
$age=$_POST['age'];
$hname=$_POST['hname'];
$street=$_POST['street'];
$city=$_POST['city'];
$reqroom=$_POST['reqroom'];
$emgphno=$_POST['emgphno'];
$rno=$_POST['rno'];
$sql=$conn->query("INSERT INTO inmates(name,iphno,pname,hname,street,city,age,emgphno,reqroom,rno,hloc)VALUES('$name','$iphno','$pname','$hname','$street','$city','$age','$emgphno','$reqroom','$rno','$hloc')");
if($sql)
{
echo"<script>alert('Student Succssfully register');</script>";
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
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Student Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<br><br>
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
			<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
											
	
								

<div class="form-group">
<label class="col-sm-2 control-label"> Name : </label>
<div class="col-sm-8">
<input type="text" name="name" id="name"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Phone No : </label>
<div class="col-sm-8">
<input type="number" name="contact" id="contact"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Parent Name : </label>
<div class="col-sm-8">
<input type="text" name="pname" id="pname"  class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Age : </label>
<div class="col-sm-8">
<input type="number" name="age" id="age"  class="form-control" required="required">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">House name: </label>
<div class="col-sm-8">
<input type="text" name="hname" id="hname"  class="form-control"  required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Street: </label>
<div class="col-sm-8">
<input type="text" name="street" id="street"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Required room : </label>
<div class="col-sm-8">
<select name="reqroom" class="form-control" required="required">
<option value="">Select room</option>
<option value="sb">Single bath attached</option>
<option value="snb">Single not bath attached</option>
<option value="db">Double Bath attached</option>
<option value="dnb">Double not Bath attached</option>
<option value="tnb">Triple not Bath attached</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Emergency Contact No : </label>
<div class="col-sm-8">
<input type="number" name="emgphno" id="emgphno"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Allocated room no: </label>
<div class="col-sm-8">
<input type="number" name="rno" id="rno"  class="form-control" required="required">
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


