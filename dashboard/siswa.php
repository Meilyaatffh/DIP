<?php
include 'header.php';
include 'sidebar.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Data Siswa</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        </div>
        </div>
      </div>

      <a class="btn btn-success" href="tambah.php" >Tambah</a>
      <div class="d-flex justify-content-end mb-2">
      <a class="btn btn-primary" href="printdatamhs.php" target="_BLANK"><span data-feather="printer"></span>UNDUH PDF</a>
</div>
    

      <div class="table-responsive small">
      <table class="table table-striped table-sm">
        
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>UKT</th>
                <th>Virtual Account</th>
                <th>OPSI</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi,"select * from mahasiswa");
            while($d = mysqli_fetch_array($data))
            {
            ?>
                <tr>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['ukt']; ?></td>
                    <td><?php echo $d['virtual']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
                        <a class="btn btn-danger" href="hapus.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
                    <label for ="selectOption" class="custom-select"></label>
                    <select id="selectOption" onchange="window.location.href= this.value;">
                    <option value="" class="btn btn-primary btn-sm">PDF</option>
                    <option value="edit.php?id=<?php echo $d['nim']; ?>" class="btn btn-primary btn-sm">word</option>
                    <option value="editprd.php?id=<?php echo $d['nim']; ?>&type=other" class="btn btn-primary btn-sm">pdf</option>

                    </td>
                </tr>
                <?php 
            }
            ?>
            
        </table>
      </div>
    </main>
  </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>