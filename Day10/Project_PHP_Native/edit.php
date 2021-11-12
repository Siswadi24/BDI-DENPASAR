<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
        require_once('conf.php');
      ?>
    <div class="container mt-5 card">
        <h1 class="mt-3">Halaman Edit Data</h1>
        <hr>
        <?php
            $paramater = $_GET['id'];
            $query = "SELECT * FROM pelanggan WHERE costumer_id=".$paramater;

            if ($query = mysqli_query($koneksi, $query)) {
                # code...
                $row = $query->fetch_assoc();
                // print_r($row);
            } else {
                # code...
                echo "ERROR: mysqli error $query";
            }
        ?>
        <form method="post" action="simpan/update.php?id=<?php echo $paramater;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Password">costumer_id</label>
                <input name="costumerID" type="number" class="form-control" id="costumerID" placeholder="Your Name" required value="<?php echo $row['costumer_id']?>">
                <small id="passwordHelp" class="form-text text-muted">Use the best combination</small>
            </div>
            <div class="form-group">
                <label for="Nama">Email_pelanggan</label>
                <input class="form-control" type="text" id="Email" name="Email" placeholder="Your Email" required value="<?php echo $row['Email_pelanggan']?>">
            </div>
            <div class="form-group">
                <label for="NIK">No. telepon_pelanggan</label>
                <input class="form-control" type="text" id="noHP" name="noHP" placeholder="no. telepon" required value="<?php echo $row['notelepon_pelanggan']?>">
            </div>
            <div>
                <label for="" class="mr-2" name="couple">Alamat_pelanggan</label>
                <input class="form-control" type="text" id="adress" name="adress" placeholder="Alamat Anda" required value="<?php echo $row['Alamat_pelanggan']?>">
            </div>
            <!-- <div class="form-group">
                <label for="mobilePhone">Ubah Tanggal</label>
                <input name="tanggal" type="date" class="form-control" id="mobilePhone" placeholder="Your Mobile Phone">
            </div> -->
            <hr>
            <div class="form-group text-center">
                <a href="index.php" class="btn btn-md btn-danger">Batal</a>
                <button type="submit" class="btn btn--md btn-warning">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>