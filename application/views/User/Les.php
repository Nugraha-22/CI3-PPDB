<div class="single-page-header" style="background-image: url('<?php echo base_url() ?>assets/images/about/education-3704026_1920.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</div>				
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
							<?= $this->session->flashdata('message'); ?>
							<!-- /section title -->
							<?= form_open_multipart('User/Les/Add'); ?>
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
								  	<input type="text" name="nisn" class="form-control" placeholder="Masukan NISN" value="<?= set_value('nisn') ?>">
								  	<?= form_error('nisn','<small class="text-danger pl-3">','</small>'); ?>
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama</label>
								      <input type="text" class="form-control" value="<?php echo set_value('nama_anak') ?>" name="nama_anak" placeholder="Masukan Nama">
								      <?= form_error('nama_anak','<small class="text-danger pl-3">','</small>'); ?>
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" class="form-control" value="<?= set_value('nik_anak') ?>" name="nik_anak" placeholder="Masukan Nomor Induk Keluarga">
								      <?= form_error('nik_anak','<small class="text-danger pl-3">','</small>'); ?>
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" class="form-control" value="<?= set_value('tgl_anak') ?>" name="tgl_anak" id="tgl_lahir">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label>Usia</label>
								  	<input type="text" name="usia" class="form-control" value="<?= set_value('usia') ?>" placeholder="Masukan Usia" id="umur" readonly="">
								  	  <?= form_error('usia','<small class="text-danger pl-3">','</small>'); ?>
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
								  	<input type="text" name="tinggi" class="form-control" value="<?php echo set_value('tinggi'); ?>" placeholder="Masukan Tinggi">
								  	<?= form_error('tinggi','<small class="text-danger pl-3">','</small>'); ?>
								  </div>
								  <div class="form-group">
								  	<label>Berat Badan</label>
								  	<input type="text" name="berat_badan" class="form-control" value="<?php echo set_value('berat_badan'); ?>" placeholder="Masukan Berat Badan">
								  	<?= form_error('berat_badan','<small class="text-danger pl-3">','</small>'); ?>
								  </div>
								  <div class="form-group">
								  	<label>Hobi</label>
								  	<input type="text" name="hobi" class="form-control" value="<?php echo set_value('hobi'); ?>" placeholder="Masukan Hobi" placeholder="Masukan Hobi">
								  	<?= form_error('hobi','<small class="text-danger pl-3">','</small>'); ?>
								  </div>
								  <div class="form-group">
								  	<label>Cita-cita</label>
								  	<input type="text" name="cita_cita" class="form-control" value="<?php echo set_value('cita_cita'); ?>" placeholder="Masukan Cita-cita">
								  	<?= form_error('cita_cita','<small class="text-danger pl-3">','</small>'); ?>
								  </div>
								  <div class="form-group">
								  	<label>Jarak Rumah ke Sekolah</label>
								  	<input type="text" name="jarak_rumah_sekolah" class="form-control" value="<?php echo set_value('jarak_rumah_sekolah'); ?>" placeholder="Masukan Jarak Rumah ke Sekolah">
								  	<?= form_error('jarak_rumah_sekolah','<small class="text-danger pl-3">','</small>'); ?>
								  </div>
								  <div class="form-group">
								  	<label>Alamat</label>
								  	<textarea name="alamat" class="form-control" placeholder="Masukan Alamat"><?php echo set_value('alamat'); ?></textarea>
								  	<?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
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
								      <input type="text" name="nama_ayah" class="form-control" value="<?php echo set_value('nama_ayah'); ?>" placeholder="Masukan Nama">
								      <?= form_error('nama_ayah','<small class="text-danger pl-3">','</small>'); ?>
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" name="nik_ayah" class="form-control" value="<?php echo set_value('nik_ayah'); ?>" placeholder="Masukan Nomor Induk Keluarga">
								      <?= form_error('nik_ayah','<small class="text-danger pl-3">','</small>'); ?>
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" name="tgl_ayah" class="form-control" value="<?php echo set_value('tgl_ayah'); ?>">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-4">
								    <label>Nama Ibu</label>
								      <input type="text" name="nama_ibu" class="form-control" value="<?php echo set_value('nama_ibu'); ?>" placeholder="Masukan Nama">
								      <?= form_error('nama_ibu','<small class="text-danger pl-3">','</small>'); ?>
								    </div>
								    <div class="form-group col-md-4">
								    <label>NIK</label>
								      <input type="text" name="nik_ibu" class="form-control" value="<?php echo set_value('nik_ibu'); ?>" placeholder="Masukan Nama">
								      <?= form_error('nik_ibu','<small class="text-danger pl-3">','</small>'); ?>
								    </div>
								    <div class="form-group col-md-4">
								    <label>Tanggal Lahir</label>
								      <input type="date" name="tgl_ibu" class="form-control" value="<?php echo set_value('tgl_ibu'); ?>">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label>Penghasilan</label>
								  	<input type="text" name="penghasilan" class="form-control" value="<?php echo set_value('penghasilan'); ?>" placeholder="Masukan Penghasilan">
								  	<?= form_error('penghasilan','<small class="text-danger pl-3">','</small>'); ?>
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