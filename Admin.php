<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		</head>
    <head>
      <header>
        <div class="container">
          <div class="navbar">
            <div class="logo">
              <a href="index.php">
                <img src="image/logo.jpg" alt="Acasa" style="width:100px;height:100px;">
              </a>
            </div>
          </div>
          <div class="artists">
            <div class="left2">
            </div>
          </div>

    </head>


<body>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                  <h2 class="pull-left">Programări</h2>
                </div>


            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Nume</th>
                  <th scope="col">Prenume</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefon</th>
                  <th scope="col">Data</th>
                  <th scope="col">Artist</th>
                </tr>
              </thead>

              <tbody>
                <?php

                include 'db.php';

                $query="select * from Rezervari limit 200"; // Fetch all the data from the table customers

                $result=mysqli_query($dbCon,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td>
                      <a href="Delete.php?id=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
  </body>

</html>
