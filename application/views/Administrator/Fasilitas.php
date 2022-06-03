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
                    <h2>FASILITAS</h2>
                    <div class="border"></div>
                    <button type="button" class="btn btn-primary" style="width:15%" data-toggle="modal" data-target="#exampleModal">Add</button>
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
                            <?php foreach($fasilitas as $f): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $f['nama']; ?></td>
                                <td><img src="<?= base_url('assets/images/fasilitas/'.$f['image']) ?>" width="200px"></td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#update<?= $f['id'] ?>">Update</button> | <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $f['id'] ?>">Delete</button></td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('Administrator/Fasilitas/Add'); ?>
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama" name="nama">
        </div>
        <div class="form-group">
            <label for="input-file-now">Image</label>
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

<!-- Modal -->
<?php foreach($fasilitas as $f): ?>
<div class="modal fade" id="update<?= $f['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('Administrator/Fasilitas/Update'); ?>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $f['id'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama" name="nama" value="<?= $f['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="input-file-now">Image</label>
            <div class="form-group">
                <img src="<?= base_url('assets/images/fasilitas/'.$f['image']) ?>" width="200px">
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

<!-- Modal -->
<?php foreach($fasilitas as $f): ?>
<div class="modal fade" id="delete<?= $f['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $f['id'] ?>">
        </div>
        <div class="form-group">
            <p>Apakah Anda Ingin Menghapusnya?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('Administrator/Fasilitas/Delete/').$f['id'] ?>" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
