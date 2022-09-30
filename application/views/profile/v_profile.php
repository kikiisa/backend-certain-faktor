<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'My Profile - SISKR'
]) ?>
<body id="app">
    <?php $this->load->view('layouts/sidebar') ?>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Profile</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <?php if($data->num_rows() > 0){ ?>
                    <form action="<?= site_url('Profile/auth') ?>" method="post">
                        <div class="card-body">  
                            <?php foreach($data->result() as $x){ ?>
                                <div class="row mt-4">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-3">
                                                <label class="col-form-label">Username</label>
                                            </div>
                                            <input type="text" value="<?= $x->id_admin ?>" hidden name="id">
                                            <div class="col-lg-10 col-9">
                                                <input type="text" value="<?= $x->username ?>" class="form-control" name="username" required="true" 
                                                placeholder="Enter Username">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-3">
                                                <label class="col-form-label">Nama Lengkap</label>
                                            </div>
                                            <div class="col-lg-10 col-9">
                                                <input type="text" value="<?= $x->full_name ?>"  class="form-control" name="nama_lengkap" required="true" 
                                                placeholder="Enter Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-3">
                                                <label class="col-form-label">Email</label>
                                            </div>
                                            <div class="col-lg-10 col-9">
                                                <input type="email" value="<?= $x->email ?>"  class="form-control" name="email" required="true" 
                                                placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-3">
                                                <label class="col-form-label">Jabatan</label>
                                            </div>
                                            <div class="col-lg-10 col-9">
                                                <select disabled name="jabatan" class="form-control" required id="">
                                                    <option value="">Pilih Jabatan</option>
                                                    <option value="dokter" <?php if($x->jabatan == 'dokter'){echo 'selected';} ?>>Dokter</option>
                                                    <option value="admin" <?php if($x->jabatan == 'admin'){echo 'selected';} ?>>Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary" name="edit">Ubah Profile</button>
                        </div>
                    </form>
                    <hr>
                    <div class="card-body">
                        <h4>Ubah Password</h4>
                        <form action="<?= site_url("Profile/auth") ?>" method="post">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Password Baru</label>
                                        </div>
                                        <input type="text" value="<?= $x->id_admin ?>" hidden name="id">
                                        <div class="col-lg-10 col-9">
                                            <input type="password" required class="form-control" name="password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="auth">ubah password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php }else{ ?>
                        <div class="card-body">
                            <div class="alert alert-danger">Maaf Data Pengguna Tidak di temukan</div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>