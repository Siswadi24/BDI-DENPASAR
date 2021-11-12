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

      <div class="container">
        <h1>Halaman Index</h1>
        <?php
          $cek = count($_GET);
          if ($cek > 0) {
            # code...
            $status = $_GET['status'];
            if ($status == "success") {
              # code...
              echo '<div class="alert alert-success" role="alert">
              Data Pelanggan Berhasil disimpan.
              </div>';
            }elseif($status == "error"){
              # code...
              echo '<div class="alert alert-danger" role="alert">
              Data Pelanggan Gagal disimpan.
              </div>';
            }elseif ($status == "update_success") {
              # code...
              echo '<div class="alert alert-danger" role="alert">
              Data Pelanggan Berhasil diUpdate.
              </div>';
            }elseif ($status == "update_gagal" ) {
              # code...
              echo '<div class="alert alert-danger" role="alert">
              Data Pelanggan gagal diUpdate.
              </div>';
            }elseif ($status == "delete_success") {
              # code...
              echo '<div class="alert alert-danger" role="alert">
              Data Pelanggan berhasil dihapus.
              </div>';
            }elseif ($status == "delete_gagal") {
              # code...
              echo '<div class="alert alert-danger" role="alert">
              Data Pelanggan gagal dihapus.
              </div>';
            }
          }
        ?>
        <div class="text-right">
          <a href="create.php" class="btn btn-md btn-primary">Tambah Data</a>
          <hr>
        </div>
        <table class="table table-bordered table-striped" style="width: 100;">
        <tr>
          <th>costumer_id</th>
          <th>Email_pelanggan</th>
          <th>notelepon_pelanggan</th>
          <th>Alamat</th>
          <th class="text-center">
            Aksi
          </th>
        </tr>
        <?php
          $query = "SELECT * FROM pelanggan";

          if ($query = mysqli_query($koneksi, $query)) {
            while ($data = mysqli_fetch_array($query)) {
              echo "
              <tr>
                  <td>".$data['costumer_id'] ."</td>
                  <td>".$data['Email_pelanggan'] ."</td>
                  <td>".$data['notelepon_pelanggan'] ."</td>
                  <td>".$data['Alamat_pelanggan'] ."</td>
                  <td>
                      <a href='edit.php?id=".$data['costumer_id']."' class='btn btn-sm btn-warning'>Edit</a>
                      <a href='#' onclick='validasi(".$data['costumer_id'].")' class='btn btn-sm btn-danger'>Hapus</a>
                  </td>
                  <tr/>
              ";
            }
          }else {
            echo "
              ERROR: mysqli error $sql";
          }
        ?>

      </div>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>MySQL</li>
    </ul>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      function validasi(params) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            Swal.fire({
            title: 'Yakin?',
            text: "Yakin ingin menghapus saya!!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                var delayInMilliseconds = 3000; //1 second
                setTimeout(function() {
                    //your code to be executed after 1 second
                    window.location.href = "proses/delete.php?nim="+param;
                }, delayInMilliseconds);
            } else {
                swalWithBootstrapButtons.fire(
                'Yah kok ga jadi',
                'untung kamu labil',
                'error'
                )
            }
            })
        }
    </script>
  </body>
</html>