<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ ?>
<?php
		  if (isset($_GET['hello'])) {
			include '../koneksi.php';
			$sql = mysqli_query($connect,"UPDATE pelanggan set status='lama' WHERE status='baru';");
		  }
		?>
<html>
<head>
	<title>Admin | AzindoRayap </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
	<script type="text/javascript" src="../pelanggan/jquery.js"></script>
	  <script type="text/javascript">
	   function ambilKomentar(){
	   $.ajax({
		  type: "POST",
		  url: "../pelanggan/cek.php",
		  dataType:'json',
		  success: function(response){
		  if(response!="0"){
		   $("#jumlah").text(response);
			$(".buble").css("background" , "#e02424");
		  }else{
		  $(".buble").css("background" , "transparent	");
		 }
		 timer = setTimeout("ambilKomentar()",5000);
		 }});  
	  }
	  $(document).ready(function(){
	   ambilKomentar();
	  });
	  </script>
	<script>
	function cekInputan(){
	var kondisi= true;
		if(document.form1.tanggal.value == ""){
			document.getElementById("luasmissing").style.visibility = "visible";
			kondisi = false;
		}else{
			document.getElementById("luasmissing").style.visibility = "hidden";
			}

		if(document.form1.isi_laporan.value == ""){
        document.getElementById("tigamissing").style.visibility = "visible";
		kondisi = false;
		}else{
        document.getElementById("tigamissing").style.visibility = "hidden";
		}
		
	return kondisi;
	}
	
	
	</script>
</head>

<body>
		<?php
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		?>
		<?php
		// Load file koneksi.php
		include "../koneksi.php";
		// Ambil data id yang dikirim oleh index.php melalui URL
		$id_laporan = $_GET['id_laporan'];
		// Ambil Data yang Dikirim dari Form
		
		$query = "SELECT * FROM laporan WHERE id_laporan='".$id_laporan."'";
			$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
			$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
			 $breaks = array("<br />","<br>","<br/>");  
			$data['isi_laporan'] = str_ireplace($breaks, "", $data['isi_laporan']);
		 
		?>

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="../index.php"><img src="../assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><span><strong><?php echo $_SESSION['username']; ?></strong></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="../ganti-password"><i class="lnr lnr-cog"></i> <span>Ganti Password</span></a></li>
								<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
						<li><a href="../index.php" class=""><i class="lnr lnr-text-align-left"></i> <span>Post</span></a></li>
						<li><a href="../pelanggan/index.php?hello=true" class=""><i class="lnr lnr-envelope"></i>Pelanggan <span class='buble' id="jumlah"></span></a></li>
						<li><a href="../harga-pra/" class=""><i class="lnr lnr-tag"></i> <span>Harga Pra</span></a></li>
						<li><a href="../harga-pasca/" class=""><i class="lnr lnr-tag"></i> <span>Harga Pasca</span></a></li>
						<li><a href="index.php" class="active"><i class="lnr lnr-users"></i> <span>Member Area</span></a></li>
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
					<h3 class="page-title">Edit</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
							<form method="POST" action="proses_edit.php?id_laporan=<?php echo $id_laporan; ?>" name="form1" onSubmit="return cekInputan();">
							<table class="table">
                            <tr>
                            	<td width="20%">Tanggal</td>
                                <td width="60%"> <input type="text" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>" ></td>
                                <td width="20%"><p id="luasmissing" style="color:black; font-size:small; visibility:hidden;">Masukkan luas dengan benar</p></td>
                            </tr>
                            <tr>
                            	<td>Isi Laporan</td>
                                <td> <textarea rows="8" cols="400" name="isi_laporan" class="form-control"><?php echo $data['isi_laporan']; ?></textarea></td>
								<td width="40%"><p id="tigamissing" style="color:black; font-size:small; visibility:hidden;">Masukkan Harga 3 tahun</p></td>
                            </tr>
                            <tr>
                            	<td colspan="3"><button type="submit">Update</button></td>
                            </tr>
                            </table>
                          </form>
						  <hr>
							<a href="input.php?username_member=<?php echo $data['username_member']; ?>">Kembali</a>
							
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
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
</body>

</html>

<?php 
}else{
header("location:../login.php");
}
?>