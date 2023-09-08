<body>
  <div class="content">
    <div class="main">
      <div class="main-text">
        <h1 style="font-size: 34px;" class="display-4 fw-bold">Data Siswa</h1>
        <br>
        <form action="<?= BASE_URL; ?>/siswa" method="POST" class="d-flex" role="search">
          <input class="form-control me-2" type="text" placeholder="Cari..." aria-label="Search" name="cari">
          <button class="btn btn-light" type="submit">Cari</button>
        </form> <br>
        <a style="margin-bottom:15px;border-radius:10px;" data-bs-toggle="modal" data-bs-target="#exampleModal"
          data-bs-whatever="@getbootstrap">
          Tambah Data
        </a>

        <?= Flasher::Flash(); ?>
        <table class="table table-bordered " id="myTable">
          <thead>
            <tr style="color:white" class="text-center">
              <td scope="col">NAMA</td>
              <td scope="col">INFO</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['siswa'] as $siswa): ?>
              <tr class="text-center">
                <td style="color:white">
                  <?= $siswa['nama']; ?>
                </td>
                <td class="col-3" style="text-align:center;">
                  <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>"
                    style="border-radius:10px;font-size:13px;padding: 2px 15px;">Detail</a>
                  <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" onclick="return confirm('Hapus data')"
                    style="margin-top:5px;border-radius:10px;font-size:13px;padding: 2px 15px;">Hapus</a>
                  <a href="<?= BASE_URL; ?>/siswa/getubah/<?= $siswa['id']; ?>"
                    style="margin-top:5px;border-radius:10px;font-size:13px;padding: 2px 15px;">Ubah</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>

  <!-- tambah -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="mx-1 mx-md-4" action="<?= BASE_URL; ?>/siswa/tambah" method="post"
              enctype="multipart/form-data">

            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" required id="nama" name="nama">
            </div>
            <div class="form-group mb-3">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control" required id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>

            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Alamat</label>
              <input type="text" class="form-control" required id="alamat" name="alamat">
            </div>

              <div class="form-outline flex-fill mb-0">
              <label for="recipient-name" class="col-form-label">Foto profil</label>
                <input class="form-control" type="file" name="gambar" required placeholder="Masukkan Foto Profil Anda">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>