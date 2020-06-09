	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PiniBox Siswa - Dashboard</title>
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

		a.text-primary:hover{
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

		.badge-primary{
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

		.navbar-white{
			background-color: white;
			box-shadow: 0px 7px 7px 0px #00568e17;
		}

		input, textarea, select{
			border-color: #d6d6d6 !important;

		}

		input:focus, textarea:focus, select:focus{
			border: none;
			outline: none;
			box-shadow: 0px 7px 7px 0px #00568e17;
		}

	</style>
</head>
<body>

	<div class="desktop-i">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-white fixed-top">
			<a class="navbar-brand text-secondary text-center" href="#">
				<img src="<?= base_url() ?>assets/app-icons/ic-pinibox.svg" class="img-fluid" width="20%"> PiniBox
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

				</ul>
				<form class="form-inline my-2 my-lg-0 mr-4">
					<a href="<?= site_url() ?>logout" class="btn btn-light mr-4"><i class="mdi mdi-logout-variant mr-2"></i>Keluar</a>
				</form>
			</div>
		</nav>
		<!-- End Of Navbar -->


		<div class="container" style="margin-top: 100px;">
			<div class="row">
				<div class="col-lg-8">

					<div class="row">
						<div class="col-lg-12">
							<h6><b>Sampaikan Masukan</b></h6>
						</div>
						<div class="col-lg-12">
							<div class="card mt-2">
								<div class="card-body card-shadow">

									<div class="row mt-2">
										<div class="col-xl-8">
											<form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>siswa/feedback/sent">

												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="mdi mdi-format-title" aria-hidden="true"></i></span>
													</div>
													<input type="text" name="input-judul" class="form-control" placeholder="Judul Masukan" aria-label="Username" aria-describedby="basic-addon1" required>
												</div>

												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-primary text-white"><i class="mdi mdi-clipboard-text"></i></span>
													</div>
													<textarea class="form-control" aria-label="With textarea" rows="5" placeholder="Deskripsikan masukan kamu" required name="input-deskripsi"></textarea>
												</div>

												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<span class="input-group-text bg-primary text-white" id="inputGroupFileAddon01"><i class="mdi mdi-folder-image"></i></span>
													</div>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="input-lampiran">
														<label class="custom-file-label" for="inputGroupFile01">Ambil Gambar</label>
													</div>
												</div>

											</div>

											<div class="col-xl-4">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text bg-primary text-white" for="inputGroupSelect01"><i class="mdi mdi-arrow-down-drop-circle"></i></label>
													</div>
													<select class="custom-select" id="inputGroupSelect01" name="input-kategori" required>
														<option value="1">Saran</option>
														<option value="2">Laporan</option>
													</select>
												</div>


												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text bg-primary text-white" for="inputGroupSelect01"><i class="mdi mdi-account-circle"></i></label>
													</div>
													<select class="custom-select" id="inputGroupSelect01" name="input-anonim" required>
														<option value="0">Tampilkan Identitas</option>
														<option value="1">Kirim Anonim</option>
													</select>
												</div>

												<div class="input-group mb-3">
													<button type="submit" class="btn btn-primary form-control mt-3">Kirim</button>
												</div>


											</form>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-12 mt-4 mb-4">
							<div class="row">
								<div class="col-lg-12">
									<h6><b>Laporan dan Saranku</b></h6>
								</div>
							</div>
							<div class="row">

								<?php if( $dataFeedback ) : ?>
									<?php foreach( $dataFeedback as $feeds ) : ?>
										<div class="col-lg-6 mt-4">
											<div class="card mb-2" style="min-height: 420px; max-height: 420px; overflow: hidden;">
												<img class="card-img-top " width="100%;" src="<?= base_url() ?>images/feedback-images/<?= $feeds['lampiran_feedback'];?>" alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title">
														<?= $feeds['judul_feedback'] ?>
													</h5>

													<span href="#" class="badge badge-light p-2 mb-2">
														<?= ($feeds['jenis_feedback'] == 1) ? 'Saran' : 'Laporan' ?>
													</span>

													<?= ($feeds['status_feedback'] == 1) 

													? '<span class="badge badge-light text-success p-2">Terverifikasi</span>' 
													: 

													'<span class="badge badge-light text-primary p-2">Terkirim</span>' ?>

													<a href="#!" class="badge badge-primary p-2 ml-3 ubah-feedback" data-id-feeds="<?= $feeds['id_saran'] ?>" data-toggle="modal" data-target=".modal-edit-feedback">
														Ubah
													</a>

													<a href="#!" class="badge badge-danger p-2 hapus-feedback"  data-id-feeds="<?= $feeds['id_saran'] ?>" data-toggle="modal" data-target=".modal-remove-feedback">
														Hapus
													</a>

													<feedsdata id="<?= $feeds['id_saran'] ?>" judul="<?= $feeds['judul_feedback'] ?>" deskripsi="<?= $feeds['deskripsi_feedback'] ?>" kategori="<?= $feeds['jenis_feedback'] ?>" is-anonim="<?= $feeds['feedback_anonym'] ?>" lampiran="<?= $feeds['lampiran_feedback'] ?>"></feedsdata>

													<p class="card-text mt-2 small"><?= ( strlen($feeds['deskripsi_feedback'])  < 120) ? $feeds['deskripsi_feedback'] : substr($feeds['deskripsi_feedback'], 0, 120) . " ..." ?></p>
													<p class="card-text"><small class="text-muted">Dikirim pada <i><?= date('d M Y', strtotime($feeds['tanggal_feedback']))  ?></i></small></p>
												</div>
											</div>
										</div>
									<?php endforeach?>
									<?php else: ?>



									<?php endif; ?>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4">
						<div class="row" style="position: fixed; width: 25%">
							<div class="col-lg-12 mt-2">
								<h6><b>Profileku</b></h6>
							</div>
							<div class="col-lg-12">
								<div class="card card-shadow">
									<div class="card-body">
										dalkm
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>

		<?php if( $this->session->flashdata('dashboard_message') ) : ?>
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




		<!-- Edit  -->

		<!-- Large modal -->

		<div class="modal fade modal-edit-feedback" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="mb-0">Edit Masukan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>


					<div class="modal-body">


						<div class="row mt-2">
							<div class="col-xl-8">
								<form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>siswa/feedback/update">

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="mdi mdi-format-title" aria-hidden="true"></i></span>
										</div>
										<input type="text" name="input-ubah-judul" class="form-control" placeholder="Judul Masukan" aria-label="Username" aria-describedby="basic-addon1" required>
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary text-white"><i class="mdi mdi-clipboard-text"></i></span>
										</div>
										<textarea class="form-control" aria-label="With textarea" rows="5" placeholder="Deskripsikan masukan kamu" required name="input-ubah-deskripsi"></textarea>
									</div>

									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary text-white" id="inputGroupFileAddon01"><i class="mdi mdi-folder-image"></i></span>
										</div>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="input-ubah-lampiran">
											<label class="custom-file-label" for="inputGroupFile01">Ambil Gambar</label>
										</div>
									</div>

								</div>

								<div class="col-xl-4">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary text-white" for="inputGroupSelect01"><i class="mdi mdi-arrow-down-drop-circle"></i></label>
										</div>
										<select class="custom-select" id="inputGroupSelect01" name="input-ubah-kategori" required>
											<option name="ubah-kategori-1" value="1">Saran</option>
											<option name="ubah-kategori-2" value="2">Laporan</option>
										</select>
									</div>


									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary text-white" for="inputGroupSelect01"><i class="mdi mdi-account-circle"></i></label>
										</div>
										<select class="custom-select" id="inputGroupSelect01" name="input-ubah-anonim" required>
											<option name="ubah-anonim-0" value="0">Tampilkan Identitas</option>
											<option name="ubah-anonim-1" value="1">Kirim Anonim</option>
										</select>
									</div>

									<div class="input-group mb-3">
										<input type="hidden" name="input-url-lampiran" value="">
										<input type="hidden" name="input-id-saran" value="">
										<button type="submit" class="btn btn-primary form-control mt-3">Kirim</button>
									</div>


								</form>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>


		<!-- Remove -->

		<!-- md Modal -->


		<div class="modal fade modal-remove-feedback" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="mb-0">Hapus Masukan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>


					<div class="modal-body">


						<div class="row mt-2">
							<div class="col-xl-12">
								<h4 class="remove-judul-saran"></h4>
								<p>Apakah anda yakin akan <span class="text-danger"><b>Menghapus Masukan</b></span> ini?</p>
								<form method="POST" action="<?= site_url() ?>siswa/feedback/remove">

									
									<div class="input-group mb-3">
										<input type="hidden" name="input-hapus-id-saran" value="">
										<button type="submit" class="btn btn-danger form-control mt-3">Hapus</button>
									</div>


								</form>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>




	<script>
		$(document).ready(function(){
			$(document).on('click', '.ubah-feedback', function(){
				let id = $(this).data('id-feeds');
				let feedsdata = $(`feedsdata[id=${id}]`);
				let data = {'judul' : feedsdata.attr('judul'),
				'deskripsi' : feedsdata.attr('deskripsi'),
				'kategori' : feedsdata.attr('kategori'),
				'is_anonim' : feedsdata.attr('is-anonim'),
				'lampiran': feedsdata.attr('lampiran'),
				'id_saran' : id}; 

				$(`option[name=ubah-anonim-${data.is_anonim}]`).removeAttr('selected');
				$(`option[name=ubah-kategori-${data.kategori}]`).removeAttr('selected');

				$('input[name=input-ubah-lampiran]').val('');
				$('input[name=input-ubah-judul]').val(data.judul);
				$('input[name=input-url-lampiran]').val(data.lampiran);
				$('input[name=input-id-saran]').val(data.id_saran);
				$('textarea[name=input-ubah-deskripsi]').val(data.deskripsi);
				$(`option[name=ubah-anonim-${data.is_anonim}]`).attr('selected', 'true');
				$(`option[name=ubah-kategori-${data.kategori}]`).attr('selected', 'true');
			});


			$(document).on('click', '.hapus-feedback', function(){
				let id = $(this).data('id-feeds');
				let judul = $(`feedsdata[id=${id}]`).attr('judul');
				$('.remove-judul-saran').html(`<b>${judul}</b>`);
				$('input[name=input-hapus-id-saran]').val(id);
			});
		});
	</script>

</body>
</html>