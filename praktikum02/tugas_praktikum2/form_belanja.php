<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Toko Elektronik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: green;
            margin-top: 50px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: green;
            margin-bottom: 30px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }


        .harga-list {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .hasil-input h3 {
            color: green;
            margin-bottom: 20px;
            text-align: center;
        }

        .hasil-input p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Form Toko Elektronik</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer </label>
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk </label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input"
                                    value="Mesin Cuci" required="required">
                                <label for="produk_0" class="custom-control-label">Mesin Cuci</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="Kulkas" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_2" class="custom-control-label">TV</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk </label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Tambahkan</button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga :</h4>
                    <ul>
                        <li>Mesin Cuci - Rp. 4.000.000</li>
                        <li>Kulkas - Rp. 5.000.000</li>
                        <li>TV - Rp. 2.500.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $Mesin = 4000000 * $jumlah;
        $Kulkas = 5000000 * $jumlah;
        $TV = 2500000 * $jumlah;
        ?>
        <div class="hasil-input">
            <h3>Hasil Inputan</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Produk Pilihan</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Total Belanja</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $name; ?>
                        </td>
                        <td>
                            <?php echo $produk; ?>
                        </td>
                        <td>
                            <?php echo $jumlah; ?>
                        </td>
                        <td>
                            <?php
                            switch ($produk) {
                                case "Mesin":
                                    echo $Mesin;
                                    break;
                                case "Kulkas":
                                    echo $Kulkas;
                                    break;
                                case "TV":
                                    echo $TV;
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>




</body>

</html>