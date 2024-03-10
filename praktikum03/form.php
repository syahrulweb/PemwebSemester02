<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="proses_form.php" method="POST" >
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="id" name="id" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="name" name="name" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jeniskelamin" id="jeniskelamin_0" type="radio" required="required" class="custom-control-input" value="laki"> 
        <label for="jeniskelamin_0" class="custom-control-label">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jeniskelamin" id="jeniskelamin_1" type="radio" required="required" class="custom-control-input" value="perempuan"> 
        <label for="jeniskelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" required="required" class="custom-select">
        <option value="ti">Teknik Informatika</option>
        <option value="si">Sistem Informasi</option>
        <option value="bd">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Keahlian</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_0" type="checkbox" required="required" class="custom-control-input" value="html"> 
        <label for="keahlian_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_1" type="checkbox" required="required" class="custom-control-input" value="css"> 
        <label for="keahlian_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_2" type="checkbox" required="required" class="custom-control-input" value="js"> 
        <label for="keahlian_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_3" type="checkbox" required="required" class="custom-control-input" value="rwd"> 
        <label for="keahlian_3" class="custom-control-label">RWD Boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_4" type="checkbox" required="required" class="custom-control-input" value="php"> 
        <label for="keahlian_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_5" type="checkbox" required="required" class="custom-control-input" value="py"> 
        <label for="keahlian_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_6" type="checkbox" required="required" class="custom-control-input" value="jv"> 
        <label for="keahlian_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="domisili">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select" required="required">
        <option value="bgr">Bogor</option>
        <option value="dpk">Depok</option>
        <option value="jkt">Jakarta</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</for mm>