<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    	
		button{
			border:none;
			background: #0A83D5;
            color:#042C29;
		}
	    button:hover{
			background-color:#063B5F;
			transform: scale(1.1);
			color:#0DE3FE;
		}
        p{
            text-align:center;
            margin-top: 5vh;
            color: #00BAD1;
            font-size: 24px;
        }

    </style>
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
        <h2 class="text-center pt-4" style="color:#0DE3FE;">TRANSACTION</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center" style="color:#FFFFFF;">ID</th>
                    <th class="text-center" style="color:#FFFFFF;">NAME</th>
                    <th class="text-center" style="color:#FFFFFF;">EMAIL-ID</th>
                    <th class="text-center" style="color:#FFFFFF;">BALANCE</th>
                </tr>
                <tr>
                    <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['id'] ?></td>
                    <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['name'] ?></td>
                    <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['email'] ?></td>
                    <td class="py-2" style="color:#A4EAE0;"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label style="color:#FFFFFF;">TRANSFER TO :</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>CHOOSE</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color:#FFFFFF;">AMOUNT :</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>

    <?php
    include 'config.php';

    if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


if (($amount)<0)
{   
     echo '<p> Oops! Negative values cannot be transferred </p>';  // showing an alert box.    
 }



 // constraint to check insufficient balance.
 else if($amount > $sql1['balance']) 
 {
     echo '<p> Bad Luck! Insufficient Balance</p> ' ; // showing an alert box.
 }
 


 // constraint to check zero values
 else if($amount == 0){
      echo '<p> Oops! Zero value cannot be transferred </p>';
  }


 else {
     
             // deducting amount from sender's account
             $newbalance = $sql1['balance'] - $amount;
             $sql = "UPDATE users set balance=$newbalance where id=$from";
             mysqli_query($conn,$sql);
          

             // adding amount to reciever's account
             $newbalance = $sql2['balance'] + $amount;
             $sql = "UPDATE users set balance=$newbalance where id=$to";
             mysqli_query($conn,$sql);
             
             $sender = $sql1['name'];
             $receiver = $sql2['name'];
             $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
             $query=mysqli_query($conn,$sql);

             if($query){
                  echo '<p>Transaction Successful</p>';
             }

             $newbalance= 0;
             $amount =0;
     }
 
}
    ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>