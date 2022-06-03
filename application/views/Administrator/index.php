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
                    <h2>PROFILE</h2>
                    <div class="border"></div>
                     <div class="container" style="max-width: 750px;">
                        <div class="row g-0">
                            <div class="col-sm-5">
                                <img src="<?= base_url('assets/images/profile/').$user['image'] ?>" class="card-img-top h-100">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $user['username']; ?></h5>
                                    <p class="card-text"><?= $user['email']; ?></p>
                                    <p class="card-text"><small class="text-mute">Member since <?= date('d F Y',$user['date_created']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                

            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->