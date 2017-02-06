<?php

/* Global Variables */

$candidate['page-title'] = 'Home'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Home'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Sistem Pakar Identifikasi Kualitas Air Menggunakan Metode K-Nearest Neighbors</h1>
		<p class="breadcrumb"><a href="main-v1.php">Home</a></p>

	</section>
	<!-- Page Heading -->
	
	<!-- Section -->
	<section class="section full-width-bg gray-bg">	
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">

				<!-- Single Blog Post -->
				<div class="blog-post-single fullwidth-post">						
					<!-- <iframe class="youtube-video animate-onscroll" width="1200" height="600" src="//www.youtube.com/embed/ohVY7vOMm4w?rel=0&amp;wmode=transparent"></iframe> -->
					<p>Air merupakan unsur penting setiap makhluk hidup, tetapi air selalu terkontaminasi secara alami ataupun buatan sehingga mempengaruhi kualitas air. Hal ini terjadi karena siklus hidup air yang merupakan proses alam yaitu penguapan, transpirasi, dan pengendapan. Dari ketiga proses tersebut air dibagi menjadi beberapa jenis diantaranya fresh water, acidic water, saline water, alkaline water, brackish, sea water, rain water, dan brine.</p>
					<div class="post-content">
						<p class="animate-onscroll no-margin-bottom"></p>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">
							<p>Untuk mengidentifikasi kualitas air yang diidentifikasi penelitian ini menggunakan indikator physicochemical (fisio-kimia) dari air, seperti :
Positive Hydrogen (pH)
Total Dissolved Solids (TDS)
Electrical Conductivity (EC)
Temperature (T)
</p></div>
								<div class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">
									<p>Mesin inferensi merupakan mesin yang melakukan penalaran terhadap suatu kondisi berdasarkan basis pengetahuan yang tersedia untuk mencapai suatu solusi atau kesimpulan. Ada tiga teknik penalaran yang sering digunakan, yaitu forward chaining, backward chaining dan gabungan keduanya.
Forward chaining yaitu penalaran dari fakta – fakta yang ada menuju suatu kesimpulan.
Backward chaining yaitu penalaran dari sekumpulan hipotesis menuju fakta yang mendukung.
Teknik inferensi yang kami gunakan adalah forward chaining, yang merupakan teknik pelacakan yang memulai penalaran dari sekumpulan data fakta menuju suatu kesimpulan. Sistem inferensi secara forward chaining dimulai dengan menerima data jawaban yang berasal dari inputan user.
</p></div>
							</div>
						</div>

						<!-- Post Meta Track -->
						<div class="post-meta-track animate-onscroll">

							<table class="project-details">

								<tr>
									<td class="share-media">
										<ul class="social-share">	
											<li>Bagikan ini :</li>
											<li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
											<li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
											<li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
											<li class="pinterest"><a href="#" class="tooltip-ontop" title="Pinterest"><i class="icons icon-pinterest-3"></i></a></li>
											<li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
										</ul>
									</td>
								</tr>
							</table>

						</div>
						<!-- /Post Meta Track -->

						<!-- Post Author -->
						<div class="post-author animate-onscroll">

							<h4>About Team</h4>

							<div class="author-info">
								<div class="author-img">
									<img src="<?php echo base_url()."assets/"?>img/team.jpg" alt="">
								</div>
								<div class="author-description">
									<p>Sistem ini merupakan Project Akhir mata kuliah sistem pakar di Fakultas Ilmu Komputer. Kelompok 5.</p>
								</div>
							</div>

						</div>
						<!-- /Post Author -->

					</div>
					<!-- /Single Blog Post -->




					<h3 class="animate-onscroll">Leave a reply</h3>
					
					<p class="animate-onscroll">Your email address will not be published. Fields marked * are mandatory.</p>

					<form id="comment-form" class="animate-onscroll">

						<div class="inline-inputs">

							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Name*</label>
								<input type="text" name="contact-email">								
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Email*</label>
								<input type="text" name="contact-fname"> 	
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<label>Website</label>
								<input type="text" name="contact-lname"> 	
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12">
								<label>Comment</label>
								<textarea rows="10" name="contact-message"></textarea>
							</div>

						</div>

						<input type="submit" value="Post Comment">

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