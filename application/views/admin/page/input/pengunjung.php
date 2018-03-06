{form_input}
	<legend>Form Input Pengunjung</legend>
	<div class="form-group">
		<label for="">Buku</label>
		<select name="pk_profil" class="form-control">
			<option value="">Pilih Profil</option>
			{profil}
				<option value = "{pk_profil}">{nama}</option>
			{/profil}
		</select> 
	</div>
	<div class="form-group">
		<label for="">Tanggal Kunjungan</label>
		<input type="date" class="form-control" name="tanggal_kunjungan" placeholder="Input Tanggal Kunjungan">
	</div>
	<div class="form-group">
		<label for="">Buku</label>
		<select name="pk_buku" class="form-control">
			<option value="">Pilih Buku</option>
			{buku}
				<option value = "{pk_buku}">{judul_buku}</option>
			{/buku}
		</select> 
	</div>
	
	<button type="submit" id="kirim_ajax" class="btn btn-primary">Submit</button>
</form>