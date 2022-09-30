<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Edit Data Penyakit'
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
                        <h3>Edit Data Penyakit</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Data Penyakit</li>
                            </ol>
                        </nav>
                    </div>
                    <?php echo($this->session->flashdata("alert")) ?>
                </div>
            </div>
        </div>
        <section id="horizontal-input">
            <form action="<?php echo base_url('Penyakit/store') ?>" method="post">
                <div class="row">
                    <?php if($data->num_rows() > 0){ ?>
                        <?php foreach($data->result() as $rows){ ?>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-primary" style="color:white;">
                                        Tambah Data Penyakit
                                    </div>
                                    <div class="card-body">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-2 col-3">
                                                        <label class="col-form-label">Nama Penyakit</label>
                                                    </div>
                                                    <div class="col-lg-10 col-9">
                                                        <input type="text" name="id" value="<?= $rows->id_penyakit ?>" hidden>
                                                        <input type="text" value="<?= $rows->nama_penyakit ?>" class="form-control" name="penyakit" required="true" 
                                                        placeholder="Enter Nama Penyakit">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-2 col-3">
                                                        <label class="col-form-label">Pencegahan / Pengobatan</label>
                                                    </div>
                                                    <div class="col-lg-10 col-9">
                                                        <textarea class="ckeditor" name="desc" id="ckeditor" cols="30" rows="10"><?= $rows->description ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit">Edit Data Penyakit</button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <div class="alert alert-danger">Maaf Data Penyakit Tidak Di Temukan</div>
                    <?php }?>
                </div>
            </form>
        </section>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>