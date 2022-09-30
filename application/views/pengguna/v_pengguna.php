<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Management Pengguna - SISKR'
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
                        <h3>Management Pengguna</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Management Pengguna</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Management Pengguna
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('tambah-pengguna') ?>" class="btn btn-primary">Tambah Pengguna</a>
                        <?php if($data->num_rows() > 0){ ?>
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>username</th>
                                    <th>nama lengkap</th>
                                    <th>email</th>
                                    <th>jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 0; ?>
                                <?php foreach($data->result() as $x){ ?>
                                <tr>
                                    <td><?= $nomor+=1 ?></td>
                                    <td><?= $x->username ?></td>
                                    <td><?= $x->full_name ?></td>
                                    <td><?= $x->email ?></td>
                                    <td><?= $x->jabatan ?></td>
                                    <th>
                                        <a href="<?= site_url('pengguna/'.$x->id_admin) ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="<?= site_url("Pengguna/utility?hapus={$x->id_admin}") ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </th>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php }else{ ?>
                            <div class="alert alert-danger mt-4">Daftar Dokter Masih Kosong</div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>