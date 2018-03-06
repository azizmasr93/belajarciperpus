 <div class="box box-solid box-primary">
 <div class="box-header">
     <h4 class="box-title">Data Buku</h4>
	<a class="btn btn-default pull-right" href="<?=site_url('admin/input/buku/') ?>" data-toggle="tooltip" title="Menambahkan Data Buku">
	<i class="fa  fa-plus"></i> Tambah Data</a>	
</div>
<div class="box-body">
	<table class="table table-hover">	
		<thead>
			<tr>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Jumlah Halaman</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Kategori Buku</th>
			</tr>
		</thead>
		<tbody>
			{buku}
			<tr>
				<td>{judul_buku}</td>
				<td>{pengarang}</td>
				<td>{jumlah_halaman}</td>
				<td>{penerbit}</td>
				<td>{tahun_terbit}</td>
				<td>{kategori}</td>
				<td>
					<!-- <a href="<?=site_url('admin/hapus/buku/{pk_buku}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Buku : {buku} ?')">Hapus</a>
					<a href="<?=site_url('admin/ubah/buku/{pk_buku}') ?>">Ubah</a> -->

					<a class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit Data" href="<?=site_url('admin/ubah/buku/{pk_buku}') ?>"><i class="glyphicon glyphicon-pencil"></i></a>
					<a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" href="<?=site_url('admin/hapus/buku/{pk_buku}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Buku : {judul_buku} ?')"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			{/buku}
		</tbody>
	</table>
</div>
</div>