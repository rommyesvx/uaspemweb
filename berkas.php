<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/adminlte.min.css">
	<title></title>
	<style type="text/css">
		html, body {
			max-width: 100%;
			overflow-x: hidden;
		}
	</style>
</head>
<body>
	<div class="row flex-nowrap">
		<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
			<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
				<a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
					<span class="fs-5 d-none d-sm-inline">Menu</span>
				</a>
				<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
					<li class="nav-item">
						<a href="#" class="nav-link align-middle px-0">
							<i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kartu Rencana Studi</span>
						</a>
					</li>
					<li>
						<a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
							<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Transkrip</span> 
						</a>
						<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
						</ul>
					</li>
					<li>
						<a href="#" class="nav-link px-0 align-middle">
							<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Berkas</span> 
						</a>
					</li>
					<li>
						<a href="ok" class="nav-link px-0 align-middle">
							<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Presensi</span> 
						</a>
					</li>
				</ul>
				<hr>
				<div class="dropdown pb-4">
					<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="d-none d-sm-inline mx-1">Nama Akun</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
						<li><a class="dropdown-item" href="#">New project...</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<h3>Pengajuan Berkas</h3>
			<div class="form-group">
				<div class="form-row">
					<div class="col mt-3" style="margin-left: 100px; margin-right: 100px;">
						<div class="row border-dark border w-100" onclick="changeClass(this)" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
							<div class="col-sm-8 pl-3 mt-3 mb-3">
								<p class="font-weight-bold" id="tes">
									Surat Pengantar <br><small class="font-weight-light">Klik untuk melanjutkan pemilihan kategori pengajuan surat</small>
									<a href="suratpengantar.php" class="stretched-link"></a>
								</p>
							</div>
							<div class="col-sm-4 text-right mt-3">
								<img src="images/file.png" style="width: 30%;">
							</div> 
						</div>
						<div class="row border-dark border mr-3 mt-4 w-100" onclick="changeClass(this)" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
							<div class="col-sm-8 pl-3 mt-3 mb-3">
								<p class="font-weight-bold">
									Surat Keterangan<br><small class="font-weight-light">Klik untuk melanjutkan pemilihan kategori pengajuan surat</small>
									<a href="suratketerangan.php" class="stretched-link"></a>
								</p>
							</div>
							<div class="col-sm-4 text-right mt-3">
								<img src="images/documents.png" style="width: 30%;">
							</div>
						</div>
						<div class="row border-dark border mr-3 mt-4 w-100" onclick="changeClass(this)" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
							<div class="col-sm-8 pl-3 mt-3 mb-3">
								<p class="font-weight-bold">
									Surat Rekomendasi<br><small class="font-weight-light">Klik untuk melanjutkan pemilihan kategori pengajuan surat</small>
									<a href="suratrekomendasi" class="stretched-link"></a>
								</p>
							</div>
							<div class="col-sm-4 text-right mt-3">
								<img src="images/folder.png" style="width: 30%;">
							</div>
						</div>
						<div class="row border-dark border mr-3 mt-4 w-100" onclick="changeClass(this)" style="border-width: 1px !important; border-radius: 20px; padding-bottom: 20px;">
							<div class="col-sm-8 pl-3 mt-3 mb-3">
								<p class="font-weight-bold">
									Surat Lainnya<br><small class="font-weight-light">Klik untuk melanjutkan pemilihan kategori pengajuan surat</small>
									<a href="suratlainnya.php" class="stretched-link"></a>
								</p>
							</div>
							<div class="col-sm-4 text-right mt-3">
								<img src="images/paperwork.png" style="width: 30%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>