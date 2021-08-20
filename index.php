<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body id="bg">
    <style>
      #bg{
        background-image: url('img/123.jpeg');
        background-repeat: no-repeat;
        background-size:100%  100vh ;
      }
      button{
        border:none;
        border-radius: 8px;
        padding: 10px;
        background:#50DFF1; 
        color:#022F2C;
        letter-spacing: 1.5px;
        font-size: 15px;
        transition: 0.5s;
      }
      button:hover,h1:hover{
        transform: scale(1.1);
      }
      button:hover{
        background-color:#022F2C;
        color:#17BAAF;
      }
      p{
        font-size: 80px;
        color:#031B2E;
        font-family: "Times New Roman", Times, serif;
      }
      .tab {
            display: inline-block;
            margin-left: 1000px;
        }
    </style>
    <?php
    include 'navbar.php';
    ?>
      <!-- Activity section -->
            <div clas="container">
              <p><span class="tab"></span><span class="tab"></span>NATIONAL BANK</p>
            </div>
            <div class="row activity text-center">         
                  <div class="col-md act">

                  <br><br>
                  <br><br>
                    <img src="img/acc.png" class="img-fluid" width="400" height="400">
                    <br><br>
                    <a href="createuser.php"><button>Create an Account</button></a>
                  </div>
                  <div class="col-md act">

                  <br><br>
                  <br><br>
                    <img src="img/tra.png" class="img-fluid" width="400" height="400">
                    <br><br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">

                  <br><br>
                  <br><br>
                    <img src="img/his.png" class="img-fluid" width="400" height="400">
                    <br><br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <!-- <footer class="text-center mt-5 py-2">
        <p>&copy 2020. Made by <b>PRASAD BADHAN</b> <br> The Sparks Foundation</p>
      </footer> -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>