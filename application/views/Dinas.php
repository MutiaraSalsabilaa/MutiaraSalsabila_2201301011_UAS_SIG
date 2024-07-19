<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Dinas</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dinas Di Kecamatan Pelaihari</h6>
        </div>
        <div class="card-body">
            <!-- Button "Tambah Data" yang baru -->
            <a href="<?php echo base_url('dinas/tambah') ?>">
                <button class="btn btn-primary" style="background-color: #4e73df; border-color: #4e73df;">
                    <i class="fas fa-plus-circle"></i> Tambah Data Baru
                </button>
            </a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dinas</th>
                            <th>Alamat</th>
                            <th>LatLong</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $key) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $key->nama_dinas; ?></td>
                                <td><?php echo $key->alamat; ?></td>
                                <td><?php echo $key->lat.','.$key->lng; ?></td>
                                <td>
                                    <a href="./file/<?php echo $key->foto; ?>"><img src="./file/<?php echo $key->foto; ?>" width="80px" height="80px" alt="Foto Dinas"></a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('dinas/edit/' . $key->id_dinas); ?>"><button class="btn btn-warning" type="button"><i class="fa fa-edit"></i></button></a>
                                    <a href="<?php echo base_url('dinas/hapus/' . $key->id_dinas); ?>" onclick="return confirm('Apakah yakin ingin menghapus?')"><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Peta Lokasi Dinas</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Peta Lokasi Dinas Di Kecamatan Pelaihari</h6>
        </div>
        <div class="card-body">
            <div id="map" style="height: 500px;"></div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Leaflet JavaScript -->
<script>
    var map = L.map('map').setView([-3.796394, 114.829202], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 18
    }).addTo(map);

    <?php foreach ($data as $key) { ?>
        L.marker([<?php echo $key->lat; ?>, <?php echo $key->lng; ?>]).addTo(map)
            .bindPopup("<b><?php echo $key->nama_dinas; ?></b><br><?php echo $key->alamat; ?><br><img src='<?php echo base_url('file/'.$key->foto); ?>' width='150px' height='150px'>");
    <?php } ?>
</script>

</body>
</html>
