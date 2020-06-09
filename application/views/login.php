<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PiniBox - Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css">
	
	<!-- Bootstrap Scripts -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- SweetAlert -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/sweetalert2.min.css">
	<script src="<?= base_url() ?>assets/js/sweetalert2.min.js"></script>
	
	<style>

	/*Material Icons */
	.mdi::before {
		font-size: 24px;
		line-height: 14px;
	}
	.btn .mdi::before {
		position: relative;
		top: 4px;
	}
	.btn-xs .mdi::before {
		font-size: 18px;
		top: 3px;
	}
	.btn-sm .mdi::before {
		font-size: 18px;
		top: 3px;
	}
	.dropdown-menu .mdi {
		width: 18px;
	}
	.dropdown-menu .mdi::before {
		position: relative;
		top: 4px;
		left: -8px;
	}
	.nav .mdi::before {
		position: relative;
		top: 4px;
	}
	.navbar .navbar-toggle .mdi::before {
		position: relative;
		top: 4px;
		color: #FFF;
	}
	.breadcrumb .mdi::before {
		position: relative;
		top: 4px;
	}
	.breadcrumb a:hover {
		text-decoration: none;
	}
	.breadcrumb a:hover span {
		text-decoration: underline;
	}
	.alert .mdi::before {
		position: relative;
		top: 4px;
		margin-right: 2px;
	}
	.input-group-addon .mdi::before {
		position: relative;
		top: 3px;
	}
	.navbar-brand .mdi::before {
		position: relative;
		top: 2px;
		margin-right: 2px;
	}
	.list-group-item .mdi::before {
		position: relative;
		top: 3px;
		left: -3px
	}

	/*End of material Icons*/


	body{
		font-family: 'Open Sans', sans-serif;
		background-color: #f9fcff;
	}

	.card-shadow{
		box-shadow: 0px 7px 7px 0px #00568e17;
	}

	.card-padding{
		padding: 40px 30px 40px 30px;
	}

	.piniblue{
		color: #11a3e6 !important;
	}

	a .text-primary:hover{
		color: white !important;
	}

	.input-group-text{
		padding-top: 5px; 
		padding-bottom: 2px;
	}

	.btn-primary{
		background-color: #11a3e6 !important;
		border-color: #11a3e6 !important;
	}

	.bg-primary{
		background-color: #11a3e6 !important;
		border-color: #11a3e6 !important;
	}

	.btn-outline-primary{
		border-color:  #11a3e6 !important;
		color:  #11a3e6 !important;
	}

	.btn-outline-primary:hover{
		background-color:  #11a3e6 !important;
		color: white !important;
	}

</style>
</head>
<body>
	<!-- Desktop Interface -->
	<div class="desktop-i mt-3">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-5 offset-lg-1 mt-4">
					<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="card card-shadow mt-4">
								<div class="card-body card-padding">

									<div class="row">
										<div class="col-md-12 col-lg-12">
											<div class="row">
												<div class="col-md-2 col-sm-3 col-lg-3 d-none d-md-block d-lg-block d-sm-none">
													<img src="<?= base_url() ?>assets/app-icons/ic-pinibox.svg" class="img-fluid" width="100%">
												</div>

												<div class="col-xs-12 d-block d-md-none d-lg-none d-sm-none">
													<img src="<?= base_url() ?>assets/app-icons/ic-pinibox.svg" class="ml-1 img-fluid" width="40%">
												</div>

												<div class="col-md-6 col-lg-6 mt-2 col-xs-6">
													<h3 class="piniblue"><b>PiniBox</b></h3>
													<p class="text-secondary">Kotak Saran Digital</p>
												</div>
											</div>
										</div>

										<div class="col-md-12 col-lg-12 mt-4 mb-4">
											<form method="POST" action="<?= site_url() ?>login/verify">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="mdi mdi-account" aria-hidden="true"></i></span>
													</div>
													<input type="text" name="input-username" class="form-control" placeholder="Masukan username" aria-label="Username" aria-describedby="basic-addon1" required>
												</div>

												<div class="input-group mb-4">
													<div class="input-group-prepend">
														<span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="mdi mdi-lock"></i></span>
													</div>
													<input type="password" name="input-password" class="form-control" placeholder="Masukan password" aria-label="Username" aria-describedby="basic-addon1" required>
												</div>


												<div class="input-group mb-3">
													<button type="submit" class="btn btn-primary form-control"><b>Login</b></button>
													<br> <br>
												</div>

												<div class="input-group mb-3 text-center">
													<p class="mb-0 text-secondary">Belum punya akun?</p>
												</div>

												<div class="input-group">
													<a href="#" class="btn btn-outline-primary form-control"><b>Daftar Sekarang</b></a>
												</div>
											</form>
										</div>

									</div>

								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 mt-4 text-center text-secondary">
							<p class="mt-4 small"><b>OSIS SMKN 3 Bandung</b> &copy 2020</p>
						</div>

					</div>

				</div>


				<div class="col-md-5 offset-md-1 col-lg-5 offset-lg-1 mt-4 d-none d-md-none d-lg-block d-sm-none">
					<div class="row">
						<div class="col-md-12 col-lg-12 mt-4 mb-4">
							<img src="<?= base_url() ?>assets/images/feedback-illust.svg" class="img-fluid">
						</div>
						<div class="col-md-12 col-lg-12 text-center mtmb-4">
							<h3><b>Biarkan kami tau apa yang terjadi</b></h3>
							<br>
							<p class="text-secondary">Program ini dilakukan sebagai upaya mendukung transparansi antara siswa dengan pihak sekolah</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php if( $this->session->flashdata('login_message') ) : ?>
		<script>
			Swal.fire({
				title: '<strong>Terjadi Kesalahan</strong>',
				icon: 'warning',
				html: `<?= $this->session->flashdata('login_message'); ?>`,
				showCloseButton: true,
				focusConfirm: false,
				confirmButtonText:
				'Kembali',
			})
		</script>
	<?php endif;?>
</body>
</html>