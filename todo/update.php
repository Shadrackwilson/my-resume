<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TODO LIST</title>
  </head>
  <body class="bg-info">
    <?PHP 

    $id = $_GET['ID'];
    include 'config.php';
    $Rdata = mysqli_query($con, "select * from tbltodo where Id = $id ");
    $data = mysqli_fetch_array($Rdata);
    
    ?>
  <form action="update1.php" method="POST">
  <div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
        <h3 class="text-center text-primary">UPDATE</h3>
        <div class="col-5">
            <input type="text"  value="<?php echo $data['list'] ?>" name="list" class="form-control" >
        </div>
        <div class="col-2">
            <button class="btn btn-outline-primary">UPDATE</button>
            <input type="hidden" value="<?php echo $data['id']?>" name="id" class="form-control" >
        </div>
    </div>
  </div>
  </form>
  </body>
</html>