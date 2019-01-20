<?php if ($content == "data-admin") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahadmin" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah RT -->
                        <div class="modal" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/admin/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_lengkap" required placeholder="masukkan nama lengkap" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nomor Telepon</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="no_telepon" required placeholder="masukkan nomor telepon" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" name="password" required placeholder="masukkan password" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">RT</label>
                                                <div class="col-md-9">
                                                    <select class="form-control select" data-live-search="true" name="id_rt" required>
                                                        <option>-- Pilih RT --</option>
                                                        <?php foreach ($data_rt as $rt): ?>
                                                            <option value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah RT -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>RT</th>
                                <th>No. Telepon</th>
                                <th>Dibuat</th>
                                <th>Login</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap ?></td>
                                <td><?= 'RT 0'.$key->id_rt ?></td>
                                <td><?= $key->no_telepon ?></td>
                                <td><?= $key->dibuat ?></td>
                                <td><?= $key->login ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editadmin<?= $key->id_admin ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/admin/delete/'.$key->id_admin) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Admin?\n<?= $key->nama_lengkap ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_admin ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah RT -->
    <div class="modal" id="editadmin<?= $key->id_admin ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/admin/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_lengkap" required placeholder="masukkan nama lengkap" class="form-control" value="<?= $key->nama_lengkap ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nomor Telepon</label>
                            <div class="col-md-9">
                                <input type="text" name="no_telepon" required placeholder="masukkan nomor telepon" class="form-control" value="<?= $key->no_telepon ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" required placeholder="masukkan password" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">RT</label>
                            <div class="col-md-9">
                                <select class="form-control select" data-live-search="true" name="id_rt" required>
                                    <option>-- Pilih RT --</option>
                                    <?php foreach ($data_rt as $rt): ?>
                                        <option <?= $key->id_rt == $rt->id_rt ? "selected":"" ?> value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                    <?php endforeach ?>
                                </select>
                                <input type="hidden" name="id_admin" value="<?= $key->id_admin ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah RT -->
<?php } } ?>

<?php if ($content == "data-rt") { ?>
	<div class="row">
		<div class="col-md-12">
		    <div class="panel panel-info">
		        <div class="panel-heading">
		            <h3 class="panel-title"><?= $subtitle ?></h3>
		            <ul class="panel-controls">
		                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
		                <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahrt" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah RT -->
                        <div class="modal" id="tambahrt" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah RT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rt/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama RT</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="rt" required placeholder="masukkan nama rt" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Ketua RT</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="ketua_rt" required placeholder="masukkan ketua rt" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah RT -->
		            </ul>
		        </div>
		        <div class="panel-body table-responsive">
		            <table class="table datatable table-bordered table-condensed table-hover table-striped">
		                <thead>
		                    <tr>
		                        <th>No.</th>
		                        <th>RT</th>
		                        <th>Ketua RT</th>
		                        <th>Aksi</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php $no = 1; foreach ($data as $key): ?>
		                    <tr>
		                        <td><?= $no++ ?></td>
		                        <td><?= $key->rt ?></td>
		                        <td><?= $key->ketua_rt ?></td>
		                        <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editrt<?= $key->id_rt ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/rt/delete/'.$key->id_rt) ?>" onclick="return confirm('Apakah anda yakin akan menghapus RT?\n<?= $key->rt ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_rt ?>">Hapus</a>
		                        </td>
		                    </tr>
		                    <?php endforeach ?>
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
	</div>
<?php foreach ($data as $key){ ?>
    <!-- Modal edit rt -->
    <div class="modal" id="editrt<?= $key->id_rt ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah RT</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rt/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama RT</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->rt ?>" name="rt" required placeholder="masukkan nama rt" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Ketua RT</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->ketua_rt ?>" name="ketua_rt" required placeholder="masukkan ketua rt" class="form-control" value=""/>
                                <input type="hidden" name="id_rt" value="<?= $key->id_rt ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit rt -->
<?php } } ?>

<?php if ($content == "data-rw") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahrw" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah RT -->
                        <div class="modal" id="tambahrw" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah RW</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rw/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama RW</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="rw" required placeholder="masukkan nama rw" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Ketua RW</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="ketua_rw" required placeholder="masukkan ketua rw" class="form-control" value=""/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah RT -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>RW</th>
                                <th>Ketua RW</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->rw ?></td>
                                <td><?= $key->ketua_rw ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editrw<?= $key->id_rw ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/rw/delete/'.$key->id_rw) ?>" onclick="return confirm('Apakah anda yakin akan menghapus RW?\n<?= $key->rw ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_rw ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal edit rw -->
    <div class="modal" id="editrw<?= $key->id_rw ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah RW</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/rw/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama RW</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->rw ?>" name="rw" required placeholder="masukkan nama rw" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Ketua RW</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->ketua_rw ?>" name="ketua_rw" required placeholder="masukkan ketua rw" class="form-control" value=""/>
                                <input type="hidden" name="id_rw" value="<?= $key->id_rw ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal edit rw -->
<?php } } ?>

<?php if ($content == "data-warga") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahwarga" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Warga -->
                        <div class="modal" id="tambahwarga" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/warga/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Warga</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_lengkap_warga" required placeholder="masukkan nama warga" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">RT</label>
                                                <div class="col-md-9">
                                                    <select class="form-control select" data-live-search="true" name="id_rt" required>
                                                        <option>-- Pilih RT --</option>
                                                        <?php foreach ($data_rt as $rt): ?>
                                                            <option value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Warga -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Warga</th>
                                <th>RT/RW</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap_warga ?></td>
                                <td><?= $key->rt."/".$key->rw ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editwarga<?= $key->id_warga ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/warga/delete/'.$key->id_warga) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Warga?\n<?= $key->nama_lengkap_warga ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_warga ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal edit rw -->
    <div class="modal" id="editwarga<?= $key->id_warga ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/warga/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Warga</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_lengkap_warga" value="<?= $key->nama_lengkap_warga ?>" required placeholder="masukkan nama warga" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">RT</label>
                            <div class="col-md-9">
                                <select class="form-control select" data-live-search="true" name="id_rt" required>
                                    <option>-- Pilih RT --</option>
                                    <?php foreach ($data_rt as $rt): ?>
                                        <option <?= $key->id_rt == $rt->id_rt ? "selected":"" ?> value="<?= $rt->id_rt ?>"><?= 'RT '.$rt->rt ?></option>
                                    <?php endforeach ?>
                                </select>
                                <input type="hidden" name="id_warga" value="<?= $key->id_warga ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Warga -->
<?php } } ?>

<?php if ($content == "data-kegiatan") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="#" class="panel-print"><span class="fa fa-print" data-toggle="tooltip" data-placement="top" title="Cetak"></span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#tambahkegiatan" class="panel-plus"><span class="fa fa-plus"></span></a></li>
                        <!-- Modal tambah Warga -->
                        <div class="modal" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/kegiatan/insert') ?>">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Kegiatan</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama_kegiatan" required placeholder="masukkan nama kegiatan" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Anggaran</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="anggaran" required placeholder="masukkan anggaran" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Iuran</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="iuran" required placeholder="masukkan iuran" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Mulai</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="mulai" required placeholder="waktu mulai" class="form-control datepicker"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Selesai</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="selesai" required placeholder="waktu selesai" class="form-control datepicker"/>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal tambah Warga -->
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Kegiatan</th>
                                <th>Anggaran</th>
                                <th>Iuran</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data as $key): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_kegiatan ?></td>
                                <td><?= rp($key->anggaran) ?></td>
                                <td><?= rp($key->iuran) ?></td>
                                <td><?= $key->mulai ?></td>
                                <td><?= $key->selesai ?></td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#editkegiatan<?= $key->id_kegiatan ?>">Edit</a>
                                    <a href="<?= site_url('sysadmin/kegiatan/delete/'.$key->id_kegiatan) ?>" onclick="return confirm('Apakah anda yakin akan menghapus Kegiatan?\n<?= $key->nama_kegiatan ?>')" class="btn btn-xs btn-danger" data-target="#rt<?= $key->id_kegiatan ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php foreach ($data as $key){ ?>
    <!-- Modal tambah Warga -->
    <div class="modal" id="editkegiatan<?= $key->id_kegiatan ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="defModalHead">Tambah Warga</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="<?= site_url('sysadmin/kegiatan/update') ?>">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Kegiatan</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->nama_kegiatan ?>" name="nama_kegiatan" required placeholder="masukkan nama kegiatan" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Anggaran</label>
                            <div class="col-md-9">
                                <input type="number" value="<?= $key->anggaran ?>" name="anggaran" required placeholder="masukkan anggaran" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Iuran</label>
                            <div class="col-md-9">
                                <input type="number" value="<?= $key->iuran ?>" name="iuran" required placeholder="masukkan iuran" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mulai</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->mulai ?>" name="mulai" required placeholder="waktu mulai" class="form-control datepicker"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Selesai</label>
                            <div class="col-md-9">
                                <input type="text" value="<?= $key->selesai ?>" name="selesai" required placeholder="waktu selesai" class="form-control datepicker"/>
                                <input type="hidden" name="id_kegiatan" value="<?= $key->id_kegiatan ?>">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of modal tambah Warga -->
<?php } } ?>

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
                                <th style="text-align: center;" rowspan="2">Aksi</th>
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
                                <td style="text-align: right;"><?= rp($key->jml_rt1) ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt2) ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt3) ?></td>
                                <td style="text-align: right;"><?= rp($key->jml_rt4) ?></td>
                                <td>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/input?id_kegiatan='.$key->id_kegiatan) ?>" data-toggle="tooltip" data-placement="top" title="Input dana kegiatan" class="btn btn-xs btn-warning">Input Dana</a>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/rinci?id_kegiatan='.$key->id_kegiatan) ?>" data-toggle="tooltip" data-placement="top" title="Rincian dana kegiatan per RT" class="btn btn-xs btn-success">Rinci</a>
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

<?php if ($content == "data-rinci-penarikan-dana") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $subtitle ?></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand" data-toggle="tooltip" data-placement="top" title="Layar Penuh"></span></a></li>
                        <li><a href="<?= site_url('sysadmin/penarikan-dana/delete?id_kegiatan='.$this->input->get('id_kegiatan')) ?>" onclick="return confirm('Apakah anda yakin akan menghapus semua data penarikan dana?')" data-toggle="tooltip" data-placement="top" title="Hapus semua penarikan dana" class="panel-delete"><span class="fa fa-trash-o"></span></a></li>
                        <li><a href="#" class="panel-plus"><span class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table datatable table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">RT</th>
                                <th style="text-align: center;">Perolehan Dana</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tdana = 0; $no = 1; foreach ($data as $key): $tdana += $key->dana ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= "RT 0".$key->id_rt ?></td>
                                <td style="text-align: right;"><?= rp($key->dana) ?></td>
                                <td>
                                    <a href="<?= site_url('sysadmin/penarikan-dana/rinci-warga?id_kegiatan='.$key->id_kegiatan.'&id_rt='.$key->id_rt) ?>" data-toggle="tooltip" data-placement="top" title="Rincian dana per warga" class="btn btn-xs btn-success">Rinci</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <th style="text-align: right;" colspan="2">Total</th>
                            <th style="text-align: right;"><?= rp($tdana) ?></th>
                            <th></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($content == "data-rinci-penarikan-dana-warga") { ?>
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
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">Nama Warga</th>
                                <th style="text-align: center;">Perolehan Dana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tdana = 0; $no = 1; foreach ($data as $key): $tdana += $key->dana ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama_lengkap_warga ?></td>
                                <td style="text-align: right;"><?= rp($key->dana) ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <th style="text-align: right;" colspan="2">Total</th>
                            <th style="text-align: right;"><?= rp($tdana) ?></th>
                        </tfoot>
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