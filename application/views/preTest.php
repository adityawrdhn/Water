<?php

/* Global Variables */

$candidate['page-title'] = 'Pretest'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Pretest'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

<section id="content">

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Ketahuilah Kualitas Air Disekitarmu</h1>
		<p class="breadcrumb"><a href="">Home</a> / Test</p>

	</section>
	<!-- Page Heading -->




	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="animate-onscroll">
					<h3 class="no-margin-top">Persiapan Tes Kualitas Air</h3>
				</div>

				<form action="mulaiTest" method="post">

					<div class="row">	
						<h5>Sebelum melakukan test isikan data diri Anda .</h5>

						<label>Nama</label>
						<input type="text" name="nama" placeholder="Nama...." required>
						<br>
						<label>Pekerjaan</label>
						<input type="text" name="pekerjaan" placeholder="Pekerjaan...." required>
						<br>
						<label>Jenis Kelamin</label><br>
						<!-- <input type="radio" id="jk1" name="jeniskelamin" value="Laki-laki" ><label for="Jenis Kelamin">Laki-Laki</label><br>
						<input type="radio" id="jk2" name="jeniskelamin" value="Perempuan" ><label for="Jenis Kelamin">Perempuan</label><br>
						 -->
						 <input type="radio" name="jenisKelamin" value="Laki-Laki" id="A"/required><label for="A"> Laki-laki</label><br />
						 <input type="radio" name="jenisKelamin" value="Perempuan" id="B"/required><label for="B"> Perempuan</label><br />
						 <?php $no=0;?>
						 <label>Umur</label><br>
						<input type="number" name="umur" placeholder="Umur" required>
						<br><br>							
					</div>
					<div class=" align-center animate-onscroll">
					</div>

					<div class="donate-button align-center animate-onscroll">
						<input type="submit" value="Mulai Test">
					</div>

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