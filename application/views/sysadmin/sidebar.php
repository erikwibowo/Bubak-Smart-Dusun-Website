<div class="page-sidebar page-sidebar-fixed scroll">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">SMARTDUSUN</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?= base_url() ?>asset/assets/images/users/avatar.png" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?= base_url() ?>asset/assets/images/users/avatar.png" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name"><?= $this->session->userdata('nama_admin'); ?></div>
                    <div class="profile-data-title"><?= $this->session->userdata('level'); ?></div>
                </div>
            </div>                                                                        
        </li>
        <li class="xn-title">MENU APLIKASI</li>
        <li class="<?= @$dashboard ?>">
            <a href="<?= site_url('sysadmin') ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>
        <li class="xn-openable <?= @$master ?>">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">MASTER DATA</span></a>
            <ul>
                <li class="<?= @$rt ?>"><a href="<?= site_url('sysadmin/rt') ?>"><span class="fa fa-building-o"></span> Data RT</a></li>
                <li class="<?= @$rw ?>"><a href="<?= site_url('sysadmin/rw') ?>"><span class="fa fa-building-o"></span> Data RW</a></li>
                <li class="<?= @$warga ?>"><a href="<?= site_url('sysadmin/warga') ?>"><span class="fa fa-users"></span> Data Warga</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>