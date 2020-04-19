<div class="container-fluid">
	<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus mr-2"></i> Tambah barang</button>

	<table class="table table-hover table-bordered mt-3">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php $no = 1 ?>
		<?php foreach($barang as $brg): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_brg ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stok ?></td>
				<td>
					<div class="btn btn-sm btn-info"><i class="fas fa-search-plus"></i></div>
				</td>
				<td>
					<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>
				</td>
				<td>
					<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/Data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
        	
        	<div class="form-group">
        		<label for="nama_brg">Nama Barang</label>
        		<input type="text" id="nama_brg" name="nama_brg" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="kategori">Kategori</label>
        		<input type="text" id="kategori" name="kategori" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="harga">Harga</label>
        		<input type="text" id="harga" name="harga" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="stok">Stok</label>
        		<input type="text" id="stok" name="stok" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="keterangan">Keterangan</label>
        		<input type="text" id="keterangan" name="keterangan" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="gambar">Gambar</label>
        		<input type="file" id="gambar" name="gambar" class="form-control">
        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
       </form>
    </div>
  </div>
</div>