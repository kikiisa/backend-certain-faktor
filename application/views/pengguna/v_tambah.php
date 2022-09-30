<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Tambah Data Pengguna - SISKR'
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
                        <h3>Tambah Data Pengguna</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Pengguna</li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data Pengguna</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <form action="<?= site_url('Pengguna/store') ?>" method="post">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-12">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Username</label>
                                        </div>
                                        <input type="text"  hidden name="id">
                                        <div class="col-lg-10 col-9">
                                            <input type="text"  class="form-control" name="username" required="true" 
                                            placeholder="Enter Username">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Nama Lengkap</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="text"   class="form-control" name="nama_lengkap" required="true" 
                                            placeholder="Enter Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Email</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="email"  class="form-control" name="email" required="true" 
                                            placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Jabatan</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <select name="jabatan" class="form-control" required id="">
                                                <option value="">Pilih Jabatan</option>
                                                <option value="dokter">Dokter</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="tambah">Tambah Pengguna</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>