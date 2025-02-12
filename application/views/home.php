<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>Sistem Pendukung Keputusan Metode ROC dan OCRA</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@400;600;700;800&display=swap" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?= base_url('assets/') ?>img/favicon.ico" type="image/x-icon">
</head>

<body>
<!-- <body class="bg-gradient-warning bg-opacity-75"> -->
	<!-- <nav class="navbar navbar-expand-lg navbar-dark py-1 font-weight-bold alert-warning shadow-lg"> -->
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: white; box-shadow: 0px -24px 60px rgba(0, 0, 0, 0.25);">
		<div class="container d-flex bd-highlight">
			<!-- <a class="p-2 flex-grow-1 bd-highlight navbar-brand text-dark" href="<?= base_url('/'); ?>"> <i class="fas fa-fw fa-database rotate-n-15 mr-1"></i>SPK Pemilihan Perumahan Terbaik Metode ROC & OCRA </a> -->
			<a class="p-2 flex-grow-1 bd-highlight navbar-brand text-dark" href="<?= base_url('/'); ?>"> <i class="fas fa-fw fa-database rotate-n-15 mr-1"></i>SIPEKA</a>

			<button class="bg-info navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="p-2 bd-highlight collapse navbar-collapse" style="flex-grow: 0;" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto my-auto">
					<!-- <li class="navbar-active" ><a href="" style="padding: 10px;">Home</a></li> -->
					<li class="navbar active"><a href="" style="padding: 10px; ">Beranda</a></li>
					<li class="navbar"><a href="" style="padding: 10px;">Cari Rumah</a></li>
					<li class="navbar"><a href="" style="padding: 10px; margin-right: 50px;">Tentang</a></li>

					<li class="nav-item" style="padding-top: 10px;">
						<a href="<?= base_url('Login/login'); ?>" class="btn btn-md" role="button" aria-disabled="true" style="background-color: #36b9cc; color: white;">Login</a>

						<!-- <a class="text-dark nav-link active" href="<?= base_url('Login/login'); ?>">Login </a> -->
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="content container" style=" margin-top: 40px;">
		<div class="row mx-auto">
			<div class="kiri col-6 my-auto" style="font-family: 'Anek Malayalam', sans-serif;">
				<div class="konten">
					<span class="atas">Cari Rumah</span><br>
					<span class="tengah">Terbaik</span><br>
					<span class="bawah">Untuk Anda</span><br>
				</div>
				
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

				<a href="<?= base_url('Login/login'); ?>" class="btn btn-md" role="button" aria-disabled="true" style="background-color: #36b9cc; color: white;">Mulai Sekarang</a>

			</div>
			<div class="kanan col-6">
				<center>
                    <img src="<?= base_url('assets/') ?>foto/img11.png" width="100%">
                </center>
			</div>
		</div>	
	</div>



	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
</body>

</html>