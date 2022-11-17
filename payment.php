<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
	$id=$_SESSION['id'];
	$ptype=$_POST['ptype'];
	$name=$_POST['name'];
	$amt=$_POST['amt'];
	$hloc=$_SESSION['loc'];
	$result1=$conn->query("SELECT iphno FROM inmates WHERE name='$name'");
	if($result1)
	{
		if($result1->num_rows > 0)
		{
			while($row=$result1->fetch_assoc())
               		 	{
				$iphno=$row['iphno'];
			}
		}
	}
	$sql=$conn->query("INSERT INTO payment(paytype,amt,hloc,iphno)VALUES('$ptype','$amt','$hloc','$iphno')");
	if($sql)
	{
		echo"<script>alert('Payment sucessfully updated');</script>";
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
					
						<h2 class="page-title">Payment</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">

<div class="form-group">
<label class="col-sm-2 control-label">Name : </label>
<div class="col-sm-8">
<select name="name" class="form-control" required="required">
<option value="">Select </option>
<?php
  $sql = mysqli_query($conn, "SELECT name From inmates");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>" ;
}
?>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Payment : </label>
<div class="col-sm-8">
<select name="ptype" class="form-control" required="required">
<option value="">Select Payment type</option>
<option value="Accomadation fees">Accomadation fees</option>
<option value="Qotetion deposite">Qotetion deposite</option>
<option value="Mess Fees">Mess Fees</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label"> Amount: </label>
<div class="col-sm-8">
<input type="text" name="amt" id="amt"  class="form-control" required="required" >
</div>
</div>
<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Submit" class="btn btn-primary">
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


