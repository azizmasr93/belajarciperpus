 <div class="box box-solid box-primary">
 <div class="box-header">
     <h4 class="box-title">Data Kategori</h4>
	<a class="btn btn-default pull-right" href="<?=site_url('admin/input/kategori/') ?>" data-toggle="tooltip" title="Menambahkan Data Kategori">
	<i class="fa  fa-plus"></i> Tambah Data</a>	
</div>
<div class="box-body">
	<table class="table table-hover">	
		<thead>
			<tr>
				<th>Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			{kategori}
			<tr>
				<td>{kategori}</td>
				<td>
					<!-- <a href="<?=site_url('admin/hapus/kategori/{pk_kategori}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Kategori : {kategori} ?')">Hapus</a>
					<a href="<?=site_url('admin/ubah/kategori/{pk_kategori}') ?>">Ubah</a> -->

					<a class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit Data" href="<?=site_url('admin/ubah/kategori/{pk_kategori}') ?>"><i class="glyphicon glyphicon-pencil"></i></a>
					<a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" href="<?=site_url('admin/hapus/kategori/{pk_kategori}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Kategori : {kategori} ?')"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			{/kategori}
		</tbody>
	</table>
</div>
</div>