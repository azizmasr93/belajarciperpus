{form_ubah}
	<legend>Form Input Buku</legend>
	{ubah}
	<div class="form-group">
		<label for="">judul buku</label>
		<input type="text" class="form-control" name="judul_buku" value="{judul_buku}" placeholder="Input Judul Buku">
	</div>
	<div class="form-group">
		<label for="">Pengarang</label>
		<input type="text" class="form-control" name="pengarang" value="{pengarang}" placeholder="Input Nama Pengarang">
	</div>
	<div class="form-group">
		<label for="">Jumlah Halaman</label>
		<input type="text" class="form-control" name="jumlah_halaman" value="{jumlah_halaman}" placeholder="Input Jumlah Halaman">
	</div>
	<div class="form-group">
		<label for="">Penerbit</label>
		<input type="text" class="form-control" name="penerbit" value="{penerbit}" placeholder="Input Penerbit">
	</div>
	<div class="form-group">
		<label for="">Tahun Terbit</label>
		<input type="date" class="form-control" name="tahun_terbit" value="{tahun_terbit}" placeholder="Input Tahun Terbit">
	</div>
	<div class="form-group">
		<label for="">Kategori</label>
		<select name="pk_kategori" class="form-control">
			<?php foreach ($kategori as $key => $value):?>
				<option value="<?=$value->pk_kategori?>"><?=$value->kategori?></option> 
			<?php endforeach ?>
		</select> 
	</div>
	{/ubah}
	<button type="submit" id="kirim_ajax" class="btn btn-primary">Submit</button>
</form>
