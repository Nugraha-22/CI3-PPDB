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
                    <h2>AKUN</h2>
                    <div class="border"></div>
                <button type="button" class="btn btn-primary" style="width:15%" data-toggle="modal" data-target="#exampleModal">Add</button>
                </div>
                    <?= $this->session->flashdata('message'); ?>
                     <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>is active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($akun as $a): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <th><img src="<?= base_url('assets/images/profile/'.$a['image']) ?>" width="100px"></th>
                                <td><?= $a['username']; ?></td>
                                <td><?= $a['email']; ?></td>
                                <td><?= $a['role']; ?></td>
                                <td><?= $a['is_active']; ?></td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#update<?= $a['id'] ?>">Update</button> | <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $a['id'] ?>">Delete</button></td>
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
        <?= form_open_multipart('Administrator/Akun/Add'); ?>
        <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Username" name="username">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Email" name="email">
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
        <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Masukan Password" name="password">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Role</label>
            <select class="form-control" name="role_id">
              <option disabled="">- Pilih Salah Satu -</option>
            <?php foreach($role as $r): ?>
              <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">is_active</label>
            <select class="form-control" name="is_active">
              <option disabled="">- Pilih Salah Satu -</option>
              <option>0</option>              
              <option>1</option>
            </select>
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
<?php foreach($akun as $a): ?>
<div class="modal fade" id="update<?= $a['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('Administrator/Akun/Update'); ?>
            <input type="hidden" class="form-control" name="id" value="<?= $a['id'] ?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Username" name="username" value="<?= $a['username'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Email" name="email" value="<?= $a['email'] ?>">
        </div>
        <div class="form-group">
            <label for="input-file-now">Image</label>
            <div class="form-group">
                <img src="<?= base_url('assets/images/profile/'.$a['image']) ?>" width="200px">
            </div>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image">
                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Masukan Password" name="password" value="<?= $a['password'] ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Role</label>
            <select class="form-control" name="role_id">
              <option disabled="">- Pilih Salah Satu -</option>
            <?php foreach($role as $r): ?>
              <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">is_active</label>
            <select class="form-control" name="is_active">
              <option disabled="">- Pilih Salah Satu -</option>
              <option>0</option>              
              <option>1</option>
            </select>
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
<?php foreach($akun as $a): ?>
<div class="modal fade" id="delete<?= $a['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="<?= $a['id'] ?>">
        Apakah Anda Yakin Ingin Menghapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('Administrator/Akun/Delete/').$a['id'] ?>" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>