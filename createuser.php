<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body id="bg">
<style>
      #bg{
        background-image: linear-gradient(to right top, #031b2e, #052035, #06253b, #092a42, #0b2f49, #0f3e5b, #124d6d, #135d7f, #107ca1, #079dc2, #00c0e1, #0de3fe);
        background-repeat: no-repeat;
        background-size:100%  100vh ;
      }
      .screen {
        position: relative;
        background: #002F52;
        border-radius: 15px;
        box-shadow: 5px 10px 10px rgba(0, 0, 0, .25);
      }
      .app-form-group {
        margin-bottom: 15px;
      }

      .app-form-group.button {
        margin-bottom: 0;
        text-align: right;
        position: absolute;
        bottom: 30px;
        right:40px;
      }

      .app-form-control{
        width: 100%;
        padding: 10px 0;
        background: none;
        border: none;
        border-bottom: 1px solid #4C4B4B;
        color: #FFFFFF;
        font-size: 14px;
        outline: none;
        transition: border-color .2s;
      }

      .app-form-control::placeholder {
        color: #46EAFF;
      }

      .app-form-control:focus {
        border-bottom-color: #46EAFF;
      }

      .app-form-button {
        background: none;
        border: none;
        margin-left: 20px;
        color: #46EAFF;
        font-size: 14px;
        cursor: pointer;
        outline: none;
      }

      .app-form-button:hover {
        color: #FFFFFF;
      }


    </style>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>
         <br> <br> <br> <br> <br>
        <h2 class="text-center pt-4" style="color:#0DE3FE;">CREATE AN ACCOUNT</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">   
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="DEPOSIT" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>