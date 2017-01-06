<!DOCTYPE html>
<?php 
include 'koneksi_database.php';
    $data = mysqli_query($koneksi, "SELECT suhu, kontrol FROM tabel_fan WHERE date IN (SELECT max(date) FROM tabel_fan)");
    foreach ($data as $row){
        $suhu= $row['suhu'];
        $kontrol= $row['kontrol'];
    }
    ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaturan Kipas Angin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- iCheck -->
	<link href="iCheck/square/yellow.css" rel="stylesheet">
	
	<!-- rangeslider -->
	<link href="rangeslider/rs/rangeslider.css" rel="stylesheet">
	
	
</head>

<body style="background:orange">

    <div class="container" style="background:white;padding-top:5%;padding-bottom:5%">
        <!-- Projects Row -->
        <div class="row" >
            <div class="col-md-6 portfolio-item" align="center"
			style="background:#1B7E5A;margin:0px;margin-top:7%;">
               <!--cetak suhu disini-->
			   <label style="font-size:500%;color:white"><?php echo $suhu; ?>°C</label>
            </div>
            <div class="col-md-6 portfolio-item">
                <form action="input-aksi.php" method="post">
					<div style="margin-bottom:2%">
						<b><h3 style="color:#1B7E5A;font-size:35px">Pengaturan Kipas Angin</h3></b>
						<hr>
					</div>
					<div style="margin-bottom:2%">
						 <input type="radio"  name="control" value="0" <?=$kontrol == '0' ? ' checked="checked"' : '';?>>
						<label style="font-size:150%">Otomatis</label><br>
					</div>
					<div>
						<input id="manual" type="radio" name="control" value="m">
						<label style="font-size:150%">Manual</label>
						<div id="i" style="margin-left:7%" hidden>
							<label style="font-size:150%;color:orange;margin-right:2%" id="n">0</label>
							<input type="range" min=0 max=3 value="1"/>
							<img style="margin-left:2%" id="g" src="images/00.png"/>
						</div>
					</div>
					<input type="button" value="OK" class="btn btn-block"
					style="margin-top:2%;background:#1B7E5A; border-color:#1B7E5A;color:#FFFFFF;margin-top:3%"/>
				</form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

 <!-- Footer -->
        <footer style="margin-top:1%">
            <div class="row">
                <!--<center><label style="color:#1B7E5A">Copyright &copy; Your Website 2014</label><center> -->
            </div>
            <!-- /.row -->
        </footer>

<script src="iCheck/icheck.js"></script>
<script src="js/setting.js"></script>
<script src="rangeslider/rs/rangeslider.js"></script>

</html>
