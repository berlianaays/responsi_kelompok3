<!doctype html>
<html lang="en">
<?php
$user_name = "root";
$password  = "";
$database  = "drawing"; 
$host_name = "localhost";

$dahkonek=mysqli_connect("localhost","root","","drawing");
if (!$dahkonek) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dot {
            margin-left: 40px;
            height: 55px;
            width: 55px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }
        .circle-btn{
            border-radius: 50px;
        }
        .logout-btn{
            background-color: red;
            color: white;
        }
        .top-mr{
            margin-top: 21%;
            margin-left: 23%;
            font-size: 72px;
        }
        body{
            background-color: rgb(112, 210, 240); /* For browsers that do not support gradients */
            background-image: linear-gradient(to bottom right, rgb(61, 49, 218), rgb(5, 5, 4));
            height: 979px;
            color: white;
        }
        p{
            font-size: 35px;
            font-weight: bold;
        }
        .mt-10{
            margin-top: 15%;
        }
    </style>
    <title>Daftar Gambar</title>
  </head>
  <body>
    <div class="container-fluid">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="text-muted" href="#"></a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="#"></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              
            </div>
          </div>
        </header>
        <div class="p-3 p-md-5">
          <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">DAFTAR GAMBAR USER</h1>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md-8 p-3">
            <div class="card  mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <table class="table" style="color: black;">
                    <tbody>
                    <?php 
                          $data = mysqli_query($dahkonek,"select * from daftar_gambar");
                          while($d = mysqli_fetch_array($data)){
                            ?>
                      <tr>
                        <th scope="row"><span class="dot"></th>

                          <td><?php echo $d['nama_gambar']; ?></td>
                          	
                        <td><a href="hapus_gambar_user.php?id_gambar=<?php echo $d['id_gambar'];?>" class="btn btn-primary btn-lg circle-btn">HAPUS </a></td>
                      </tr>
                      <?php 
                                }
                                ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <h1 class="top-mr">DRAWPEN</H1>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="dashboard.html" type="button" class="btn btn-lg circle-btn logout-btn">LOGOUT</a>
            </div>
            <div class="col-md-4">
                <p>Easy Online to Draw and Painting</p>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-4">
                <a href="home.html" style="color: white;"><h3>&#8678;Back to Home</h3></a>
            </div>
        </div>
      </div>

    <script src="js/bootstrap.min.js"></script>

  </body>
</html>