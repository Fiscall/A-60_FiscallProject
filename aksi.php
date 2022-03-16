<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
            Pendaftaran Seminar</div>
        <div class="card-body">
			<form method="get">
			<?php 
				$nama=$_POST['nama'];
				$pt=$_POST['pt'];
				$jenis=$_POST['jenis'];
				$prosiding=$_POST['prosiding'];
				echo "Selamat! Anda Berhasil terdaftar dengan data sebagai berikut :";
				echo "<ul>";
					echo "<li>Nama                  :".$nama. "</li>";
					echo "<li>Perguruan Tinggi Asal :".$pt. "</li>";
					echo "<li>Jenis Peserta         :".$jenis. "</li>";
					echo "<li>Cetak                 :".$prosiding. "</li>";
				echo "</ul>";
				if($jenis=="Pemakalah"){
					$harga=300000;
				}
				elseif($jenis=="Non Pemakalah"){
					$harga=120000;
				}
				else{
					$harga=0;
				}
				echo "<p>Pembayaran dilakukan dengan transfer ke nomorrekening saya sebesar Rp. ".$harga*$prosiding;
			?>
		</div>
</div>