<?php

/* Global Variables */

$candidate['page-title'] = 'Pengguna '; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Pengguna '; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headerPakar.php');

?>
<section id="content">	
	
	<section id="content">	

		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

			<h1>Daftar Pengguna Website</h1>
			<p class="breadcrumb"><a href="">List Pengguna</a></p>

		</section>
		<!-- Page Heading -->


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">

					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">

							<h3 class="animate-onscroll no-margin-top"></h3>
							<table width="200" border="2">
							<tr>
								<th width="5%">No</th>
								<th width="15%">Nama</th>								
								<th width="10%">Jenis Kelamin</th>								
								<th width="15%">Pekerjaan</th>
								<th width="5%">Umur</th>
								<th width="20%">Waktu Tes</th>
								<th width="15%">Hasil Tes</th>
								<th width="15%">Affect</th>
							</tr>
							<?php 
							$no=1;
							foreach ($query as $row) {
								 ?>
							<tr>
								<td width="5%"><?php echo $no;?></td>
								<td width="15%"><?php echo "$row->NAMA"; ?></td>
								<td width="10%"><?php echo "$row->JENIS_KELAMIN"; ?></td>
								<td width="15%"><?php echo "$row->PEKERJAAN"; ?></td>
								<td width="5%"><?php echo "$row->UMUR"; ?></td>
								<td width="20%"><?php echo "$row->WAKTU_TES"; ?></td>
								<td width="15%"><?php echo "$row->TIPE"; ?></td>
								<td width="15%"><?php echo "$row->AFFECT"; ?></td>
							</tr>
							<?php
							$no++;
						}
					 ?>
							</table>
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