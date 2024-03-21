<?php
require_once 'header.php';
require_once 'sidebar.php';

$kumpulan_nilai = [
  ["id" => 1, "nim" => "01101", "nama" => "Muhammad Syahrul", "uts" => 80, "uas" => 84, "tugas" => 78],
  ["id" => 2, "nim" => "01102", "nama" => "Fajar", "uts" => 90, "uas" => 80, "tugas" => 88],
  ["id" => 3, "nim" => "01103", "nama" => "Yosi", "uts" => 70, "uas" => 74, "tugas" => 70],
  ["id" => 4, "nim" => "01104", "nama" => "Dika", "uts" => 88, "uas" => 95, "tugas" => 80]
];

// Hitung nilai akhir
foreach ($kumpulan_nilai as &$nilai) {
  $nilai["nilai_akhir"] = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3;
}

?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 01</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <h1>Tabel Nilai Mahasiswa</h1>
              <table class="table table-info">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" rowspan="2">No</th>
                    <th scope="col" rowspan="2">NIM</th>
                    <th scope="col" rowspan="2">Nama</th>
                    
                    <th scope="col" rowspan="2">Nilai Akhir</th>
                  </tr>
                  <tr>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Tugas</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kumpulan_nilai as $i => $nilai): ?>
                    <tr>
                      <td><?= $i + 1 ?></td>
                      <td><?= $nilai["nim"] ?></td>
                      <td><?= $nilai["nama"] ?></td>
                      <td><?= $nilai["uts"] ?></td>
                      <td><?= $nilai["uas"] ?></td>
                      <td><?= $nilai["tugas"] ?></td>
                      <td><?= $nilai["nilai_akhir"] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              Footer
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
require_once 'footer.php';
?>
