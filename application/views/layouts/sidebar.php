<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    SISKR
                    <!--<a href="index.html"><img src="<?= base_url('template/images/logo/logo.png') ?>" alt="Logo" srcset=""></a>-->
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">General</li>
                <li class="sidebar-item">
                    <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('data-penyakit')?>" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Data Penyakit</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('data-gejala') ?>" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Data Gejala</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('data-passien') ?>" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Data Passien</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('Pertanyaan') ?>" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Data Pertanyaan</span>
                    </a>
                </li>
                <?php if($this->session->userdata("jabatan") == 'admin'): ?>
                <li class="sidebar-item">
                    <a href="<?= base_url('management-pengguna') ?>" class='sidebar-link'>
                        <i class="iconly-boldProfile"></i>
                        <span>Management Pengguna</span>
                    </a>
                </li>
                <?php endif ?>
                <li class="sidebar-item">
                    <a href="<?= base_url('Profile') ?>" class='sidebar-link'>
                        <i class="bi bi-person-square"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= base_url('Login/logout') ?>" class='sidebar-link'>
                        <i class="bi bi-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>