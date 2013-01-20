<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<title>Input Golongan Darah dan Kesehatan Poliklinik UIN Sunan Kalijaga</title>

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

</script>
				<div class="wrap_login_header"></div>
				
				<div class="wrap_login">
			
			
					<div class="wrap_login_rounded"
						style="color: #fff; font-size: 12px; text-align: left; background-color: #79B200; width: auto !important; padding: 20px; text-align: center">


						<!-- <li>Pengisian DPM dapat dilakukan satu hari kerja setelah pembayaran di Bank.</li> -->
						Sistem Informasi Input Golongan Darah dan Keterangan Kesehatan PoliKlinik UIN Sunan Kalijaga Yogyakarta
						

					</div>
					<br>

						<div class="wrap_login_rounded">
							<h1 class="log">Masukkan NIM Mahasiswa</h1>
							<!-- You are login as <span id="typenya"><strong><?=$h1;?></strong></span>-->

							<?php echo form_open_multipart('input/insert');?>
									<div class="harus_diisi">
										<?php echo validation_errors(); ?>
									</div>


									
											<div align="center" ><input type="text" name="nim" class="inputy"value="" /></div>
											

									</form>
									</div>
									
									<a href="<?php echo base_url(); ?>tampil">Lihat data</a>
									</div>
									
									<div id="footer_login">© 2012 LPM — UIN Sunan Kalijaga,</div>