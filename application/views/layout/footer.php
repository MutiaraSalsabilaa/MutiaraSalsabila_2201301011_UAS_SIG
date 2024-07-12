<script src="<?php echo base_url() ?>temp/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>temp/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>temp/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url() ?>temp/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url() ?>temp/assets/js/plugins/chartjs.min.js"></script>
 

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url() ?>temp/assets/js/material-dashboard.min.js?v=3.0.0"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
        <script type="text/javascript">
    var map = L.map('map').setView([-3.7935672, 114.7795914], 14);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Icon untuk marker 
    var iconApotek = L.icon({iconUrl: "../file/location-pin.png", iconSize: [44, 44], iconAnchor: [22, 44], tooltipAnchor: [22, -20]});

    <?php
    $latlngs = [];
    foreach ($data as $row) {
    
        $latlngs[] = [$row->lat, $row->lng];
        echo "var marker = L.marker([" . $row->lat . ", " . $row->lng . "], {icon: iconDinas}).addTo(map).bindPopup('<b>" . $row->nama_dinas . "</b><br><img src=\"../file/" . $row->foto . "\" alt=\"Foto\" style=\"width: 100px; height: auto;\"><br>" . $row->alamat . "');";
    }
    ?>

    // Array koordinat untuk polyline
    var latlngs = <?php echo json_encode($latlngs); ?>;

    // Tambahkan polyline
    var polyline = L.polyline(latlngs, {color: 'blue'}).addTo(map);
</script>
</body>

</html>