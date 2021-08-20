<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body id="bg">
    <style>
        #bg{
            background-image: linear-gradient(to right top, #031b2e, #052035, #06253b, #092a42, #0b2f49, #0f3e5b, #124d6d, #135d7f, #107ca1, #079dc2, #00c0e1, #0de3fe);
                background-repeat: no-repeat;
                background-size:100%  100vh ;
      }
      
    </style>      
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color:#0DE3FE;">TRANSACTION HISTORY</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="color:#FFFFFF;">SR.NO.</th>
                <th class="text-center" style="color:#FFFFFF;">SENDER</th>
                <th class="text-center" style="color:#FFFFFF;">RECIEVER</th>
                <th class="text-center" style="color:#FFFFFF;">AMOUNT</th>
                <th class="text-center" style="color:#FFFFFF;">DATE AND TIME</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['sno']; ?></td>
            <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['sender']; ?></td>
            <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['receiver']; ?></td>
            <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['balance']; ?> </td>
            <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>