<body>
<div style="margin-bottom:-50px;"class="content">
    <div class="main">
      <div class="main-text">
        <h1 style="font-size: 34px;" class="display-4 fw-bold">Ubah Data</h1>
        <br>

        <form action="<?= BASE_URL; ?>/guru/ubah/<?=$data['guru']['id']; ?>" method="POST"> 
  <div class="mb-3">
      <label for="recipient-name" class="col-form-label">Nama</label>
      <input type="text" class="form-control" value="<?=$data['guru']['nama']; ?>" name="nama">
    </div>
    <div class="form-group mb-3">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select class="form-control" required name="jenis_kelamin">
      <option value="<?= $data['guru']['jenis_kelamin']; ?>"><?= $data['guru']['jenis_kelamin']; ?></option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

    </div>
    <div class="mb-3">
      <label for="recipient-name" class="col-form-label">Alamat</label>
      <input type="text" class="form-control"required value="<?= $data['guru']['alamat']; ?>"name="alamat">
    </div>
    <div class="modal-footer">
    <a style="margin-right:10px; border-radius: 5px;padding:7px 15px;"href="<?= BASE_URL;?>/guru"style="text-decoration:none;"class="btn btn-secondary">Kembali</a>
  <button type="submit" class="btn btn-light">Ubah Data</button>
</div>

</form>
      </div>
    </div>
  </div>

  </div>

