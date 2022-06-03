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
					<h2>Les</h2>
					<div class="border"></div>
					<button type="button" class="btn btn-primary" style="width:15%" data-toggle="modal" data-target="#add">Add</button>
				</div>
					<?= $this->session->flashdata('message'); ?>
                     <table id="akun" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.Pendaftar</th>
                                <th>Kartu Keluarga</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Usia</th>
                                <th>Agama</th>
                                <th>Tinggi</th>
                                <th>Berat Badan</th>
                                <th>Hobi</th>
                                <th>Cita-cita</th>
                                <th>Jarak Rumah Sekolah</th>
                                <th>Alamat</th>
                                <th>Nama Ayah</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Ibu</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Penghasilan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach($les as $l): ?>
                            <tr>
                            	<td><?= $l['no_pendaftar'] ?></td>
                                <td><img src="<?= base_url('assets/images/data/').$l['kk'] ?>" width="200px"></td>
                                <td><?= $l['nisn'] ?></td>
                                <td><?= $l['nama_anak'] ?></td>
                                <td><?= $l['nik_anak'] ?></td>
                                <td><?= $l['tgl_anak'] ?></td>
                                <td><?= $l['usia'] ?></td>
                                <td><?= $l['agama'] ?></td>
                                <td><?= $l['tinggi'] ?></td>
                                <td><?= $l['berat_badan'] ?></td>
                                <td><?= $l['hobi'] ?></td>
                                <td><?= $l['cita_cita'] ?></td>
                                <td><?= $l['jarak_rumah_sekolah'] ?></td>
                                <td><?= $l['alamat'] ?></td>
                                <td><?= $l['nama_ayah'] ?></td>
                                <td><?= $l['nik_ayah'] ?></td>
                                <td><?= $l['tgl_ayah'] ?></td>
                                <td><?= $l['nama_ibu'] ?></td>
                                <td><?= $l['nik_ibu'] ?></td>
                                <td><?= $l['tgl_ibu'] ?></td>
                                <td><?= $l['penghasilan'] ?></td>
                                <td><?= $l['status'] ?></td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#update<?= $l['id'] ?>">Update</button> | <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $l['id'] ?>">Delete</button> </td>
                            </tr>
                        	<?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
			</div>
			<!-- /section title -->

		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<div class="modal fade bd-example-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
      	<?php echo form_open_multipart('Administrator/Les/Add') ?>
				<section class="contact-us">
					<div class="container">
						<div class="row">
							<div class="contact-form col-md-12">
							<!-- section title -->
							<div class="col-12">
							<div class="title text-center" >
								<h2>DATA PESERTA DIDIK</h2>
								<div class="border"></div>
							</div>
							</div>
							<!-- /section title -->
							<?php foreach($nopen as $n): 
								$data = $n['no_pendaftar'];
								$date = date('Ym');
								$urutan = (int)substr($data, 6, 3);
								$urutan++;
								$nopen = $date.sprintf("%03s",$urutan);
							?>
								  <div class="form-group">
								  	<label>No.Pendaftar</label>
								  	<input type="text" name="no_pendaftar" class="form-control" value="<?= $nopen ?>" placeholder="Nomor Pendaftar" readonly>
								  </div>
							<?php endforeach; ?>
								  <div class="form-group">
								  	<label>NISN</label>
								  	<input type="text" name="nisn" class="form-control" placeholder="NISN">
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama</label>
								      <input type="text" class="form-control" value="" name="nama_anak" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" class="form-control" value="" name="nik_anak" placeholder="Masukan Nomor Induk Keluarga">
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" class="form-control" value="" name="tgl_anak" id="tgl_lahir">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label>Usia</label>
								  	<input type="text" name="usia" class="form-control" value="" placeholder="Masukan Usia" id="umur" readonly="">
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Agama</label>
								    <select class="form-control" id="exampleFormControlSelect1" name="agama">
								      <option disabled="">-Pilih Salah Satu-</option>
								      <option>Islam</option>
								      <option>Kristen</option>
								      <option>Hindu</option>
								      <option>Budha</option>
								    </select>
								  </div>
								  <div class="form-group">
								  	<label>Tinggi</label>
								  	<input type="text" name="tinggi" class="form-control" value="" placeholder="Masukan Tinggi">
								  </div>
								  <div class="form-group">
								  	<label>Berat Badan</label>
								  	<input type="text" name="berat_badan" class="form-control" value="" placeholder="Masukan Berat Badan">
								  </div>
								  <div class="form-group">
								  	<label>Hobi</label>
								  	<input type="text" name="hobi" class="form-control" value="" placeholder="Masukan Hobi" placeholder="Masukan Hobi">
								  </div>
								  <div class="form-group">
								  	<label>Cita-cita</label>
								  	<input type="text" name="cita_cita" class="form-control" value="" placeholder="Masukan Cita-cita">
								  </div>
								  <div class="form-group">
								  	<label>Jarak Rumah ke Sekolah</label>
								  	<input type="text" name="jarak_rumah_sekolah" class="form-control" value="" placeholder="Masukan Jarak Rumah ke Sekolah">
								  </div>
								  <div class="form-group">
								  	<label>Alamat</label>
								  	<textarea name="alamat" class="form-control" placeholder="Masukan Alamat"></textarea>
								  </div>
							<!-- section title -->
							<div class="col-12">
							<div class="title text-center" >
								<h2>DATA ORANG TUA</h2>
								<div class="border"></div>
							</div>
							</div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama Ayah</label>
								      <input type="text" name="nama_ayah" class="form-control" value="" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" name="nik_ayah" class="form-control" value="" placeholder="Masukan Nomor Induk Keluarga">
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" name="tgl_ayah" class="form-control" value="">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama Ibu</label>
								      <input type="text" name="nama_ibu" class="form-control" value="" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" name="nik_ibu" class="form-control" value="" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" name="tgl_ibu" class="form-control" value="">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label>Penghasilan</label>
								  	<input type="text" name="penghasilan" class="form-control" value="" placeholder="Masukan Penghasilan">
								  </div>
								  <div class="form-group">
								  <label for="exampleInputEmail1">Kartu Keluarga</label>
					        		  <img width="200px" src=""/>
									  <div class="input-group">
								          <div class="custom-file">
								            <input type="file" class="custom-file-input" id="inputGroupFile02" name="kk">
								            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
								          </div>
							          	  <div class="input-group-append">
							            	<span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
									      </div>
						        	  </div>
				  	      		  </div>

					        <br>								  
							<!-- /section title -->
									<div id="cf-submit">
										<input type="submit" id="contact-submit" class="btn btn-transparent" value="Simpan">
									</div>
							</div>	
						</div>
					</div>
				</section>
			<?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!-------- MODAL UPDATE --------->
<?php foreach($les as $l): ?>
<div class="modal fade bd-example-modal-lg" id="update<?= $l['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
      	<?php echo form_open_multipart('Administrator/Les/Update') ?>
				<section class="contact-us">
					<div class="container">
						<div class="row">
							<div class="contact-form col-md-12">
							<!-- section title -->
							<div class="col-12">
							<div class="title text-center" >
								<h2>DATA PESERTA DIDIK</h2>
								<div class="border"></div>
							</div>
							</div>
							<!-- /section title -->
							<input type="hidden" name="id" value="<?= $l['id'] ?>">
								  <div class="form-group">
								  	<label>No.Pendaftar</label>
								  	<input type="text" name="no_pendaftar" class="form-control" value="<?= $l['no_pendaftar']?>" placeholder="Nomor Pendaftar">
								  </div>
								  <div class="form-group">
								  	<label>NISN</label>
								  	<input type="text" name="nisn" class="form-control" value="<?= $l['nisn']?>" placeholder="NISN">
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama</label>
								      <input type="text" class="form-control" value="<?= $l['nama_anak'] ?>" name="nama_anak" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" class="form-control" value="<?= $l['nik_anak'] ?>" name="nik_anak" placeholder="Masukan Nomor Induk Keluarga">
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" class="form-control" value="<?= $l['tgl_anak'] ?>" name="tgl_anak" id="tgl_lahir">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label>Usia</label>
								  	<input type="text" name="usia" class="form-control" value="<?= $l['usia'] ?>" placeholder="Masukan Usia" id="umur">
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Agama</label>
								    <select class="form-control" id="exampleFormControlSelect1" name="agama">
								      <option disabled="">-Pilih Salah Satu-</option>
								      <option>Islam</option>
								      <option>Kristen</option>
								      <option>Hindu</option>
								      <option>Budha</option>
								      <option selected="" value="<?= $l['agama'] ?>"><?= $l['agama'] ?></option>
								    </select>
								  </div>
								  <div class="form-group">
								  	<label>Tinggi</label>
								  	<input type="text" name="tinggi" class="form-control" value="<?= $l['tinggi'] ?>" placeholder="Masukan Tinggi">
								  </div>
								  <div class="form-group">
								  	<label>Berat Badan</label>
								  	<input type="text" name="berat_badan" class="form-control" value="<?= $l['berat_badan'] ?>" placeholder="Masukan Berat Badan">
								  </div>
								  <div class="form-group">
								  	<label>Hobi</label>
								  	<input type="text" name="hobi" class="form-control" value="<?= $l['hobi'] ?>" placeholder="Masukan Hobi" placeholder="Masukan Hobi">
								  </div>
								  <div class="form-group">
								  	<label>Cita-cita</label>
								  	<input type="text" name="cita_cita" class="form-control" value="<?= $l['cita_cita'] ?>" placeholder="Masukan Cita-cita">
								  </div>
								  <div class="form-group">
								  	<label>Jarak Rumah ke Sekolah</label>
								  	<input type="text" name="jarak_rumah_sekolah" class="form-control" value="<?= $l['jarak_rumah_sekolah'] ?>" placeholder="Masukan Jarak Rumah ke Sekolah">
								  </div>
								  <div class="form-group">
								  	<label>Alamat</label>
								  	<textarea name="alamat" class="form-control" placeholder="Masukan Alamat"><?= $l['alamat'] ?></textarea>
								  </div>
							<!-- section title -->
							<div class="col-12">
							<div class="title text-center" >
								<h2>DATA ORANG TUA</h2>
								<div class="border"></div>
							</div>
							</div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama Ayah</label>
								      <input type="text" name="nama_ayah" class="form-control" value="<?= $l['nama_ayah'] ?>" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" name="nik_ayah" class="form-control" value="<?= $l['nik_ayah'] ?>" placeholder="Masukan Nomor Induk Keluarga">
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" name="tgl_ayah" class="form-control" value="<?= $l['tgl_ayah'] ?>">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama Ibu</label>
								      <input type="text" name="nama_ibu" class="form-control" value="<?= $l['nama_ibu'] ?>" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" name="nik_ibu" class="form-control" value="<?= $l['nik_ibu'] ?>" placeholder="Masukan Nama">
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" name="tgl_ibu" class="form-control" value="<?= $l['tgl_ibu'] ?>">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label>Penghasilan</label>
								  	<input type="text" name="penghasilan" class="form-control" value="<?= $l['penghasilan'] ?>" placeholder="Masukan Penghasilan">
								  </div>
								  <div class="form-group">
								  <label for="exampleInputEmail1">Kartu Keluarga</label><br>
					        		  <img width="200px" src="<?= base_url('assets/images/data/'.$l['kk']) ?>"/>
									  <div class="input-group">
								          <div class="custom-file">
								            <input type="file" class="custom-file-input" id="inputGroupFile02" name="kk">
								            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
								          </div>
							          	  <div class="input-group-append">
							            	<span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
									      </div>
						        	  </div>
				  	      		  </div>
				  	      		  <div class="form-group">
								    <label for="exampleFormControlSelect1">Status</label>
								    <select class="form-control" id="exampleFormControlSelect1" name="status">
								      <option disabled="">-Pilih Salah Satu-</option>
								      <option>Diterima</option>
								      <option>Ditolak</option>
								      <option selected=""><?= $l['status'] ?></option>
								    </select>
								  </div>

					        <br>								  
							<!-- /section title -->
									<div id="cf-submit">
										<input type="submit" id="contact-submit" class="btn btn-transparent" value="Simpan">
									</div>
							</div>	
						</div>
					</div>
				</section>
			<?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Delete Modal -->
<?php foreach($les as $l): ?>
<div class="modal fade" id="delete<?= $l['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin Menghapusnya?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('Administrator/Les/Delete/'.$l['id']) ?>" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>