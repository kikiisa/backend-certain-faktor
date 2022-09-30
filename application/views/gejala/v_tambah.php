<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header",[
    'judul' => 'Tambah Data Gejala - SISKR'
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
                        <h3>Tambah Data Gejala</h3>
                    </div>
                    <?php echo $this->session->flashdata("alert") ?>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Gejala</li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data Gejala</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <form action="<?= site_url('Gejala/store') ?>" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-12">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Pilih Pertanyaan Gejala</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <select class="js-example-basic-single form-control" name="gejala" id="gejala">
                                               
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Nilai CF</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="text"  class="form-control" name="nilai" required="true" 
                                            placeholder="Enter Nilai CF">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Penyakit</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <select name="id_penyakit" class="form-control" required id="">
                                                <option value="">Pilih Penyakit</option>
                                                <?php foreach($penyakit as $rows){ ?>
                                                    <option value="<?= $rows->id_penyakit ?>"><?= $rows->nama_penyakit ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="save">Tambah Gejala</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder:"Pilih Gejala",
                ajax:{
                    dataType:"JSON",
                    theme: 'bootstrap4',
                    allowClear:true,
                    url:"<?= site_url("Rest/select_gejala") ?>",
                    type:"POST",
                   
                    data: function(params) {
                        return {
                            searchTerm: params.term
                        }
                    },
                    processResults: function(data) {
                        return {
                            results:$.map(data,function(item){
                                return {
                                    text: item.text,
                                    id:item.text,
                                }
                            })
                        }
                    },
                }
            });
        });
    </script>
</body>