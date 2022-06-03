<div class="single-page-header" style="background-image: url('<?php echo base_url() ?>assets/images/about/education-3704026_1920.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</div>

<section class="portfolio section-sm" id="portfolio">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">

                <!-- section title -->
                <div class="title text-center">
                    <h2>STRUKTUR ORGANISASI</h2>
                    <div class="border"></div>
                </div>
                     <?= $this->session->flashdata('message'); ?>
                     <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($strukturorganisasi as $s): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s['nama']; ?></td>
                                <td><img src="<?= base_url('assets/images/struktur_organisasi/'.$s['image']) ?>" width="200px"></td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#update<?= $s['id'] ?>">Update</button></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                                <!-- /section title -->
            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->

<!-- Modal -->
<?php foreach($strukturorganisasi as $s): ?>
<div class="modal fade" id="update<?= $s['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('Administrator/StrukturOrganisasi/Update'); ?>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $s['id'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama" name="nama" value="<?= $s['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="input-file-now">Image</label>
            <div class="form-group">
                <img src="<?= base_url('assets/images/struktur_organisasi/'.$s['image']) ?>" width="200px">
            </div>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>
<?php endforeach; ?>
