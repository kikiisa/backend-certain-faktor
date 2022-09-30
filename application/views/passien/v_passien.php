<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Data Passien - SISKR'
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
                        <h3>Data Passien</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Passien</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Daftar Passien
                    </div>
                    <div class="card-body">
                        <?php if($data->num_rows() > 0){ ?>
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Passien</th>
                                    <th>Gender</th>
                                    <th>No Telepon</th>
                                    <th>Alamat Passien</th>
                                    <th>Rentan Usia</th>
                                    <th>Nama Penyakit</th>
                                    <th>Presentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 0; ?>
                                <?php foreach($data->result() as $x){ ?>
                                <tr>
                                    <td><?= $nomor+=1 ?></td>
                                    <td><?= $x->nama_passien ?></td>
                                    <td><?= $x->gender ?></td>
                                    <td><?= $x->telepon ?></td>
                                    <td><?= $x->alamat_passien ?></td>
                                    <td><?= $x->usia ?></td>
                                    <td><?= $x->nama_penyakit ?></td>
                                    <td><?= $x->diagnosa_nilai ?> %</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php }else{ ?>
                            <div class="alert alert-danger mt-4">Data Passien Masih Kosong</div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>