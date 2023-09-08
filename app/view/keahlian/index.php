<body>

  <div class="content">
    <div class="main">
      <div class="main-text">
        <h1 style="font-size: 34px;" class="display-4 fw-bold">Data Kompetensi Keahlian</h1>
        <br>
        <a style="margin-bottom:15px;border-radius:10px;" data-bs-toggle="modal" data-bs-target="#exampleModal"
          data-bs-whatever="@getbootstrap">
          Tambah Data
        </a>

        <?= Flasher::Flash(); ?>
        <table class="table table-bordered " id="myTable">
        <thead>
            <tr style="color:white"class="text-center">
              <td scope="col">KOMPETENSI KEAHLIAN</td>
              <td scope="col">INFO</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['keahlian'] as $keahlian): ?>
              <tr class="text-center">
                <td style="color:white">
                  <?= $keahlian['keahlian']; ?>
                </td>
                <td class="col-3">
                <a href="<?= BASE_URL; ?>/keahlian/hapus/<?= $keahlian['id']; ?>"onclick="return confirm('Hapus data')"
                    style="border-radius:10px;font-size:13px;padding: 2px 15px;">Hapus</a>
                  <a href="<?= BASE_URL; ?>/keahlian/getubah/<?= $keahlian['id']; ?>"
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kompetensi Keahlian</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASE_URL; ?>/keahlian/tambah" method="POST">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama Kompetensi Keahlian</label>
              <input type="text" class="form-control" required id="nama" name="nama">
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
</body>