<style type="text/css">
/*	#bdy, body {
  margin: 0;
  padding: 0;
  backgrounld-color: #FAFAFA;
  font: 10pt "Arial";
}

* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.page {
  width: 21cm;
  min-height: 29.7cm;
  padding: 2cm;
  margin: 1cm auto;
  border: 1px #D3D3D3 solid;
  border-radius: 5px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.subpage {
  padding: 1cm;
  border: 5px red solid;
  height: 256mm;
  outline: 2cm #FFEAEA solid;
}

@page {
  size: A4;
  margin: 0;
}

@media print {
  .page {
    margin: 0;
    border: initial;
    border-radius: initial;
    width: initial;
    min-height: initial;
    box-shadow: initial;
    background: initial;
    page-break-after: always;
  }
}
*/
</style>

<div class="book">
  <div class="page">
  	<?php 
  	function base64($img)
  	{

  			$path = $img;
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
			return $base64;
  	}
  		foreach($data->result() as $r){


  	 ?>
  	 <table width="100%">
		<tr>
			<td  width="70px">
				<img  width="70px" src="<?= base64(base_url('logo.png'))?>">
			</td>
			<td align="center">
				<b>PENERIMAAN PESERTA DIDIK BARU</b><br>
				<b style="font-family: Bookman Old Style; font-size: 25pt;">SMK PUTRA BANGSA</b><br>
				<b>WARU PAMEKASAN</b><br>
				<span style="font-family: 'Bookman Old Style';font-size: 10pt;">Alamat : Jl. Pontren Al-Mustaqim Waru Barat Kec. Waru Kab. Pamekasan</span>
			</td>
			<td width="70px">
				<!-- <img  src="<?= base_url('logo.png')?>"> -->
				&nbsp;
			</td>
		</tr>
  	 	<tr bgcolor="#33BBFF">
  	 		<td colspan="3" style="color:#fff" align="center" ><span style="font-family: 'times new roman';font-size: 10pt;">website : http://www.smkpbwaru.sch.id, email :info@smkpbwaru.sch.id</span></td>
  	 	</tr>
  	 </table>
  	 <u><h3 align="center">FORMULIR PENDAFTARAN</h3></u>
  	<table id="bdy" border="0" width="100%" style="border-collapse: collapse;">
  		<tr>
  			<td width="170px">Nama Lengkap</td>
  			<td width="4px">:</td>
  			<td><?= $r->NAMALENGKAP?></td>
  			<td width="150px" align="center" rowspan="19" valign="top">
  				<img width="130px" src="<?= base64(base_url('upload/'.$r->FOTO))?>">

  			</td>
  		</tr>
  		<tr>
  			<td>NISN</td>
  			<td>:</td>
  			<td><?= $r->NISN?></td>
  		</tr>
  		<tr>
  			<td>NIK</td>
  			<td>:</td>
  			<td><?= $r->NIK?></td>
  		</tr>
  		<tr>
  			<?php 
  				$k='Tidak Ada';
  				if($r->JK==1)
  					$k='Laki-laki';
  				
  				else if($r->JK==1)
  					$k='Perempuan';

  			 ?>
  			<td>Jenis Kelamin</td>
  			<td>:</td>
  			<td><?= $k?></td>
  		</tr>
  		<tr>
  			<td>Tempat, Tanggal Lahir</td>
  			<td>:</td>
  			<td><?= $r->TMPLAHIR.', '.$r->TGLLAHIR?></td>
  		</tr>
  		<tr>
  			<td>Email</td>
  			<td>:</td>
  			<td><?= $r->EMAIL?></td>
  		</tr>
  		<tr>
  			<td>No. KK</td>
  			<td>:</td>
  			<td><?= $r->NOKK?></td>
  		</tr>
  		<tr>
  			<td>No. AKTA</td>
  			<td>:</td>
  			<td><?= $r->AKTA?></td>
  		</tr>
  		<!-- <tr>
  			<td>Alamat / Jalan</td>
  			<td>:</td>
  			<td><?= $r->ALAMAT?></td>
  		</tr> -->
  		<tr>
  			<td>RT</td>
  			<td>:</td>
  			<td><?= $r->RT?></td>
  		</tr>
  		<tr>
  			<td>RW</td>
  			<td>:</td>
  			<td><?= $r->RW?></td>
  		</tr>
  		<tr>
  			<td>Dusn</td>
  			<td>:</td>
  			<td><?= $r->DSN?></td>
  		</tr>
  		<tr>
  			<?php 
  				$idjs = $r->KEC;
  				$id = $r->DESA;
  				$d='';
		        $api_categories_list ='https://www.emsifa.com/api-wilayah-indonesia/api/villages/'.$idjs.'.json';
		        $json_list = file_get_contents($api_categories_list);
		        $profile = json_decode($json_list, TRUE);
		        foreach($profile as $js){
		        	if($js['id']==$id)
		        		$d=$js['name'];
		        }
         	?>
  			<td>Desa / Kelurahan</td>
  			<td>:</td>
  			<td><?= $d?></td>
  		</tr>
  		<tr>
  			<?php 
  				$idjs = $r->KAB;
  				$id = $r->KEC;
  				$d='';
		        $api_categories_list ='https://www.emsifa.com/api-wilayah-indonesia/api/districts/'.$idjs.'.json';
		        $json_list = file_get_contents($api_categories_list);
		        $profile = json_decode($json_list, TRUE);
		        foreach($profile as $js){
		        	if($js['id']==$id)
		        		$d=$js['name'];
		        }
         	?>
  			<td>Kecamatan</td>
  			<td>:</td>
  			<td><?= $d?></td>
  		</tr>
  		<tr>
  			<?php 
  				$idjs = $r->PROV;
  				$id = $r->KAB;
  				$d='';
		        $api_categories_list ='https://www.emsifa.com/api-wilayah-indonesia/api/regencies/'.$idjs.'.json';
		        $json_list = file_get_contents($api_categories_list);
		        $profile = json_decode($json_list, TRUE);
		        foreach($profile as $js){
		        	if($js['id']==$id)
		        		$d=$js['name'];
		        }
         	?>
  			<td>Kabupaten</td>
  			<td>:</td>
  			<td><?= $d?></td>
  		</tr>
  		<tr>
  			<?php 
  				$id = $r->PROV;
  				$d='';
		        $api_categories_list ='https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';
		        $json_list = file_get_contents($api_categories_list);
		        $profile = json_decode($json_list, TRUE);
		        foreach($profile as $js){
		        	if($js['id']==$id)
		        		$d=$js['name'];
		        }
         	?>
  			<td>Provinsi</td>
  			<td>:</td>
  			<td><?= $d?></td>
  		</tr>
  		<tr>
  			<td>No. HP Pribadi</td>
  			<td>:</td>
  			<td><?= $r->HP?></td>
  		</tr>
  		<tr>
  		<tr>
  			<td>Nama Ayah</td>
  			<td>:</td>
  			<td><?= $r->AYAH?></td>
  		</tr>
  		<tr>
  			<td>No. HP Pribadi</td>
  			<td>:</td>
  			<td><?= $r->HPAYAH?></td>
  		</tr>
  		<tr>
  			<td>Nama Ibu</td>
  			<td>:</td>
  			<td><?= $r->IBU?></td>
  		</tr>
  		<tr>
  			<td>No. HP Ayah</td>
  			<td>:</td>
  			<td><?= $r->HPIBU?></td>
  		</tr>
  		<tr>
  			<td>Nama Ibu</td>
  			<td>:</td>
  			<td><?= $r->WALI?></td>
  		</tr>
  		<tr>
  			<td>No. HP Wali</td>
  			<td>:</td>
  			<td><?= $r->HPWALI?></td>
  		</tr>
  		<tr>
  			<td valign="top">Keterangan Berkas</td>
  			<td valign="top">:</td>
  			<td colspan="2">
  				<table width="100%" border="1" style="font-size:12px; font-family: 'Times New Roman';border-collapse: collapse;" >
  					<tr>
  						<th>Nama Berkas</th>
  						<th>Upload</th>
  						<th>Validasi</th>
  						<th>Keterangan</th>
  					</tr>
  					<tr>
  						<td>Kartu Keluarga</td>
  						<td>Ya</td>
  						<td>Ya</td>
  						<td>Sudah Di Verifikasi</td>
  					</tr>
  					<tr>
  						<td>Akta Kelahiran</td>
  						<td>Ya</td>
  						<td>Ya</td>
  						<td>Sudah Di Verifikasi</td>
  					</tr>
  					<tr>
  						<td>Surat Keterangan Lulus</td>
  						<td>Ya</td>
  						<td>Ya</td>
  						<td>Sudah Di Verifikasi</td>
  					</tr>
  					<tr>
  						<td>Ijazah</td>
  						<td>Ya</td>
  						<td>Ya</td>
  						<td>Sudah Di Verifikasi</td>
  					</tr>
  					<tr>
  						<td>SKHU</td>
  						<td>Ya</td>
  						<td>Ya</td>
  						<td>Sudah Di Verifikasi</td>
  					</tr>
  				</table>
  			</td>
  		</tr>
  	</table>
  	<br>
                        </td>
  	<b>Pernyataan</b>
  	<p>Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi berupa Pembatalan sebagai Calon Peserta Didik SMK Putra Bangsa
  	</p>
  	<?php 
  			 $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  	 ?>
  	<table id="bdy" width="100%" border="0">
  		<tr>
  			<td width="50%" align="center">
  				<br>
  				<img width="130px" src="<?= base64(base_url('upload/'.$r->NIK.'-TERVERIFIKASI.png'))?>">
  			</td>
  			<td width="50%" align="right">
  				<br>
  				<img width="130px" src="<?= base64(base_url('upload/'.$r->FOTO))?>">
  			</td>
  			<td width="50%" align="center">
  				Pamekasan, <?php echo date('d').' '.$bln[date('n')].' '.date('Y'); ?>
  				<br>Calon Siswa Baru,
  				<br><br><br><br><br><br>
  				<b><?= $r->NAMALENGKAP?></b>
  			</td>
  		</tr>
  	</table>
  <?php } ?>
  </div>
 <!--  <div class="page">
    <div class="subpage">Page 2/2</div>
  </div> -->
</div>