<?php if ($content == "data-rt") { ?>
	<div class="row">
		<div class="col-md-12">
		    <div class="panel panel-info">
		        <div class="panel-heading">
		            <h3 class="panel-title"><?= $subtitle ?></h3>
		            <ul class="panel-controls">
		                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
		                <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
		                <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
		            </ul>
		        </div>
		        <div class="panel-body table-responsive">
		            <table class="table datatable table-bordered table-condensed table-hover table-striped">
		                <thead>
		                    <tr>
		                        <th>No.</th>
		                        <th>RT</th>
		                        <th>Ketua RT</th>
		                        <th width="5%">Aksi</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php $no = 1; foreach ($data as $key): ?>
		                    <tr>
		                        <td><?= $no++ ?></td>
		                        <td><?= $key->rt ?></td>
		                        <td><?= $key->ketua_rt ?></td>
		                        <td>
		                        	<a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#satker<?= $key->id_rt ?>">Lihat</a>
		                        </td>
		                    </tr>
		                    <?php endforeach ?>
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
	</div>
<?php } ?>

<?php if ($content == "data-rw") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>RW</th>
                                <th>Ketua RW</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->rw ?></td>
                                <td><?= $key->ketua_rw ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#satker<?= $key->id_rw ?>">Lihat</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-warga") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Warga</th>
                                <th>RT/RW</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap_warga ?></td>
                                <td><?= $key->rt."/".$key->rw ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#satker<?= $key->id_rw ?>">Lihat</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-kegiatan") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Kegiatan</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_kegiatan ?></td>
                                <td><?= $key->mulai ?></td>
                                <td><?= $key->selesai ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#satker<?= $key->id_kegiatan ?>">Lihat</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-penarikan-dana") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;" rowspan="2">No.</th>
                                <th style="text-align: center;" rowspan="2">Nama Kegiatan</th>
                                <th style="text-align: center;" colspan="4" style="text-align: center;">Dana</th>
                                <th style="text-align: center;" rowspan="2" width="5%">Aksi</th>
                            </tr>
                            <tr>
                            	<th style="text-align: center;">RT 1</th>
                            	<th style="text-align: center;">RT 2</th>
                            	<th style="text-align: center;">RT 3</th>
                            	<th style="text-align: center;">RT 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_kegiatan ?></td>
                                <td style="text-align: right;"><?= $key->jml_rt1 ?></td>
                                <td style="text-align: right;"><?= $key->jml_rt2 ?></td>
                                <td style="text-align: right;"><?= $key->jml_rt3 ?></td>
                                <td style="text-align: right;"><?= $key->jml_rt4 ?></td>
                                <td>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/input?id_kegiatan='.$key->id_kegiatan) ?>" data-toggle="tooltip" data-placement="top" title="Input dana kegiatan" class="btn btn-xs btn-success">Input Dana</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "input-penarikan-dana") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="pull-left">
                    	<select class="select" data-live-search="true" id="rt" onchange="rt_change()">
                    		<option>-- Pilih RT --</option>
                    		<?php foreach ($data_rt as $rt): ?>
                    		<option <?= $this->input->get('rt') == $rt->id_rt ? "selected":"" ?> value="<?= $rt->id_rt ?>"><?= $rt->rt ?></option>
                    		<?php endforeach ?>
                    	</select>
                    	<script type="text/javascript">
                    		function rt_change(){
                    			var rt = document.getElementById("rt");
                    			window.location = "<?= site_url('sysadmin/penarikan-dana/input?id_kegiatan='.$this->input->get('id_kegiatan').'&rt=') ?>"+rt.value;
                    		}
                    	</script>
                    </ul>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <form action="<?= site_url('sysadmin/penarikan-dana/save') ?>" method="POST">
                <div class="panel-body table-responsive">
                    <div class="col-md-6 col-md-offset-3">
                    	<table class="table table-bordered table-condensed table-hover table-striped">
	                        <thead>
	                            <tr>
	                                <th>Warga</th>
	                                <th>Dana</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php $no = 1; foreach ($data as $key): ?>
	                            <tr>
	                                <td><?= $key->nama_lengkap_warga ?></td>
	                                <td>
	                                	<input class="form-control" type="number" name="jumlah<?= $key->id_warga ?>" placeholder="Jumlah">
	                                </td>
	                            </tr>
	                            <?php endforeach ?>
	                        </tbody>
	                    </table>
	                    <input type="hidden" name="id_kegiatan" value="<?= $this->input->get('id_kegiatan') ?>">
	                    <input type="hidden" name="id_rt" value="<?= $this->input->get('rt') ?>">
                    </div>
                </div>
                <div class="panel-footer">
                	<center>
                		<button class="btn btn-success" type="submit">Simpan</button>
                		<a href="<?= site_url('sysadmin/penarikan-dana') ?>" class="btn btn-danger">Batal</a>
                	</center>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php } ?>