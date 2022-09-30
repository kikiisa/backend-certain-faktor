<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Tambah Pertanyaan'
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
                        <h3>Tambah Pertanyaan</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Pertanyaan</li>
                            </ol>
                        </nav>
                    </div>
                    <?php echo($this->session->flashdata("alert")) ?>
                </div>
            </div>
        </div>
        <section id="horizontal-input">
            <form action="<?= site_url('Pertanyaan/store') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary" style="color:white;">
                                Tambah Pertanyaan
                            </div>
                            <div class="card-body">
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-3">
                                                <label class="col-form-label">Nama Pertanyaan</label>
                                            </div>
                                            <div class="col-lg-10 col-9">
                                                <input type="text" id="pertanyaan"  class="form-control" name="pertanyaan" required="true" 
                                                placeholder="Enter Nama Pertanyaan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary" name="save">Tambah Pertanyaan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>