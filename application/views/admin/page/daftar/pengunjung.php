 <div class="box box-solid box-primary">
 <div class="box-header">
     <h4 class="box-title">Data Pengunjung</h4>
	<a class="btn btn-default pull-right" href="<?=site_url('admin/input/pengunjung/') ?>" data-toggle="tooltip" title="Menambahkan Data Buku">
	<i class="fa  fa-plus"></i> Tambah Data</a>	
</div>
<div class="box-body">
	<table class="table table-hover">	
		<thead>
			<tr>
				<th>Tanggal Kunjungan</th>
				<th>Nama Pengunjung</th>
				<th>Buku</th>
			</tr>
		</thead>
		<tbody>
			{pengunjung}
			<tr>
				<td>{tanggal_kunjungan}</td>
				<td>{nama}</td>
				<td>{judul_buku}</td>
				<td>
					<!-- <a href="<?=site_url('admin/hapus/pengunjung/{pk_pengunjung}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Buku : {pengunjung} ?')">Hapus</a>
					<a href="<?=site_url('admin/ubah/pengunjung/{pk_pengunjung}') ?>">Ubah</a> -->

					<a class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit Data" href="<?=site_url('admin/ubah/pengunjung/{pk_pengunjung}') ?>"><i class="glyphicon glyphicon-pencil"></i></a>
					<a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" href="<?=site_url('admin/hapus/pengunjung/{pk_pengunjung}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Tanggal : {tanggal_kunjungan} ?')"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			{/pengunjung}
		</tbody>
	</table>
</div>
</div>