<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Data Dinas</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Dinas</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('dinas/proses_edit_data') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_dinas">Nama Dinas</label>
                            <input type="hidden" class="form-control" name="id_dinas" value="<?php echo $data->id_dinas ?>">
                            <input type="text" class="form-control" id="nama_dinas" name="nama_dinas" placeholder="Nama Dinas" value="<?php echo $data->nama_dinas ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $data->alamat ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude" value="<?php echo $data->lat ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="lng">Longitude</label>
                            <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude" value="<?php echo $data->lng ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Dinas</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" accept=".jpg,.jpeg,.png">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                            <a href="<?php echo base_url('dinas') ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/animsition/js/animsition.min.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/vendor/countdowntime/countdowntime.js"></script>
<script src="<?php echo base_url() ?>assets/Login_v8/js/main.js"></script>
