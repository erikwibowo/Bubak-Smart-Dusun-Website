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