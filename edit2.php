<?php
include('koneksi.php');

$no = $_GET["no"];

$query = mysqli_query($conn, "SELECT * FROM data_pengunjung_perpustakaan WHERE no=$no");
$data = mysqli_fetch_assoc($query);
?>
<?php include('template.php') ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Data Mahasiswa</h4>
        </div>
        <div class="card-body">
          <form action="update2.php" method="post">
            <input type="hidden" name="no" value="<?= $data["no"]; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="insert nama" value="<?= $data["nama"]; ?>" required>
            </div>
            <div class="form-group">
              <label for="nim">Nim</label>
              <input type="text" name="nim" id="nim" class="form-control" placeholder="insert nim" value="<?= $data["nim"]; ?>" required>
            </div>
            <div class="form-group">
              <label for="prodi">Prodi</label>
              <select type="text" name="prodi" id="prodi" class="form-control" placeholder="insert prodi" value="<?= $data["prodi"]; ?>" required>
                 <option value="IFSI">IFSI</option>
                 <option value="IFD3">IFD3</option>
                 <option value="IFD3">MID3</option>
                 <option value="IFD3">AKUTANSI D3</option>
              </select> 
            </div>
            <div class="form-group">
              <label for="status_peminjaman">Status Peminjaman</label>
              <select type="text" name="status_peminjaman" id="status_peminjaman" class="form-control" placeholder="insert status_peminjaman" value="<?= $data["status_peminjaman"]; ?>" required>
                 <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                 <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                 <option value="Peminjam menghilangkan Buku">Peminjam menghilangkan Buku</option>
      
              </select> 
            </div>
            <div class="form-group">
              <label for="nama_buku">Nama Buku Yang dipinjam</label>
              <input type="text" name="nama_buku" id="nama_buku" class="form-control" placeholder="insert nama_buku" value="<?= $data["nama_buku"]; ?>" required>
            </div>
            <div class="form-group">
              <label for="waktu_kunjungan">Waktu Peminjaman</label>
              <input type="date" name="waktu_kunjungan" id="waktu_kunjungan" class="form-control" placeholder="insert waktu_kunjungan" value="<?= $data["waktu_kunjungan"]; ?>" required>
            </div>
            <a href="data.php" class="btn btn-default btn-sm mt-3">Back</a>
            <button type="submit" name="submit" class="btn btn-primary btn-sm mt-3">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
