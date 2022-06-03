<div class="single-page-header" style="background-image: url('<?php echo base_url() ?>assets/images/about/education-3704026_1920.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>

<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-12">

				<!-- section title -->
				<div class="title text-center">
					<h2>FASILITAS</h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<div class="row filtr-container">
					<?php foreach($fasilitas as $f): ?>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
						<div class="portfolio-block">
							<img class="img-fluid" src="<?= base_url('assets/images/fasilitas/'.$f['image']) ?>" alt="">
							<div class="caption">
								<a class="search-icon" href="<?= base_url('assets/images/fasilitas/'.$f['image']) ?>" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4 class="text-white"><?= $f['nama'] ?></h4>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->