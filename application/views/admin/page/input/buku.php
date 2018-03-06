{form_input}
	<legend>Form Input Buku</legend>
	<div class="form-group">
		<label for="">Judul Buku</label>
		<input type="text" class="form-control" name="judul_buku" placeholder="Input Judul Buku">
	</div>
	<div class="form-group">
		<label for="">Pengarang</label>
		<input type="text" class="form-control" name="pengarang" placeholder="Input Pengarang">
	</div>
	<div class="form-group">
		<label for="">Jumlah Halaman</label>
		<input type="text" class="form-control" name="jumlah_halaman" placeholder="Input Jumlah halaman">
	</div>
	<div class="form-group">
		<label for="">Penerbit</label>
		<input type="text" class="form-control" name="penerbit" placeholder="Input Penerbit">
	</div>
	<div class="form-group">
		<label for="">Tahun Terbit</label>
		<input type="date" class="form-control" name="tahun_terbit" placeholder="Input Tahun terbit">
	</div>
	<!-- <div class="form-group">
		<label for="">Kategori Buku</label>
		<input type="text" class="form-control" name="kategori_buku" placeholder="Input Tanggal Kunjungan">
	</div> -->
	<div class="form-group">
		<label for="">Kategori</label>
		<select name="pk_kategori" class="form-control">
			<option value="">Pilih Kategori</option>
			{kategori}
				<option value = "{pk_kategori}">{kategori}</option>
			{/kategori}
		</select> 
	</div>
	<button type="submit" id="kirim_ajax" class="btn btn-primary">Submit</button>
</form>