		
		<!-- Container -->
		<div class="container">
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				
				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
					<div class="row">	
						
						<!-- Logo -->
							
					<ul id="navigation" class="col-lg-8 col-md-12 col-sm-12">
						
						<!-- Home -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Dashboard') echo 'current-menu-item'; ?>">					
							<a href="<?php echo base_url()?>C_Pakar"><i class="icons icon-home"></i></a>						
						</li>
						
						<!-- /Home -->
						<li <?php if($candidate['current-menu-item'] == 'Kelola Bobot') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/kelolaBobot">Kelola Bobot</a>
						</li>
						<!-- /Macam Tipe -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Pengguna Enneagram') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/listPengguna">Lihat Pengguna</a>
						</li>
						<!-- /Macam Tipe -->

						<!--  Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == 'Forum Pakar') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/dalamPerbaikan">Forum Pakar</a>
						</li>
						<!-- /Macam Tipe -->
						<li <?php if($candidate['current-menu-item'] == '') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_Pakar/logout">Logout</a>
						</li>
					</ul>
						
						
						
						<!-- Newsletter -->
						<!-- /Newsletter -->
						
						
						
					</div>
					
					</div>
					
				</div>
				<!-- /Main Header -->
									<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->