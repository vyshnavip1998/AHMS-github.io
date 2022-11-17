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

	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
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
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
<br>
<br>
<br>
<br><br><br><br>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
            				<div class="col-lg-3 col-md-6">
                				<div class="panel panel-primary">
                   					 <div class="panel-heading">
                        						<div class="row">
                            							<div class="col-xs-3">
							                                <i class="fa fa-users fa-5x"></i>
						                                </div>
					                               <div class="col-xs-9 text-right">
						                                <div class="huge">
									<!--<?php echo   $GLOBALS['totals'][1];?>-->
								</div>
                                						<div>
									Add Inmate
								</div>
                            						</div>
                        					</div>
                   				 </div>
                    				<a href="registration.php">
                        					<div class="panel-footer">
                            						<span class="pull-left">
								View Details
							</span>
                            						<span class="pull-right">
								<i class="fa fa-arrow-circle-right"></i>
							</span>
                            						<div class="clearfix"></div>
                       					 </div>
                   				 </a>
                			</div>
            			</div>
            			<div class="col-lg-3 col-md-6">
                			<div class="panel panel-green">
                    				<div class="panel-heading">
                        					<div class="row">
                            						<div class="col-xs-3">
                                						<i class="fa fa-users fa-5x"></i>
                            						</div>
                            						<div class="col-xs-9 text-right">
                               							 <div class="huge">
									<!--<?php echo   $GLOBALS['totals'][0];?>-->
								</div>
                                						<div>Vacate Inmate</div>
                            						</div>
                       					 </div>
                    				</div>
                   				<a href="vacate.php">
                        					<div class="panel-footer">
                            						<span class="pull-left">View Details</span>
                            						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            						<div class="clearfix"></div>
                        					</div>
                    				</a>
                			</div>
           			 </div>
            			<div class="col-lg-3 col-md-6">
               				 <div class="panel panel-yellow">
                    				<div class="panel-heading">
                        					<div class="row">
                            						<div class="col-xs-3">
                                						<i class="fa fa-building fa-5x"></i>
                            						</div>
                            						<div class="col-xs-9 text-right">
                                					<div class="huge">
								<!--<?php echo   $GLOBALS['totals'][2];?>-->
							</div>
                                					<div>View Room</div>
                            					</div>
                        				</div>
                    			</div>
                    			<a href="wview.php">
                       				 <div class="panel-footer">
                            					<span class="pull-left">View Details</span>
                            					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            					<div class="clearfix"></div>
                        				</div>
                    			</a>
                		</div>
            		</div>				<div class="col-lg-3 col-md-6">
                			<div class="panel panel-green">
                    				<div class="panel-heading">
                        					<div class="row">
                            						<div class="col-xs-3">
                                						<i class="fa fa-users fa-5x"></i>
                            						</div>
                            						<div class="col-xs-9 text-right">
                               							 <div class="huge">
									<!--<?php echo   $GLOBALS['totals'][0];?>-->
								</div>
                                						<div>Record Fees </div>
                            						</div>
                       					 </div>
                    				</div>
                   				<a href="payment.php">
                        					<div class="panel-footer">
                            						<span class="pull-left">View Details</span>
                            						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            						<div class="clearfix"></div>
                        					</div>
                    				</a>
                			</div>
           			 </div>
<div class="col-lg-3 col-md-6">
                		<div class="panel panel-red">
                    			<div class="panel-heading">
                        				<div class="row">
                            					<div class="col-xs-3">
                                					<i class="fa fa-maxcdn fa-5x"></i>
                            					</div>
                            					<div class="col-xs-9 text-right">
                                					<div class="huge">
								<!--<?php echo   $GLOBALS['totals'][3];?>-->
							</div>
                                				<div>Fees Preview</div>
                            				</div>
                        			</div>
                    		</div>
                    		<a href="payview.php">
                        			<div class="panel-footer">
                           			 	<span class="pull-left">View Details</span>
                            				<span class="pull-right">
						<i class="fa fa-arrow-circle-right"></i>
					</span>
                            				<div class="clearfix"></div>
                        			</div>
                    		</a>
               		 </div>
            	</div>
        	</div>
            		
	<br><br><br><br>
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

