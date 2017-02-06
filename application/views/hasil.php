<?php

/* Global Variables */

$candidate['page-title'] = 'Test'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Test'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

<section id="content">

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h3>HASIL TEST ANDA "<?php $pengguna=$this->session->userdata('pengguna'); echo "$pengguna";?>"</h3>
		<p class="breadcrumb"><a href="">Home</a> / Test</p>

	</section>
	<!-- Page Heading -->
	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-6 col-sm-12">

				<div class="animate-onscroll">
					<blockquote>Hasil Dari Test yang Anda Lakukan</blockquote>
					<br>
					<blockquote>
						<tr>
						<!-- 
							<td>
								PH: <?php echo $PH; ?>
							</td>
							<br>
							<td>
								TDS: <?php echo $TDS; ?>
							</td>
							<br><td>
								EC: <?php echo $EC; ?>
							</td>
							<br><td>
								T:<?php echo $T; ?>
							</td><br>
						
						<?php 
						foreach ($result as $key) {
							?>
							<td>

								Jarak ke Cluster <?php echo $key -> JarakKeCluster; ?> adalah <?php echo $key -> Jarak; ?>
							</td><br>
							<?php 
						} ?>
							<br>
							<hr> -->
							<?php $no=1;
							foreach ($JARAKTERPENDEK as $key) {
								?>
							<td>
								Jarak Terpendek <?php echo "$no"; ?> adalah pada kelas <?php echo $key -> JarakKeCluster; ?>
							</td>
							<td>
								<ul>
									<li>Jarak  = <?php echo $key -> Jarak; ?></li>
									<li>Tipe   = <?php echo $key -> TIPE; ?></li>
									<li>AFFECT = <?php echo $key -> AFFECT; ?></li>
									</ul>
							</td>
							
							<?php $no++; } ?>

						</tr>
					</blockquote>

					<!-- <blockquote>
						<tr>
							<td>
						<?php 
						foreach ($sorting as $k ) {
							?>
							<td>

								Jarak ke Cluster <?php echo $k -> JarakKeCluster; ?> adalah <?php echo $k -> Jarak; ?>
							</td>
							<br>
							<?php break;} ?>

						</tr>
					</blockquote>
 -->
					<br>
					<blockquote>Tipe Air yang Sudah Anda Tes Adalah 
							<STRONG>
							<?php echo $key -> TIPE;?>
							</STRONG>
							Yang Mempunyai Affect
							<STRONG>
								<?php echo $key -> AFFECT;?>
							</STRONG>
						
					</blockquote>


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

