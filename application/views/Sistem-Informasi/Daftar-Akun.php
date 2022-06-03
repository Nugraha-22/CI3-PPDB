<div class="single-page-header" style="background-image: url('<?php echo base_url() ?>assets/images/about/education-3704026_1920.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>

	 <!--Start Contact Us
	=========================================== -->		
<section class="contact-us" id="contact">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
				<h2>KASIH SAYANG BUNDA</h2>
				<p>Berani Bermain Belajar dan Berlatih</p>
				<div class="border"></div>
			</div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
				<h3>Hubungi Kita:</h3>
				<ul class="contact-short-info" >
					<li>
						<i class="tf-ion-ios-home"></i>
						<span>Jl. Kapten Abdul Hamid No.82 A, RT.03 RW.01, Kel. Ledeng, Kec. Cidadap Kota Bandung</span>
					</li>
					<li>
						<i class="tf-ion-android-phone-portrait"></i>
						<span>Phone: (+62) 821-3011-3578</span>
					</li>
					<li>
						<i class="tf-ion-android-phone-portrait"></i>
						<span>Phone: (+62) 813-2152-5318</span>
					</li>
					<li>
						<i class="tf-ion-android-mail"></i>
						<span>Email: koberkasihsayangbunda@gmail.com</span>
					</li>
				</ul>
				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
						<li><a href="https://web.facebook.com/koberkasihsayangbunda"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCnj6H5W6XiE5JvZduLJYZsg/featured"><i class="tf-ion-social-youtube"></i></a></li>
						<li><a href="https://www.instagram.com/koberkasihsayangbunda/"><i class="tf-ion-social-instagram"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<?php echo form_open('Sistem-Informasi/DaftarAkun/Daftar'); ?>
					<div class="form-group">
						<input type="text" placeholder="Nama Panggilan" class="form-control" name="username" value="<?php echo set_value('username'); ?>">
						<?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
						<?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
					</div>
					
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" name="password" value="">
						<?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
					</div>
					
					<div id="">
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Daftar">
					</div>
					<br>
					Sudah Punya Akun??
					<a href="<?= base_url('Sistem-Informasi/Auth'); ?>">Login Disini</a>							
					
				<?php echo form_close(); ?>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->