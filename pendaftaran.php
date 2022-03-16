<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
            Form Pendaftaran Seminar</div>
        <div class="card-body">
			<form method="post" action="?page=aksi">
				<div class="form-group">
					<label>Nama : </label>
					<input type="text" name="nama" id="nama" placeholder="masukkan nama Anda" />
				</div>
				<div class="form-group">
					<label>Perguruan Tinggi : </label>
					<input type="form-control" name="pt" placeholder="">
				</div>
				<div class="form-group">
					<label for="select"> Jenis Peserta</label>
					<select name="jenis" id="jenis"> 
					<option>--- Pilih Jenis Peserta ---</option>
					<option>Pemakalah</option>
					<option>Non Pemakalah</option>
					</select>
				</div>
				<div class="form-group">
					<label>Cetak Prosiding</label>
					<input type="number" name="prosiding" id="prosiding" placeholder="masukkan angka" />
				</div>
			<button type="submit" class="btn btn-primary">DAFTAR</button>
			</form>
		</div>
</div>