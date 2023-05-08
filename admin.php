<?php include ('template.php');session_start();?>
<?php include ('koneksi.php')?>
<?php $datas= mysqli_query($conn, "SELECT * FROM data_pengunjung_perpustakaan") ?>
<div class="row justify-content-center">
  <div class="col-8">

      <?php if (isset($_SESSION['sukses'])) { ?>
        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        <p><?= $_SESSION['sukses']; ?></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>
      <?php if (isset($_SESSION['hapus'])) { ?>
        <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
        <p><?= $_SESSION['hapus']; ?></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>

    <div class="card mt-5">
      <div class="card-header">
        <h4 class="card-title mt-3" align="center">ADMIN</h4>
      </div>
      <div class="card-body">
        <a href="tambahdata2.php" class="btn btn-primary btn-sm float-end">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Prodi</th>
              <th>Buku yang Dipinjam</th>
              <th>Status Peminjaman</th>
              <th>Tanggal Peminjaman</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php while ($data = mysqli_fetch_assoc($datas)) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["nim"]; ?></td>
                <td><?= $data["prodi"]; ?></td>
                <td><?= $data["nama_buku"]; ?></td>
                <td><?= $data["status_peminjaman"]; ?></td>
                <td><?= $data["waktu_kunjungan"]; ?></td>
                <td>
                  <a href="delete2.php?no=<?= $data["no"];?>" onclick="return confirm('Apakah Data akan dihapus')" class="btn btn-danger btn-sm">Delete</a>
                  <a href="edit2.php?no=<?= $data["no"];?>" class="btn btn-warning btn-sm">Edit</a>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php session_unset(); ?>
