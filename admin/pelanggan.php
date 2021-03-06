<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ ?>
<?php include "koneksi.php"; ?>

<html>
<head>
	<title>Admin | AzindoRayap </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><strong><?php echo $_SESSION['username']; ?></strong></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-dice"></i> <span>Post</span></a></li>
						<li><a href="pelanggan/" class=""><i class="lnr lnr-envelope"></i> <span>Pelanggan</span></a></li>
						<li><a href="harga/" class=""><i class="lnr lnr-dice"></i> <span>Harga</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Typography</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
						
						</table>
                        <form method="POST" action="post_proses.php">
							<table class="table">
                            <tr>
                            	<td>Judul</td>
                                <td> <input type="text" name="judul"></td>
                            </tr>
                            <tr>
                            	<td>Gambar</td>
                                <td> <input type="file" name="gambar"></td>
                            </tr>
                            <tr>
                            	<td>Isi</td>
                                <td><textarea rows="3" name="isi_post"></textarea></td>
                            </tr>
                            <tr>
                            	<td><button type="submit">Publish</button></td>
                            </tr>
                            </table>
                          </form>
						  <hr>
						  <table class="table">
							<tr><td>Judul</td><td>___</td></tr>
							</table>
							<hr>
							<p>Appropriately benchmark web-enabled bandwidth and functionalized leadership skills. Conveniently syndicate global opportunities without interactive methods of empowerment. Collaboratively conceptualize user-centric e-tailers for visionary methodologies. Dramatically myocardinate. Phosfluorescently disintermediate unique resources whereas reliable mindshare. Competently optimize client-focused infrastructures vis-a-vis e-business human capital. Uniquely formulate sustainable benefits whereas functional results. Energistically myocardinate bleeding-edge e-business.</p>
							<hr>
							<p class="text-muted"><code>.text-muted</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-primary"><code>.text-primary</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-success"><code>.text-success</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-info"><code>.text-info</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-warning"><code>.text-warning</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<p class="text-danger"><code>.text-danger</code> Convey meaning through color with a handful of emphasis utility classes.</p>
							<hr>
							<p>Make a paragraph stand out by adding <code>.lead</code></p>
							<p class="lead">Objectively re-engineer maintainable total linkage after proactive intellectual capital. Dynamically evolve best-of-breed e-services for user-centric customer.</p>
							<hr>
							<div class="well">
								<p class="text-left"><code>.text-left</code> Left aligned text.</p>
								<p class="text-center"><code>.text-center</code> Center aligned text.</p>
								<p class="text-right"><code>.text-right</code> Right aligned text.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>

<?php 
}else{
header("location:login.php");
}
?>