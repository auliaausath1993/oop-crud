
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OOP CRUD</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/B0ED4E23-53FF-D54C-9D35-D0ADDE06E106/main.js" charset="UTF-8"></script><script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="halaman/read.php">Data</a></li>
                </ul>
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
<?php
  require_once('../config.php');
  require_once('../CrudAble.php');

  $id = $_GET['id'];
  $edit = CrudAble::ambil($id);
?>
<!DOCTYPE html>
<html>
<head>
  <title>OOP CRUD</title>
</head>
<body>
<center>
<h3>Edit Data</h3>
  <table>
  <form action="../process/edit_process.php" method="post">
    <tr>
      <td></td>
      <td><input type="hidden" value="<?= $edit['id']?>" name="id" class="form-control" required></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input type="text" value="<?= $edit['nama']?>" name="nama" class="form-control" required></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" value="<?= $edit['email']?>" name="email" class="form-control" required></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" value="<?= $edit['alamat']?>" name="alamat" class="form-control" required></td>
    </tr>
    <tr>
      <td></td>
      <td><button class="btn btn-primary btn-sm active" name="submit" type="submit" name="submit">Edit Data</button></td>
    </tr>
    </form>
  </table>
  </center>
</body>
</html>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
