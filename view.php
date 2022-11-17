<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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

	<title>AHMS</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="./dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./dist/css/metisMenu.min.css" rel="stylesheet">
	<link href="./dist/css/timeline.css" rel="stylesheet">
	<link href="./dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="./dist/css/morris.css" rel="stylesheet">
	<link href="./dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./dist/css/appStyle.css" rel="stylesheet" type="text/css">


</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/bsidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<br><br><br><br>
						<section>	
							<table>
            								<tr>
                								<th>  Name  </th>
								                <th>  Phone number  </th>
								                <th>  Parent name  </th>
								                <th>  Age  </th>
									<th>Address</th>
									<th>  Emergency number  </th>
								                <th> <b> Room no:</b>  </th>
							            </tr>
								<?php
									$hloc=$_POST['hloc'];
									$result = $conn->query("SELECT name,iphno,pname,age,emgphno,rno,hloc,hname,street,city FROM inmates ORDER BY rno");
									if($result)
									{
										if($result->num_rows > 0)
										{
				           							while($rows=$result->fetch_assoc())
               										 	{
												if($rows['hloc']==$hloc)
												{
             								?>
								<tr>
									
								                <td><?php echo $rows['name'];?></td>
                								<td><?php echo $rows['iphno'];?></td>
                								<td><?php echo $rows['pname'];?></td>
                								<td><?php echo $rows['age'];?></td>
									<td><?php echo $rows['hname']?><br><?php echo $rows['street']?><br><?php echo $rows['city'];?></td>
									<td><?php echo $rows['emgphno'];?></td>
                								<td><b><?php echo $rows['rno'];?></b></td>

            								</tr>
								
								<?php
									}
	}
}
}?>
							</table>
						</section>
					</div>
				</div> 	
			</div>
		</div>
	</div>
<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>
</html>