<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Data Penyakit - SISKR'
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
                        <h3>Data Penyakit</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Penyakit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Data Penyakit
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('add-penyakit') ?>" class="btn btn-primary">Tambah Penyakit Baru</a>
                        <?php if($data->num_rows() > 0){ ?>
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyakit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 0; ?>
                                <?php foreach($data->result() as $get){ ?>
                                <tr>
                                    <td><?= $nomor+=1 ?></td>
                                    <td><?= $get->nama_penyakit ?></td>
                                    <td>
                                        <a href="<?= site_url('edit-penyakit/'.$get->id_penyakit) ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <form action="<?php echo base_url('Penyakit/store') ?>" method="post">
                                            <input type="text" name="id" hidden value="<?= $get->id_penyakit ?>">
                                            <button type="submit" name="delete" class="btn btn-danger mt-1"><i class="bi bi-trash bi"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php }else{ ?>
                            <div class="alert alert-danger mt-4">Data Penyakit Kosong</div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>