<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />

    <title>Tugas Javascript</title>
</head>
<body>
<div class="container"><br>
        <h3 class="page-header text-center">DataTable Customer</h3>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><br>
                        <a href="tambah.php" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Customer</a>
                    </div>
                    <div class="col-md-2 pull-left"></div>
                </div>
            </div><br>
<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $query = mysqli_query($conn ,"SELECT * FROM customer"); //silahkan ganti jika error (sesuaikan dengan nama table yang ada di local)
            ?>
            
            <?php if(mysqli_num_rows($query)>0){ 
            $no =1;
            while($data=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["first_name"]; ?></td>
                    <td><?php echo $data["last_name"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["phone"]; ?></td>
                    <td><?php echo $data["address"]; ?></td>
                    <td>
                        <a href="proses_hapus.php?id=<?php echo $data["id"]; ?>"> Delete </a> | 
                        <a href="ubah.php?id=<?php echo $data["id"]; ?>"> Edit </a>
                    </td>
                </tr>
            <?php 
                $no++;
            }
        }
        ?>
        </tbody>
    </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
