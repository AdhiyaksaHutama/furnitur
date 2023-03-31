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
	          <a class="nav-link" href="#">Tabel Barang</a>
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
	<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <form method="POST" enctype="multipart/form-data" action="{{ route('update',$result->id) }}">
    @csrf

    <!-- Nama Barang -->
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value ="{{$result->nama_barang}}">
    </div>

    <!-- SKU -->
    <div class="form-group">
        <label for="sku">SKU</label>
        <input type="text" class="form-control" id="sku" name="sku" value ="{{$result->sku}}" readonly>
    </div>

    <!-- Warna -->
    <div class="form-group">
        <label for="warna">Warna</label>
        <input type="text" class="form-control" id="warna" name="warna"  value ="{{$result->warna}}">
    </div>
  <!-- Gambar -->
    <div class="form-group">
        <label for="filenames" class="control-label">Gambar</label>
        <input id="filenames" type="file" class="form-control" name="filenames[]" value="json_decode({{$result->filenames}})" required multiple >
    </div>
    <!-- Category -->
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category" >
            <option value="">Pilih Category</option>
            <option value="Jati" {{ $result->category == 'Jati' ? 'selected' : '' }}>Jati</option>
            <option value="Jepara" {{ $result->category == 'Jepara' ? 'selected' : '' }}>Jepara</option>
            <option value="Kalimantan" {{ $result->category == 'Kalimantan' ? 'selected' : '' }}>Kalimantan</option>
        </select>
    </div>

    <!-- Flashsale -->
    <div class="form-group">
        <label for="flashsale">Flashsale</label>
        <select class="form-control" id="flashsale" name="flashsale">
            <option value="">Pilih</option>
            <option value="yes" {{ $result->flashsale == 'yes' ? 'selected' : '' }}>Yes</option>
            <option value="no" {{ $result->flashsale == 'no' ? 'selected' : '' }} >No</option>
        </select>
    </div>

    <!-- Harga -->
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value ="{{$result->harga}}" >
    </div>

    <!-- Harga Diskon -->
    <div class="form-group">
        <label for="harga_diskon">Harga Diskon</label>
        <input type="number" class="form-control" id="harga_diskon" name="harga_diskon" value ="{{$result->harga_diskon}}">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
<script>
    function updateSku() {
        var category = document.getElementById("category").value;
        var skuInput = document.getElementById("sku");

        if (category === "JT") {
            var randNum = Math.floor(Math.random() * 1000);
            skuInput.value = "MJ-JT-" + randNum;
          
           
        } else if (category === "JP") {
            var randNum = Math.floor(Math.random() * 1000);
            skuInput.value = "MJ-JP-" + randNum;
          
        } else if (category === "KN") {
            var randNum = Math.floor(Math.random() * 1000);
            skuInput.value = "MJ-KN-" + randNum;
        } else {
            skuInput.value = "MJ-";
        }
    }
</script>
		
    </body>
</html>