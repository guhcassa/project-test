
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    
    <?php if($this->session->userdata('akses')=='1'):?>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/pasien') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Pasien</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/pasien/add') ?>">Pasien Baru</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/pasien') ?>">Pasien Lama</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dokter/dokter') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Dokter</span></a>
    </li>

    <?php elseif($this->session->userdata('akses')=='2'):?>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dokter/pasien') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pasien</span>
        </a>
    </li>
    <?php endif;?>
</ul>
