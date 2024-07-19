<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Dinas</h1>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Dinas</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('dinas/proses_tambah_data') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_dinas">Nama Dinas</label>
                            <input type="text" class="form-control" id="nama_dinas" name="nama_dinas" placeholder="Masukkan nama dinas" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="text" class="form-control" id="lat" name="lat" placeholder="Masukkan latitude" required>
                        </div>
                        <div class="form-group">
                            <label for="lng">Longitude</label>
                            <input type="text" class="form-control" id="lng" name="lng" placeholder="Masukkan longitude" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept=".jpg,.jpeg,.png">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Simpan" class="btn btn-primary mx-2">
                            <input type="reset" value="Reset" class="btn btn-success mx-2">
                            <a href="<?php echo base_url('dinas') ?>" class="btn btn-secondary mx-2">Kembali</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
