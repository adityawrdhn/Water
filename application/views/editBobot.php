<?php

/* Global Variables */

$candidate['page-title'] = 'Kelola Bobot'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kelola Bobot'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headerPakar.php');

?>

<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Edit Bobot Data Training</h1>
		<p class="breadcrumb"><a href="">Edit Bobot</a></p>

	</section>
	<!-- Page Heading -->


	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="row">


					<h3 class="animate-onscroll no-margin-top"></h3>
					<table width="200" border="2">
						<tr>
							<th width="20%">PARAMETER PENGUKURAN</th>
							<th width="50%">EDIT BOBOT</th>
									<!-- <th width="20%">Pilihan A</th>
									<th width="20%">Pilihan B</th> -->
								</tr>
								<?php 
								foreach ($query as $row) {
									?>
									<form action="<?php echo base_url(); ?>C_Pakar/updateBobot/<?php echo "$row->NO";?>" method="post">
									<tr>	
										<td width="10%">
											Positive Hydrogen
										</td>
										<td width="90%">
											<input type="text" name="PH" value="<?php echo $row->PH; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											TDS
										</td>
										<td width="90%">
											<input type="text" name="TDS" value="<?php echo $row->TDS; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Electrical Conductivity
										</td>
										<td width="90%">
											<input type="text" name="EC" value="<?php echo $row->EC; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Temperature
										</td>
										<td width="90%">
											<input type="text" name="T" value="<?php echo $row->T; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											TIPE AIR
										</td>
										<td width="90%">
											<input type="text" name="TIPE" value="<?php echo $row->TIPE; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											AFFECT
										</td>
										<td width="90%">
											<input type="text" name="AFFECT" value="<?php echo $row->AFFECT; ?>">
										</td>
									</tr>




									<div class="donate-button align-center animate-onscroll">
										<input type="submit" value="Update Soal">
									</div><br>
								</form>
								<?php
							}
							?>
						</table>

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