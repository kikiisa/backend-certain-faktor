<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Data Gejala - SISKR'
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
                        <h3>Data Pertanyaan Gejala</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pertanyaan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Data Pertanyaan 
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('add-pertanyaan') ?>" class="btn btn-primary">Tambah Pertanyaan Baru</a>
                        <?php if($data->num_rows() > 0){ ?>
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pertanyaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 0; ?>
                                <?php foreach($data->result() as $x){ ?>
                                <tr>
                                    <td><?= $nomor+=1 ?></td>
                                    <td><?= $x->nama_pertanyaan ?></td>
                                    <td>
                                        <a href="<?= site_url('edit-pertanyaan/'.$x->id_pertanyaan) ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                        <form action="<?php echo base_url('Pertanyaan/store') ?>" method="post">
                                            <input type="text" name="id" hidden value="<?= $x->id_pertanyaan ?>">
                                            <button type="submit" name="delete" class="btn btn-danger mt-1"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php }else{ ?>
                            <div class="alert alert-danger mt-4">Data Pertanyaan Masih Kosong</div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>