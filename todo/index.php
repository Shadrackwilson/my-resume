<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>TODO</title>
  </head>
  <body class="bg-">
    <form action="insert.php" method="POST">
  <div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3">
        <h3 class="text-center text-primary">TO-DO LIST</h3>
        <div class="col-5">
            <input type="text" name="list"  class="form-control" value="">
        </div>
        <div class="col-2">
            <button class="btn btn-outline-primary">ADD</button>
        </div>
    </div>
  </div>
  </form>
<?php 
include 'config.php';
$rawData= mysqli_query($con, "select * from tbltodo");
?>

  <div class="container">
  <div class="col-8 bg-white m-auto mt-3">
  <table class="table">
<tbody class="fs-3 text-primary shadow">
    <?php 
    while ($row = mysqli_fetch_array($rawData)) { 
   
    ?>
<tr>
<td><?php echo $row['list']?></td>
<td style="width: 10%;"><a  href="delete.php? ID= <?php echo $row['id']?>"class="btn btn-outline-danger">delete</a></td>
<td style="width: 10%;"><a  href="update.php? ID= <?php echo $row['id']?>" class="btn btn-outline-success">update</a></td>
</tr>
<?php 
    }
?>
</tbody>
  </table>
  </body>
</html>