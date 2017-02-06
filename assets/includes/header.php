		
		<!-- Container -->
		<div class="container">
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				
				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
					<div class="row">	
						
						<!-- Logo -->
						<div id="logo" class="col-lg-8 col-md-4 col-sm-4">
							
						<ul id="navigation">
						
						<!-- Home -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Home') echo 'current-menu-item'; ?>">					
							<a href="<?php echo base_url()?>C_main/home"><i class="icons icon-home"></i></a>						
						</li>
						<li <?php if($candidate['current-menu-item'] == 'TEAM') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/team">TEAM</a>
						</li>
						<!-- /System Work -->					
						
						<!-- Donate -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'PreTest') echo 'current-menu-item'; ?>">
							<a href="<?php echo base_url()?>C_main/preTest">MULAI TEST</a>
						</li>
						<!-- /Donate -->
						
					</ul>
							
						</div>
						<!-- /Main Quote -->
						
						
						
						<!-- Newsletter -->
						<div class="col-lg-4 col-md-5 col-sm-5">
							
							<form id="newsletter" action="<?php echo base_url(); ?>C_Pakar" method="POST">
								
								<h5><strong>Anda Pakar ?</strong> Silanhkan Login..</h5>
								<div class="newsletter-form">
								
									<div class="newsletter-zip">
										<input type="text" name="username" placeholder="Username...">
									</div>
									
									<div class="newsletter-zip">
										<input type="password" name="password" placeholder="Password...">
									</div>
									
									<div class="newsletter-submit">
										<input type="submit" value="">
										<i class="icons icon-right-thin"></i>
									</div>
									
								</div>
								
							</form>
							
						</div>
						<!-- /Newsletter -->
						
						
						
					</div>
					
					</div>
					
				</div>
				
			</header>
			<!-- /Header -->