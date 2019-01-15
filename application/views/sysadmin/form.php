<?php if ($content == "tambah-pengguna"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <form class="form-horizontal" action="<?= site_url('admin/pengguna/create') ?>" method="POST">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
	                    <div class="col-md-6 col-xs-12">                                            
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
	                            <input type="text" autofocus maxlength="100" name="nama" required placeholder="Nama Lengkap" class="form-control"/>
	                        </div>                                            
	                        <!-- <span class="help-block">Nama Lengkap Pengguna</span> -->
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Satker</label>
	                    <div class="col-md-6 col-xs-12">                                                                      
	                        <select class="form-control select" data-live-search="true" required name="kdurusan">
	                            <?php foreach ($satker as $key): ?>
	                            <option value="<?= $key->kdurusan ?>"><?= $key->kdurusan." - ".$key->nmurusan ?></option>
	                            <?php endforeach ?>
	                        </select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Nama Pengguna</label>
	                    <div class="col-md-6 col-xs-12">                                            
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
	                            <input type="text" maxlength="50" name="username" required placeholder="Nama Pengguna" class="form-control"/>
	                        </div>                                            
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Kata Sandi</label>
	                    <div class="col-md-6 col-xs-12">                                            
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
	                            <input type="password" maxlength="64" name="password" required placeholder="Kata Sandi" class="form-control"/>
	                        </div>                                            
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Level</label>
	                    <div class="col-md-6 col-xs-12">                                                                      
	                        <select class="form-control select" data-live-search="true" required name="level">
	                            <option value="administrator">ADMINISTRATOR</option>
	                            <option value="penatausahaan">PENATAUSAHAAN</option>
	                            <option value="anggaran">ANGGARAN</option>
	                            <option value="akuntansi">AKUNTANSI</option>
	                        </select>
	                    </div>
	                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	        
	    </div>
	</div>             
<?php } ?>

<?php if ($content == "edit-pengguna"){
	foreach($data as $key) { ?>
	<div class="row">
	    <div class="col-md-12">
	        <form class="form-horizontal" action="<?= site_url('admin/pengguna/update') ?>" method="POST">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
	                    <div class="col-md-6 col-xs-12">                                            
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
	                            <input type="text" autofocus maxlength="100" name="nama" value="<?= $key->nama ?>" required placeholder="Nama Lengkap" class="form-control"/>
	                        </div>                                            
	                        <!-- <span class="help-block">Nama Lengkap Pengguna</span> -->
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Satker</label>
	                    <div class="col-md-6 col-xs-12">                                                                      
	                        <select class="form-control select" data-live-search="true" required name="kdurusan">
	                            <?php foreach ($satker as $satker): ?>
	                            <option <?= $key->kdurusan == $satker->kdurusan ? "selected":"" ?> value="<?= $satker->kdurusan ?>"><?= $satker->kdurusan." - ".$satker->nmurusan ?></option>
	                            <?php endforeach ?>
	                        </select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Nama Pengguna</label>
	                    <div class="col-md-6 col-xs-12">                                            
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
	                            <input type="text" maxlength="50" name="username" value="<?= $key->username ?>" required placeholder="Nama Pengguna" class="form-control"/>
	                        </div>                                            
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Kata Sandi</label>
	                    <div class="col-md-6 col-xs-12">                                            
	                        <div class="input-group">
	                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
	                            <input type="password" maxlength="64" name="password" placeholder="Kata Sandi" class="form-control"/>
	                            <input type="hidden" name="id" value="<?= $key->id ?>">
	                        </div>
	                        <span class="help-block" style="color: red">Isi password jika ingin mengubah password</span>                                     
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 col-xs-12 control-label">Level</label>
	                    <div class="col-md-6 col-xs-12">                                                                      
	                        <select class="form-control select" data-live-search="true" required name="level">
	                            <option <?= $key->level == "administrator" ? "selected":"" ?> value="administrator">ADMINISTRATOR</option>
	                            <option <?= $key->level == "penatausahaan" ? "selected":"" ?> value="penatausahaan">PENATAUSAHAAN</option>
	                            <option <?= $key->level == "anggaran" ? "selected":"" ?> value="anggaran">ANGGARAN</option>
	                            <option <?= $key->level == "akuntansi" ? "selected":"" ?> value="akuntansi">AKUNTANSI</option>
	                        </select>
	                    </div>
	                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } } ?>

<?php if ($content == "config-aplikasi"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls pull-left">
		            	<li style="margin-left: 10px">
		            		<form>
		                		<select style="width: 400px" name="id_satker" id="id_satker" class="select" data-live-search="true" onchange="satker()">
		                			<option>-- Pilih Satker --</option>
		                			<?php foreach ($satker as $satker): ?>
		                			<option <?= $satker->kdurusan == $this->input->get('id_satker') ? "selected":"" ?> value="<?= $satker->kdurusan ?>"><?= $satker->kdurusan." - ".$satker->nmurusan ?></option>
		                			<?php endforeach ?>
		                		</select>
		                	</form>
		                	<script type="text/javascript">
		                		function satker() {
		                			var id_satker = document.getElementById("id_satker");
		                			window.location = "<?= site_url('admin/utilitas/config-aplikasi?id_satker=') ?>"+id_satker.value;
		                		}
		                	</script>
		            	</li>
		            </ul>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	            	<?php foreach ($data as $key){ ?>
	            	<form class="form-horizontal" action="<?= site_url('admin/utilitas/config_aplikasi_update') ?>" method="POST">
	                <div class="col-md-8 col-md-offset-2">
	                	<div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Tahun Anggaran</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="number" value="<?= $key->tahun ?>" maxlength="4" name="tahun" required placeholder="Tahun Anggaran" class="form-control"/>
		                    </div>
		                    <label class="col-md-2 col-xs-12 control-label">% Kenaikan n + 1</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="number" value="<?= $key->prosentase ?>" name="prosentase" required placeholder="% Kenaikan n + 1" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Format Urusan</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="text" value="<?= $key->f_urusan ?>" name="f_urusan" required placeholder="Format Urusan" class="form-control"/>
		                    </div>
		                    <label class="col-md-2 col-xs-12 control-label">Format Rekening</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="text" value="<?= $key->f_rek ?>" name="f_rek" required placeholder="Format Rekening" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Format Program</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="text" value="<?= $key->f_program ?>" name="f_program" required placeholder="Format Program" class="form-control"/>
		                    </div>
		                    <label class="col-md-2 col-xs-12 control-label">Format Kegiatan</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="text" value="<?= $key->f_kegiatan ?>" name="f_kegiatan" required placeholder="Format Kegiatan" class="form-control"/>
		                    </div>
		                </div>
		                <br>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Wilayah / Daerah</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->daerah ?>" name="daerah" required placeholder="Wilayah / Daerah" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Kepala Daerah</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->jabat_kdh ?>" name="jabat_kdh" required placeholder="Kepala Daerah" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Nama Kepala Daerah</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nama_kdh ?>" name="nama_kdh" required placeholder="Nama Kepala Daerah" class="form-control"/>
		                    </div>
		                </div>
		                <br>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Jenis Aplikasi</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nama_kdh ?>" name="nama_kdh" required placeholder="Jenis Aplikasi" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Kode SKPD</label>
		                    <div class="col-md-4 col-xs-12">                                            
		                        <input type="text" value="<?= $key->kode_skpd ?>" name="kode_skpd" required placeholder="Kode SKPD" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Nama SKPD</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nama_skpd ?>" name="nama_skpd" required placeholder="Nama SKPD" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">ALamat</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->alamat ?>" name="alamat" required placeholder="ALamat" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Kota</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->kota ?>" name="kota" required placeholder="Kota" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Bank Daerah</label>
		                    <div class="col-md-10 col-xs-12">                                            
		                        <input type="text" value="<?= $key->bank ?>" name="bank" required placeholder="Bank Daerah" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-2 col-xs-12 control-label">Bank Daerah</label>
		                    <div class="col-md-4 col-xs-12">
								<select class="form-control select" data-live-search="true" name="anggaran">
									<option>-- Pilih Anggaran --</option>
									<option <?= $key->anggaran == "Penyusunan" ? "selected":"" ?> value="Penyusunan">Penyusunan</option>
									<option <?= $key->anggaran == "Parsial I" ? "selected":"" ?> value="Parsial I">Parsial I</option>
									<option <?= $key->anggaran == "Parsial II" ? "selected":"Parsial II" ?> value="">Parsial II</option>
									<option <?= $key->anggaran == "Parsial III" ? "selected":"Parsial III" ?> value="">Parsial III</option>
									<option <?= $key->anggaran == "Perubahan" ? "selected":"" ?> value="Perubahan">Perubahan</option>
								</select>
								<input type="hidden" name="kode_skpd" value="<?= $this->input->get('id_satker') ?>">
		                    </div>
		                </div>
	                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } } ?>

<?php if ($content == "config-pejabat-daerah"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls pull-left">
		            	<li style="margin-left: 10px">
		            		<form>
		                		<select style="width: 400px" name="id_satker" id="id_satker" class="select" data-live-search="true" onchange="satker()">
		                			<option>-- Pilih Satker --</option>
		                			<?php foreach ($satker as $satker): ?>
		                			<option <?= $satker->kdurusan == $this->input->get('id_satker') ? "selected":"" ?> value="<?= $satker->kdurusan ?>"><?= $satker->kdurusan." - ".$satker->nmurusan ?></option>
		                			<?php endforeach ?>
		                		</select>
		                	</form>
		                	<script type="text/javascript">
		                		function satker() {
		                			var id_satker = document.getElementById("id_satker");
		                			window.location = "<?= site_url('admin/utilitas/config-pejabat-daerah?id_satker=') ?>"+id_satker.value;
		                		}
		                	</script>
		            	</li>
		            </ul>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	            	<?php foreach ($data as $key){ ?>
	            	<form class="form-horizontal" action="<?= site_url('admin/utilitas/config_pejabat_daerah_update') ?>" method="POST">
	                <div class="col-md-8 col-md-offset-2">
		                <div class="form-group">
		                    <label style="text-align: left;color: blue" class="col-md-3 col-xs-12 control-label">SEKRETARIS DAERAH</label>
		                    <label style="text-align: left;color: blue" class="col-md-8 col-xs-6 control-label"><i>)* Selaku pejabat yang menyetujui DPA</i></label>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">NAMA</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nama_setda ?>" name="nama_setda" required placeholder="NAMA" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">NIP</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nip_setda ?>" name="nip_setda" required placeholder="NIP" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">PANGKAT</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->pangkat_setda ?>" name="pangkat_setda" required placeholder="PANGKAT" class="form-control"/>
		                    </div>
		                </div>
		                <br>
		                <div class="form-group">
		                    <label style="text-align: left;color: blue" class="col-md-3 col-xs-12 control-label">PEJABAT PENGELOLA KEUANGAN DAERAH (PPKD)</label>
		                    <label style="text-align: left;color: blue" class="col-md-8 col-xs-6 control-label"><i>)* Selaku pejabat yang mengesahkan DPA sekaligus sebagai BUD</i></label>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">JABATAN</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->jabat_bud ?>" name="jabat_bud" required placeholder="JABATAN" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">NAMA</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nama_bud ?>" name="nama_bud" required placeholder="NAMA" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">NIP</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nip_bud ?>" name="nip_bud" required placeholder="NIP" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">PANGKAT</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->pangkat_bud ?>" name="pangkat_bud" required placeholder="PANGKAT" class="form-control"/>
		                    </div>
		                </div>
		                <br>

		                <div class="form-group">
		                    <label style="text-align: left;color: blue" class="col-md-3 col-xs-12 control-label">KUASA BUD</label>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">NAMA</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nama_kbud ?>" name="nama_kbud" required placeholder="NAMA" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">NIP</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->nip_kbud ?>" name="nip_kbud" required placeholder="NIP" class="form-control"/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-md-3 col-xs-12 control-label">PANGKAT</label>
		                    <div class="col-md-9 col-xs-12">                                            
		                        <input type="text" value="<?= $key->pangkat_kbud ?>" name="pangkat_kbud" required placeholder="PANGKAT" class="form-control"/>
		                        <input type="hidden" name="kode_skpd" value="<?= $this->input->get('id_satker') ?>">
		                    </div>
		                </div>
	                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } } ?>

<?php if ($content == "tanda-tangan"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls pull-left">
		            	<li style="margin-left: 10px">
		            		<form>
		                		<select style="width: 400px" name="id_satker" id="id_satker" class="select" data-live-search="true" onchange="satker()">
		                			<option>-- Pilih Satker --</option>
		                			<?php foreach ($satker as $satker): ?>
		                			<option <?= $satker->kdurusan == $this->input->get('id_satker') ? "selected":"" ?> value="<?= $satker->kdurusan ?>"><?= $satker->kdurusan." - ".$satker->nmurusan ?></option>
		                			<?php endforeach ?>
		                		</select>
		                	</form>
		                	<script type="text/javascript">
		                		function satker() {
		                			var id_satker = document.getElementById("id_satker");
		                			window.location = "<?= site_url('admin/laporan/tanda-tangan?id_satker=') ?>"+id_satker.value;
		                		}
		                	</script>
		            	</li>
		            </ul>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	            	<?php if (count($data) != 0){ ?>
	            		<?php foreach ($data as $key){ ?>
		            	<form class="form-horizontal" action="<?= site_url('admin/laporan/tanda_tangan_update') ?>" method="POST">
		                <div class="col-md-8 col-md-offset-2">
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">JABATAN</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <textarea name="jabatan" required placeholder="JABATAN" class="form-control"><?= $key->jabatan ?></textarea>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">NAMA</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="<?= $key->nama_jabat ?>" name="nama_jabat" placeholder="NAMA" required class="form-control">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">PANGKAT</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="<?= $key->pangkat ?>" name="pangkat" placeholder="PANGKAT" required class="form-control">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">NIP</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="<?= $key->nip ?>" name="nip" placeholder="NIP" required class="form-control">
			                        <input type="hidden" name="kdurusan" value="<?= $key->kdurusan ?>">
			                    </div>
			                </div>
		                </div>
	            	<?php } }else{ ?>
		            	<form class="form-horizontal" action="<?= site_url('admin/laporan/tanda_tangan_insert') ?>" method="POST">
		                <div class="col-md-8 col-md-offset-2">
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">JABATAN</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <textarea name="jabatan" required placeholder="JABATAN" class="form-control"></textarea>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">NAMA</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="" name="nama_jabat" placeholder="NAMA" required class="form-control">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">PANGKAT</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="" name="pangkat" placeholder="PANGKAT" required class="form-control">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">NIP</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="" name="nip" placeholder="NIP" required class="form-control">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">SATKER</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="<?= $this->input->get('id_satker') ?>" name="kdurusan" placeholder="SATKER" required class="form-control">
			                    </div>
			                </div>
		                </div>
	            	<?php } ?>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Simpan</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } ?>

<?php if ($content == "realisasi-belanja-langsung"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	            	<form class="form-horizontal" action="<?= site_url('admin/laporan/cetak-realisasi-belanja-langsung') ?>" method="POST">
		                <div class="col-md-8 col-md-offset-2">
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">SKPD</label>
			                    <div class="col-md-9 col-xs-12">
				            		<select class="form-control select" data-live-search="true" name="kdurusan">
				            			<?php foreach ($satker as $satker): ?>
				            			<option <?= $satker->kdurusan == $this->input->get('id_satker') ? "selected":"" ?> value="<?= $satker->kdurusan ?>"><?= $satker->kdurusan." - ".$satker->nmurusan ?></option>
				            			<?php endforeach ?>
				            		</select>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">TANGGAL CETAK</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="<?= date('Y-m-d') ?>" name="tgl_cetak" placeholder="NAMA" required readonly class="form-control datepicker">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">BULAN</label>
			                    <div class="col-md-9 col-xs-12">
				            		<select class="form-control select" data-live-search="true" name="bulan">
				            			<?php foreach ($bulan as $bln): ?>
				            			<option value="<?= $bln->kode ?>"><?= $bln->nama ?></option>
				            			<?php endforeach ?>
				            		</select>
			                    </div>
			                </div>
		                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Cetak</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } ?>

<?php if ($content == "realisasi-dak"){ ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	                <h3 class="panel-title"><?= $subtitle ?></h3>
	                <ul class="panel-controls">
	                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
	                </ul>
	            </div>
	            <div class="panel-body">
	            	<form class="form-horizontal" action="<?= site_url('admin/laporan/cetak-realisasi-dak') ?>" method="POST">
		                <div class="col-md-8 col-md-offset-2">
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">SKPD</label>
			                    <div class="col-md-9 col-xs-12">
				            		<select class="form-control select" data-live-search="true" name="kdurusan">
				            			<?php foreach ($satker as $satker): ?>
				            			<option <?= $satker->kdurusan == $this->input->get('id_satker') ? "selected":"" ?> value="<?= $satker->kdurusan ?>"><?= $satker->kdurusan." - ".$satker->nmurusan ?></option>
				            			<?php endforeach ?>
				            		</select>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">TANGGAL CETAK</label>
			                    <div class="col-md-9 col-xs-12">                                            
			                        <input type="text" value="<?= date('Y-m-d') ?>" name="tgl_cetak" placeholder="NAMA" required readonly class="form-control datepicker">
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label">BULAN</label>
			                    <div class="col-md-9 col-xs-12">
				            		<select class="form-control select" data-live-search="true" name="bulan">
				            			<?php foreach ($bulan as $bln): ?>
				            			<option value="<?= $bln->kode ?>"><?= $bln->nama ?></option>
				            			<?php endforeach ?>
				            		</select>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <label class="col-md-3 col-xs-12 control-label"></label>
			                    <div class="col-md-9 col-xs-12">
			                        <label class="check"><input name="ttd" type="checkbox" value="true" class="icheckbox"/> Tidak menampilkan TTD</label>
			                    </div>
			                </div>
			                <div class="form-group">
                                <div class="col-md-4 col-md-offset-3">
                                    <label class="check"><input type="radio" class="iradio" value="Reguler" name="jenis" checked /> Reguler</label> <br>
                                    <label class="check"><input type="radio" class="iradio" value="Penugasan" name="jenis"/> Penugasan</label> <br>
                                    <label class="check"><input type="radio" class="iradio" value="Non Fisik" name="jenis"/> Non Fisik</label>
                                </div>
                            </div>
		                </div>
	            </div>
	            <div class="panel-footer">
	                <center>                                  
	                	<button type="submit" class="btn btn-success">Cetak</button>
	                	<a class="btn btn-danger" onclick="history.back()">Batal</a>  
	                </center>
	            </div>
	        </div>
	        </form>
	    </div>
	</div>             
<?php } ?>