<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Dashboard'
]) ?>
<body>
    <div id="app">
        <?php $this->load->view('layouts/sidebar') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="alert alert-info">
                                Hi, <strong><?= $this->session->userdata("nama") ?></strong>
                                Selamat Datang Di Aplikasi SISTEM PAKAR PENYAKIT KELAMIN
                            </div>
                            <hr>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a href="<?= site_url('arsip') ?>">
                                                    <h6 class="text-muted font-semibold">Total Penyakit</h6>
                                                    <h6 class="font-extrabold mb-0"><?= $this->db->get("tb_penyakit")->num_rows() ?></h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                                
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Gejala</h6>
                                                <h6 class="font-extrabold mb-0"><?= $this->db->get("tb_gejala")->num_rows() ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="bi bi-people-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Dokter</h6>
                                                <h6 class="font-extrabold mb-0"><?= $this->db->get_where("tb_admin",["jabatan" => 'dokter'])->num_rows() ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>
</html>