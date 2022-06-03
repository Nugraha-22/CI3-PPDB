<div class="single-page-header" style="background-image: url('<?php echo base_url() ?>assets/images/about/education-3704026_1920.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>


<section class="services" id="services">
	<div class="container">
		<div class="row no-gutters">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>STRUKTUR ORGANISASI</h2>
					<div class="border"></div>
					<?php foreach($strukturorganisasi as $s): ?>
					<img src="<?= base_url('assets/images/struktur_organisasi/'.$s['image']) ?>" width="100%" height="750" alt="">
				<?php endforeach; ?>
				</div>
			</div>
			<!-- /section title -->

			

		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->