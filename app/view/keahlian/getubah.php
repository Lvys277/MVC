<body>
<div class="content">
    <div class="main">
      <div class="main-text">
        <h1 style="font-size: 34px;" class="display-4 fw-bold">Ubah Data</h1>
        <br>

        <form action="<?= BASE_URL; ?>/keahlian/ubah/<?= $data['keahlian']['id']; ?>" method="POST"> 
  <div class="mb-3">
      <label for="recipient-name" class="col-form-label">Data Kompetensi Keahlian</label>
      <input type="text" class="form-control" value="<?= $data['keahlian']['keahlian']; ?>" name="nama">
    </div>
    <div class="modal-footer">
    <a style="margin-right:10px; border-radius: 5px;padding:7px 15px;"href="<?= BASE_URL;?>/keahlian"style="text-decoration:none;"class="btn btn-secondary">Kembali</a>
  <button type="submit" class="btn btn-light">Ubah Data</button>
</div>


</form>
      </div>
    </div>
  </div>
  <br><br><br><br><br>
  </div>
