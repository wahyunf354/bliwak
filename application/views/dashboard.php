<div class="container-fluid">

	<!-- Slider -->
	<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	        <img src="..." class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="..." class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="..." class="d-block w-100" alt="...">
	    </div>
	  </div>
	</div> -->
	<!-- akhir Slider -->

	<!-- Content Product -->
 	<div class="row">
 		<?php foreach($barang as $brg): ?>
			<div class="card ml-3 mb-3" style="width: 16rem;">
			  <img src="<?php echo base_url()."/uploads/".$brg->gambar ?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h6 class="card-title"><?php echo $brg->nama_brg ?></h6>
			    <span class="badge badge-info mb-3">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></span>
			    <a href="#" class="btn btn-primary btn-sm">Tambah ke keranjang</a>
			    <a href="#" class="btn btn-info btn-sm">Detail</a>
			  </div>
			</div>
 		<?php endforeach; ?>
 	</div>
	<!-- Akhir Content Product -->
</div>