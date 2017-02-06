<?php

/* Global Variables */

$candidate['page-title'] = 'Test'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'PreTest'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

<section id="content">

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h3>SELAMAT MENGERJAKAN "<?php $pengguna=$this->session->userdata('pengguna'); echo "$pengguna";?>"</h3>
		<p class="breadcrumb"><a href="">Home</a> / Test</p>

	</section>
	<!-- Page Heading -->
	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-6 col-sm-12">

				<div class="animate-onscroll">
					<blockquote>"Jawablah Sesuai dengan alat ukur"</blockquote>
				</div>
					<form action="cari" method="post" id="">
						<table width="200" border="1">
							<tr>
								<th width="30%">Soal</th>
								<th width="70%">Jawaban</th>
							</tr>

							<tr>
								<td>Masukkan Nilai Positive Hydrogen</td>
								<td><div class="col-lg-11 col-md-11 col-sm-9 animate-onscroll">
									
								</div>
								<br />
								<div class="col-lg-10 col-md-10 col-sm-9 animate-onscroll" >
									<input name="PH"  placeholder= "0" required>									
								</div></td>
							</tr>
							<tr>
								<td>Masukkan Nilai Total Dissolved Solids</td>
								<td><div class="col-lg-11 col-md-11 col-sm-9 animate-onscroll">
									
								</div>
								<br />
								<div class="col-lg-10 col-md-10 col-sm-9 animate-onscroll">
									<input    name="TDS"  placeholder= "0" required>									
								</div></td>
							</tr>
							<tr>
								<td>Masukkan Nilai Electrical Conductivity</td>
								<td><div class="col-lg-11 col-md-11 col-sm-9 animate-onscroll">
									
								</div>
								<br />
								<div class="col-lg-10 col-md-10 col-sm-9 animate-onscroll">
									<input    name="EC"  placeholder= "0" required>									
								</div></td>
							</tr>
							<tr>
								<td>Masukkan Nilai Temperature</td>
								<td><div class="col-lg-11 col-md-11 col-sm-9 animate-onscroll ">
									
								</div>
								<br />
								<div class="col-lg-10 col-md-10 col-sm-9 animate-onscroll">
									<input    name="T"  placeholder= "0" required>									
								</div></td>
							</tr>
						</table>
						<table width="200" border="1">
							<tr>
								<td>Masukkan Nilai K(Jumlah cluster terdekat yang Ditampilkan)</td>
								<td><div class="col-lg-11 col-md-11 col-sm-9 animate-onscroll">
									
								</div>
								<br />
								<div class="col-lg-10 col-md-10 col-sm-9 animate-onscroll">
									<input    name="K"  placeholder= "0" required>									
								</div></td>
							</tr>
					</table>
					<input type="submit" value="submit jawaban"/ onclick=selesai()>
				</form>

			

		</div>




	</div>

</section>
<!-- /Section -->

</section>



<?php

/* <footer> </footer> */
include ('assets/includes/footer.php');

/* JavaScript */
include ('assets/includes/foot.php');

?>