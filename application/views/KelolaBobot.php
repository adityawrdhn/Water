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
	
	<section id="content">	

		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

			<h1>Kelola Bobot Soal atau Data Training</h1>
			<p class="breadcrumb"><a href="">Kelola Bobot</a></p>

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
								<th width="10%">ID</th>
								<th width="30%">TIPE AIR</th>
								<th width="30%">AFFECT</th>
								<th width="20%">Action</th>
							</tr>
							<?php 
							$no=1;
							foreach ($query as $row) {
								 ?>
							<tr>
								<td width="1.3%"><?php echo $no;?></td>
								<td width="1.3%"><?php echo $row->TIPE?></td>
								<td width="1.3%"><?php echo $row->AFFECT?></td>
								<td width="1.3%"><a href="editBobot/<?php echo "$row->NO";?>" class="button">Edit</a></td>
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