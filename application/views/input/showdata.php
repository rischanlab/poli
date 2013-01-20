<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<title>Input Golongan Darah dan Keterangan Sehat Poliklinik UIN Sunan Kalijaga Yogyakarta</title>

<link
	href="<?php echo base_url(); ?>public/css/form.css" rel="stylesheet"
	type="text/css" />




<link rel="icon"
	href="http://registrasi.uin-suka.ac.id/uin_img/favicon.png"
	type="image/x-icon">
	<link rel="shortcut icon"
		href="http://registrasi.uin-suka.ac.id/uin_img/favicon.png"
		type="image/x-icon">
		<meta name="generator" content="PKSI">
			</head>
			<body class="login_page">
				<script language="javascript" type="text/javascript">      
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
function loadImages() {
if (document.getElementById) {  // DOM3 = IE5, NS6
document.getElementById('hidepage').style.display = 'none';
}
}
window.onload = loadImages;
//  End -->
</script>
				<div class="wrap_login_header"></div>
				
				<div class="wrap_login">

					<div class="wrap_login_rounded"
						style="color: #fff; font-size: 12px; text-align: left; background-color: #79B200; width: auto !important; padding: 20px; text-align: center">


						<!-- <li>Pengisian DPM dapat dilakukan satu hari kerja setelah pembayaran di Bank.</li> -->
						Input GOlongan Darah dan Keterangan Sehat Mahasiswa Peserta KKN UIN Sunan Kalijaga Yogyakarta
					

					</div>
					<br>

					<?php
					foreach($datajson as $row){
						$nim	= $row->NIM;
						$nama	= $row->NAMA;
						$prodi	= $row->NM_PRODI;
						$fak	= $row->NM_FAK;
					}
					?>
						<div class="wrap_login_rounded">
							<h1 class="log">Data Mahasiswa Peserta KKN</h1>
							<!-- You are login as <span id="typenya"><strong><?=$h1;?></strong></span>-->

							<form action="<?php echo base_url(); ?>input/simpan" method="POST">
								<table class="form form_login">
									<tbody>


										<div class="harus_diisi">
											<?php echo validation_errors(); ?>
										</div>



										<tr>
											<td valign="top" class="txt_login">NIM</td>
											<td class="txt_login"><input type="text" readonly="true"
												name="nim" class="inputx"
												value="<?php echo $nim; ?>" />
											</td>
										</tr>

										<tr>
											<td valign="top" class="txt_login">Nama</td>
											<td class="txt_login"><input type="text" readonly="true"
												name="nama" class="inputx"
												value="<?php echo $nama; ?>" />


											</td>
										</tr>

										<tr>
											<td valign="top" class="txt_login">Prodi</td>
											<td class="txt_login"><input type="text" readonly="true"
												name="prodi" class="inputx"
												value="<?php echo $prodi; ?>" />
											</td>
										</tr>
						

										<tr>
											<td valign="top" class="txt_login">Fakultas</td>
											<td class="txt_login"><input type="text" readonly="true"
												name="fak" class="inputx"
												value="<?php echo $fak; ?>" />
											</td>
										</tr>
										
										<tr>
											<td valign="top" class="txt_login">Golongan Darah*</td>
											<td>
											<select id="gol_darah" name="gol_darah">                                    
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="AB">AB</option>
												<option value="O">O</option>                                                                           
												</select>
											</td>
										</tr>
								
							<tr>	
							<td valign="top" class="txt_login">Keterangan Sehat*</td>
							<td>
							<input type="radio" name="ketsehat" value="sehat" />Sehat
							<input type="radio" name="ketsehat" value="sehat" />Tidak Sehat
							
							</td>

							</tr>
								<tr><td></td><td><input type="radio" name="ketsehat" value="sehat" />Sehat dengan Catatan</td></tr>
							<tr>
								<td></td>
								<td class="txt_login"><input type="text" name="ket" class="inputy" value="" /></td>		
							</tr>								
		
											<tr>
												<td></td>
												<td><input type="submit" name="subloginx"
													class="button_login" value="Simpan">
												
												</td>
											</tr>
									
									</tbody>
								</table>


							</form>
						</div>
				
				</div>
				<div id="footer_login">© 2012 LPM — UIN Sunan Kalijaga,</div>


			</body>
			</html>