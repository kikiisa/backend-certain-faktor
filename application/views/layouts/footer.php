<script src="<?= base_url('template/vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('template/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('template/vendors/simple-datatables/simple-datatables.js') ?>"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
<script src="<?= base_url('template/js/pages/dashboard.js') ?>"></script>
<script src="<?= base_url('template/js/main.js') ?>"></script>
<script src="<?= base_url('template/vendors/tinymce/tinymce.min.js') ?>"></script>
<script src="<?= base_url('template/vendors/tinymce/plugins/code/plugin.min.js') ?>"></script>
<script src="<?= base_url('template/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('template/vendors/select/js/select2.min.js')?>"></script>
<script src="<?= base_url('template/vendors/ckeditor/ckeditor.js')?>"></script>
<script>
    tinymce.init({ selector: '#default' });
    tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
</script>