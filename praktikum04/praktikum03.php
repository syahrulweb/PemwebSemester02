<?php
require_once 'header.php';
require_once 'sidebar.php';

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jk"];
$prodi = $_POST["prodi"];
$skill = $_POST["skill"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];
$skor = 0;

// Buat logic nentuin skor dari skill
foreach ($skill as $s) {
    // cek skilll nya
    switch ($s) {
        case 'HTML':
            $skor += 10;
            break;
        case 'CSS':
            $skor += 10;
            break;
        case 'Javascript':
            $skor += 20;
            break;
        case 'RWD Bootstrap':
            $skor += 20;
            break;
        case 'PHP':
            $skor += 30;
            break;
        case 'Python':
            $skor += 30;
            break;
        case 'Java':
            $skor += 50;
            break;
        default:
            $skor = 0;
            break;
    }
}


$kategori_skill;
if ($skor >= 100 && $skor <= 150) {
    $kategori_skill = "Sangat Baik";
} elseif ($skor >= 60 && $skor <= 100) {
    $kategori_skill = "Baik";
} elseif ($skor >= 40 && $skor <= 60) {
    $kategori_skill = "Cukup";
} elseif ($skor >= 0 && $skor <= 40) {
    $kategori_skill = "Kurang";
} else {
    $kategori_skill = "Tidak Memadai";
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
              <h3 class="card-title">Praktikum 01 bangggg gabisa benerin error nyaa huh</h3>
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
              <h1 class="text-center">Form Pendaftaran</h1><br>
        <form method="POST" action="praktikum03.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label font-weight-bold">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label font-weight-bold">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 font-weight-bold">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label font-weight-bold">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 font-weight-bold">Skill & Programming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="skill[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                        <label for="skill[]_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                        <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                        <label for="skill[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                        <label for="skill[]_5" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                        <label for="skill[]_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label font-weight-bold">Tempat Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label font-weight-bold">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="email" name="email" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <br>
        <hr style="border-width: 3px; background-color: black;">
        <br>
        <div >
            <h5><u>DATA PENDAFTAR</u></h5>
            <?php
            echo "<b>NIM : </b>" . $nim . "<br>";
            echo "<b>Nama : </b>" . ucwords($nama) . "<br>";
            echo "<b>Jenis Kelamin : </b>" . $jenis_kelamin . "<br>";
            echo "<b>Program Studi : </b>" . $prodi . "<br>";
            echo "<b>Skill Web & Programming : </b>";
            foreach ($skill as $s) {
                echo $s . ", ";
            }
            echo "<br><b>Tempat Domisili : </b>" . $domisili . "<br>";

            echo "<b>Skor : </b>" . "<u>" . $skor . "</u>" . "<br>";
            echo "<b>Kategori : </b>" . "<u>" . $kategori_skill . "</u>" . "<br>";
            echo "<b>Email : </b>" . $email . "<br>";
            ?>
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
