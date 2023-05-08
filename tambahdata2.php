<?php include('template.php');session_start();?>
<?php include ('koneksi.php')?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Form Input</h4>
        </div>
            <div class="card-body">
             <form action="insert2.php" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control
                <?php if(isset($_SESSION['fail']))
                echo 'is-invalid';
                ?>
                  " placeholder="Masukan nama anda">
                <?php 
                ?>
                <?php if (isset($_SESSION['fail'])) { ?>
                  <div class="small text-danger"><?= $_SESSION['fail']; ?></div>
                <?php } ?>
            </div>
            <div class="form-group">
              <label for="nim">Nim</label>
              <input type="number" name="nim" id="nim" class="form-control
                <?php if(isset($_SESSION['fail1']))
                echo 'is-invalid';
                ?>
                  " placeholder="Masukan NIM anda">
                <?php 
                ?>
                <?php if (isset($_SESSION['fail1'])) { ?>
                  <div class="small text-danger"><?= $_SESSION['fail1']; ?></div>
                <?php } ?>
            </div>
            <div class="form-group">
              <label for="status_peminjaman">Status</label>
               <select name="status_peminjaman" id="status_peminjaman" class="form-control">
                 <option value="Meminjam"> Meminjam</option>
                </select>
                <?php if(isset($_SESSION['fail2']))
                echo 'is-invalid';
                ?>
                <?php 
                ?>
                  <?php if (isset($_SESSION['fail2'])) { ?>
                    <div class="small text-danger"><?= $_SESSION['fail2']; ?></div>
                  <?php } ?>
            </div>
            <div class="form-group">
              <label for="prodi">Prodi </label>
               <select name="prodi" id="prodi" class="form-control">
                 <option value="IFSI">IFSI</option>
                 <option value="IFD3">IFD3</option>
                 <option value="IFD3">MID3</option>
                 <option value="IFD3">AKUTANSI D3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_buku">Nama Buku yang dipinjam </label>
                  <input type="text" name="nama_buku" id="nama_buku" class="form-control
                    <?php if(isset($_SESSION['fail4']))
                    echo 'is-invalid';
                     ?>
                   " placeholder="Masukan nama buku">
                    <?php 
                    ?>
                  <?php if (isset($_SESSION['fail4'])) { ?>
                  <div class="small text-danger"><?= $_SESSION['fail4']; ?></div>
              <?php } ?>
            </div>
              <div class="form-group">
              <label for="waktu_kunjungan">Tanggal kunjungan</label>
              <input type="date" name="waktu_kunjungan" id="waktu_kunjungan" class="form-control
              <?php if(isset($_SESSION['fail5']))
              echo 'is-invalid';
              ?>
              " placeholder="">
              <?php 
                ?>
                <?php if (isset($_SESSION['fail5'])) { ?>
                  <div class="small text-danger"><?= $_SESSION['fail5']; ?></div>
              <?php } ?>
            </div>
            <a href="data.php" class="btn btn-default btn-sm mt-3">Back</a>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambahkan</button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Persetujuan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Apakah anda yakin?</div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>