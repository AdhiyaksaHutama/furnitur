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
	<div class="container-fluid mt-3">
    <table class="table table-bordered">
    @php $no = 1; @endphp
    <thead>

        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Sku</th>
            <th>Warna</th>
            <th>Gambar</th>
            <th>Category</th>
            <th>Flashsale</th>
            <th>
            <a href="{{ route('tabel_barang', ['sort' => 'harga']) }}">Harga</a>
          </th>
            <th>Harga Diskon</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($furnitures as $furniture)
        <tr>
            <td>{{$no++}}</td>
            <td>{{ $furniture->nama_barang }}</td>
            <td>{{ $furniture->sku }}</td>
            <td>{{ $furniture->warna }}</td>
            <td> <?php foreach (json_decode($furniture->filenames)as $picture) { ?>
                 <img src="{{ asset('/files/'.$picture) }}" style="height:120px; width:200px"/>
                <?php } ?>
           </td>
            <td>{{ $furniture->category }}</td>
            <td>{{ $furniture->flashsale }}</td>
            <td>{{ $furniture->harga }}</td>
            <td>{{ $furniture->harga_diskon }}</td>
            <td><a class="btn btn-primary" href="{{route('edit_barang', $furniture->id)}}">edit</a></td>
            <td><a class="btn btn-primary" href="{{route('delete_barang', $furniture->id)}}">delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
</div>
	<script>
        $('th[data-sort]').on('click', function() {
    var sort_by = $(this).data('sort');
    var url = '/furnitures?sort=' + sort_by;

    // Kirim permintaan HTTP dengan parameter sortir
    $.get(url, function(data) {
        // Perbarui tabel dengan data hasil sortir
        $('table tbody').html(data);
    });
});
    </script>
</body>
</html>