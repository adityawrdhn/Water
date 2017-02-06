<?php

/* Global Variables */

$candidate['page-title'] = 'Team'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Team'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>	
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Team</h1>
				<p class="breadcrumb"><a href="">Home</a> / Team</p>
				
			</section>
			<!-- Page Heading -->
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<h3 class="animate-onscroll no-margin-top">Meet our team</h3>
						
						<?php
						
						$team_member = array(
							'class' => 'big',
							'img' => 'img/team/1.jpg',
							'job' => 'Project Manager',
							'name' => 'Wisnu',
							'description' => '<p>Puji dan syukur kami panjatkan kehadirat Tuhan atas segala berkat, rahmat, taufik, serta hidayah-Nya yang tiada terkira besarnya, sehingga kami dapat menyelesaikan project dengan judul "SISTEM PAKAR IDENTIFIKASI KUALITAS AIR MENGGUNAKAN METODE K-NEAREST NEIGHBOR". Sistem ini diharapkan dapat Memberikan rekomendasi untuk user mengenai tipe kualitas air yang diidentifikasi terlebih dahulu, sehingga user dapat menerima pengetahuan tentang kualitas dari air, efek samping terhadap kualitas air tersebut, dan ciri – ciri air berdasarkan jenisnya . Tidak lupa pula saya ucapkan terima kasih kepada tim saya Adit, Bram, Arina yang telah bekerja keras susah payah demi selesainya project ini. Tentunya dedikasi kalian tak akan terlupakan sepanjang masa . </p>',
							'facebook' => '#',
							'twitter' => '#',
							'google' => '#',
							'youtube' => '#',
							'flickr' => '#',
							'email' => '#',
							'twitter-follow' => '#'
						);
						
						include('assets/includes/pages/team-member.php');
						
						?>
						
						
						
						<div class="row">
							
							
							<div class="col-lg-4 col-md-4 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/2.jpg',
									'name' => 'Adit',
									'job' => 'Web Programmer',
									'description' => '<p></p>',
									'facebook' => '#',
									'twitter' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
							</div>
							
							
							
							<div class="col-lg-4 col-md-4 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/3.jpg',
									'name' => 'Arina',
									'job' => 'Documentation',
									'description' => '<p> </p>',
									'facebook' => '#',
									'twitter' => '#',
									'google' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
							</div>
							
							
							
							<div class="col-lg-4 col-md-4 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/4.jpg',
									'name' => 'Bram',
									'job' => 'Documentation',
									'description' => '<p></p>',
									'facebook' => '#',
									'twitter' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
							</div>
							
							
							
						</div>
						
						
						
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