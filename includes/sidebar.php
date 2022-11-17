<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					
<?php } else { ?>
				
				
				<li><a href="index.php"><i class="fa fa-users"></i> Warden Login</a></li>
				<li><a href="Bindex.php"><i class="fa fa-user"></i>Board Member Login</a></li>
				<?php } ?>

			</ul>
		</nav>