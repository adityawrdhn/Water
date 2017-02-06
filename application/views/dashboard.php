<?php

/* Global Variables */

$candidate['page-title'] = 'Dasboard'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Dasboard'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headerPakar.php');

?>
<section id="content">	
	
	<section id="content">	

		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

		<h1>Sistem Pakar Identifikasi Kualitas Air Menggunakan Metode K-Nearest Neighbors</h1>
			<p class="breadcrumb"><a href="">Dasboard</a></p>

		</section>
		<!-- Page Heading -->


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row">
				
				<div class="col-lg-9 col-md-9 col-sm-8">

					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">

							<!-- <h3 class="animate-onscroll no-margin-top">About us</h3> -->

						<p>Air merupakan unsur penting setiap makhluk hidup, tetapi air selalu terkontaminasi secara alami ataupun buatan sehingga mempengaruhi kualitas air. Hal ini terjadi karena siklus hidup air yang merupakan proses alam yaitu penguapan, transpirasi, dan pengendapan. Dari ketiga proses tersebut air dibagi menjadi beberapa jenis diantaranya fresh water, acidic water, saline water, alkaline water, brackish, sea water, rain water, dan brine.</p>
							
							<blockquote class="align-left animate-onscroll" style="width:90%"> 
							<p>Untuk mengidentifikasi kualitas air yang diidentifikasi penelitian ini menggunakan indikator physicochemical (fisio-kimia) dari air, seperti :
							Positive Hydrogen (pH)
Total Dissolved Solids (TDS)
Electrical Conductivity (EC)
Temperature (T)
</p>
							</blockquote>
						</div>

					</div>
				</div>



				<!-- Sidebar -->
				<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

					<!-- Image Banner -->
					<div class="sidebar-box image-banner animate-onscroll">
						<a href="https://www.facebook.com/<?php $facebook=$this->session->userdata('facebook'); echo "$facebook";?>" target="_blank">
							<?php $foto=$this->session->userdata('foto');?>
							<img src="<?php echo base_url()."assets/img/pakar/".$foto;?>" alt="">
							<h3>Pakar Air</h3>
							<span class="button transparent button-arrow"><?php $nama=$this->session->userdata('nama'); echo "$nama";?></span>
						</a>
					</div>
					<!-- /Image Banner -->							


					<!-- Upcoming Events -->
					<div class="sidebar-box white animate-onscroll">
					</div>
					<!-- /Upcoming Events -->		
			
				</div>
				<!-- /Sidebar -->




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