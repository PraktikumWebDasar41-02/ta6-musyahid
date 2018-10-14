<?php 

include "functions.php";



$hasil = mysqli_query($koneksi, "SELECT * FROM postingan");

 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
   
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">ARTIKEL TERBARU</h2>
                </div>
                     <a class="btn btn-primary" href="tambahdata.php">TAMBAH ARTIKEL</a>
                <div class="block-content">
                    <div class="clean-blog-post">
                        <div class="row">
                         <?php while ($row = mysqli_fetch_assoc($hasil)) : ?>
                            <div class="row">
                                 <div class="col-md-6 col-lg-4 item"><a class="lightbox"><img class="img-thumbnail img-fluid image" src="assets/img/<?php  echo ($row["gambar"]); ?>"></a></div>



                            <div class="col-lg-7">
                                <h3><?php echo ($row["judul"]); ?></h3>
                                <h4><?php echo ($row["kategori"]); ?></h4>
                                <p><b>ISI ARTIKEL : </b> <?php echo ($row["isi"]); ?></p>
                                <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                                <a class="btn btn-outline-primary btn-sm" role="button" href="ubah.php?id=<?= $row["id"]; ?>">UPDATE</a>
                                <a class="btn btn-outline-primary btn-sm" role="button" href="hapus.php?id=<?= $row["id"]; ?>">DELETE</a>   
                            </div>

                        </div>

                <?php endwhile;  ?>
                    
                    </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>