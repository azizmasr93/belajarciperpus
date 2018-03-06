{form_ubah}
	<legend>Form Input Pengunjung</legend>
	{ubah}
	<div class="form-group">
		<label for="">Pengunjung</label>
		<select name="pk_profil" class="form-control">
			<?php foreach ($profil as $key => $value):?>
				<option value="<?=$value->pk_profil?>">
				<?=$value->nama?>	
				</option> 
			<?php endforeach ?>
		</select> 
	</div>	
	<div class="form-group">
		<label for="">Tanggal Kunjungan</label>
		<input type="date" class="form-control" name="tanggal_kunjungan" value="{tanggal_kunjungan}" placeholder="Input Tanggal Kunjungan">
	</div>
	<div class="form-group">
		<label for="">Buku</label>
		<select name="pk_buku" class="form-control">
			<?php foreach ($buku as $key => $value):?>
				<option value="<?=$value->pk_buku?>">
				<?=$value->judul_buku?>	
				</option> 
			<?php endforeach ?>
		</select> 
	</div>	
	{/ubah}
	<button type="submit" id="kirim_ajax" class="btn btn-primary">Submit</button>
</form>
