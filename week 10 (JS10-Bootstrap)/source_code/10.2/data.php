<!-- praktikum CRUD menggunakan ajax step 8 -->
<?php
/*
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD dengan Ajax</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?? '' ?>">

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#" style="color: #fff;">CRUD dengan Ajax</a>
    </nav>

    <div class="container">
        <div class="mt-4">
            <h2 align="center" style="margin: 30px;">Data Anggota</h2>
            <div class="card">
                <div class="card-body">
                    <form method="post" id="form-data">
                        <div class="form-group row">
                            <label for="id" class="col-sm-3 col-form-label">ID Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" id="id" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" id="nama" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-Laki
                                <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="data"></div>
        </div>
    </div>

    <div class="text-center">&copy; <?php echo date('Y'); ?> Design Dan Pemrograman Web</div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Mengatur Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.data').load('data.php');
        });
    </script>
</body>

</html>
*/
?>


<!-- praktikum CRUD menggunakan ajax step 21 -->
<?php
/*
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $no_telp; ?></td>
            <td>
                <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                    <i class="fa fa-edit"></i> Edit
                </button>
                <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                    <i class="fa fa-trash"></i> Hapus
                </button>
            </td>
        </tr>
        <?php
            }
        } else {
        ?>
        <tr>
            <td colspan="7">Tidak ada data ditemukan</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    $(document).on('click', '.edit_data', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'get_data.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                reset();
                $('html, body').animate({
                    scrollTop: 30
                }, 'slow');
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if (response.jenis_kelamin === "L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    $(document).on('click', '.hapus_data', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'hapus_data.php',
            data: {
                id: id
            },
            success: function() {
                $('.data').load('data.php');
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
*/
?>


<!-- praktikum CRUD menggunakan ajax step 27 -->
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $alamat; ?></td>
                    <td><?php echo $no_telp; ?></td>
                    <td>
                        <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                        <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="7">Tidak ada data ditemukan</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    $(document).on('click', '.edit_data', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'get_data.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                reset();
                $('html, body').animate({
                    scrollTop: 30
                }, 'slow');
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if (response.jenis_kelamin === "L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    $(document).on('click', '.hapus_data', function() {
        var id = $(this).attr('id');
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
                type: 'POST',
                url: 'hapus_data.php',
                data: {
                    id: id
                },
                success: function() {
                    $('.data').load('data.php');
                },
                error: function(response) {
                    console.log(response.responseText);
                }
            });
        }
    });
</script>