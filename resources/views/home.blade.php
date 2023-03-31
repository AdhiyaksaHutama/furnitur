<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Perusahaan Furniture</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Include Chart.js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

	<!-- Side Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Perusahaan Furniture</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Tabel User</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="tabel_barang">Tabel Barang</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Tabel Transaksi</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Tabel Cart</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- Content -->
    <div class="container">
    

        
    @if ($notification = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> {{ $notification }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        
         
         @endif
   
    </div>
	<div class="container-fluid mt-3">
       

		<div class="row">
			<!-- Jumlah Akun -->
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Jumlah Akun</h5>
						<p class="card-text display-4">10</p>
					</div>
				</div>
			</div>

			<!-- Jumlah Transaksi -->
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Jumlah Transaksi</h5>
						<p class="card-text display-4">10</p>
					</div>
				</div>
			</div>

			<!-- Jumlah Barang -->
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Jumlah Barang</h5>
						<p class="card-text display-4">10</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Chart -->
		<div class="row mt-3">
			<!-- Jumlah Akun Chart -->
			<div class="col-md-6">
				<canvas id="chartJumlahAkun"></canvas>
			</div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>