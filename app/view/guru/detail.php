<body>
<div class="content">
    <div class="main">
      <div class="main-text">
        <h1 style="font-size: 34px;" class="display-4 fw-bold">Detail Data</h1>
        <br>
        <table style="color:white;font-weight:none;"class="table table-bordered " id="myTable">
          <thead>
            <tr class="text-center">
              <td scope="col">Nama</td>
              <td scope="col">Jenis Kelamin</td>
              <td scope="col">Alamat</td>
              <td scope="col">Info</td>
            </tr>
          </thead>
          <tbody>
              <tr class="text-center">
                <td>
                <?= $data['guru']['nama'];?>
                </td>
                <td>
                <?= $data['guru']['jenis_kelamin'];?>
                </td>
                <td>
                <?= $data['guru']['alamat'];?>
                </td>
                <td>             <a  href="<?= BASE_URL; ?>/guru"
                    style="border-radius:10px;font-size:13px;padding: 2px 15px;">Kembali</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br>
  </div>
