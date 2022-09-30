<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Tambah Penyakit'
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
                        <h3>Tambah Penyakit</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Penyakit</li>
                            </ol>
                        </nav>
                    </div>
                    <?php echo($this->session->flashdata("alert")) ?>
                </div>
            </div>
        </div>
        <section id="horizontal-input">
            <form action="<?= site_url('Penyakit/store') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary" style="color:white;">
                                Tambah Penyakit
                            </div>
                            <div class="card-body">
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-2 col-3">
                                                <label class="col-form-label">Nama Penyakit</label>
                                            </div>
                                            <div class="col-lg-10 col-9">
                                                <input type="text" id="penyakit"  class="form-control" name="penyakit" required="true" 
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
                                                <textarea class="ckeditor" name="desc" id="ckeditor" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary" name="save">Tambah Penyakit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <?php $this->load->view('layouts/footer') ?>
    <script>
        $(document).ready(function(){
            $("#save").on('click',function(){
                
                alert($('#ckeditor').val())
            })
        })
    </script>
</body>