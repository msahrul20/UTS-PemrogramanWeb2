<?php 

        if (isset($_GET['tambah'])) {
          $wilayah = $_GET['wilayah'];
          $positif = $_GET['jmlpositif'];
          $dirawat = $_GET['jmldirawat'];
          $sembuh = $_GET['jmlsembuh'];
          $meninggal = $_GET['jmlmeninggal'];
          $operator = $_GET['nmoperator'];
          $nim = $_GET['nim_mahasiswa'];

?>
    <style type="text/css">
          tr {
            color:white; 
          }
          table {
            width: 50%;
          }
      </style>
      <body style="background-size: cover; background:url('cover2.jpg'); color: white;" >

      
      
      <div style="text-align:center;">
        <?php 
          echo "Data pemantauan Covid-19 Wilayah  ".$wilayah."<br>";
          echo "<td> Per ".date('d F Y h:i:s', time())."<br>";
          echo $operator."/".$nim."<br>";
        ?>

        <table border=1 align="center" style="text-align:center"g>
        <thead>
          <tr>
            <th>POSITIF</th>
            <th>DIRAWAT</th>
            <th>SEMBUH</th>
            <th>MENINGGAL</th>
          </tr>
          </thead>

          <tbody>
            <tr>
              <td><?= $positif; ?></td>
              <td><?= $dirawat; ?></td>
              <td><?= $sembuh; ?></td>
              <td><?= $meninggal; ?></td>
            </tr>
          </tbody>
        </table>

      <?php } ?>
      </div>

      