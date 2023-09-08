<body>
<div class="content">
    <div class="main">
      <div class="main-text">
        <h1 style="font-size: 34px;" class="display-4 fw-bold">Detail Data</h1>
        <br>
        <table style="color:white;font-weight:none;"class="table table-bordered " id="myTable">
          <thead>
            <tr class="text-center">
              <td scope="col">GAMBAR</td>
              <td scope="col">NAMA</td>
              <td scope="col">JENIS KELAMIN</td>
              <td scope="col">ALAMAT</td>
              <td scope="col">INFO</td>
            </tr>
          </thead>
          <tbody>
              <tr class="text-center">
              <td>
              <img src="<?= BASE_URL; ?>/img/<?= $data['siswa']['gambar'];?>" width="100px;"> 
                </td>
                <td>
                <?= $data['siswa']['nama'];?>
                </td>
                <td>
                <?= $data['siswa']['jenis_kelamin'];?>
                </td>
                <td>
                <?= $data['siswa']['alamat'];?>
                </td>
                <td>             <a  href="<?= BASE_URL; ?>/siswa"
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

