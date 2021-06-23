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

    <title>BIT Banking System</title>
    <style> footer{ 
      border:2px solid black; 
     
      }
      h3{
        font-weight: bold;
      }
      h1{
        font-weight:bold;
        font-size:80px;
        color: #B22222;
      }
      body{
    
        background-color:gray;
      }
      </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style=" height: 40vh; background-color : #B0C4DE; border: 2px solid black">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>How Can We </h3>
                  <h1>Help You?</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank4.jpg" class="img-fluid pt-2" width="490" height="100">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" style="background-color : gray";>
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid" width="240" height="240">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.png" class="img-fluid" width="257" height="257">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid" width="360" height="360">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="background-color : #8FBC8F; color: black;">
        <p>BIT SP-2021. Made by <b>Anubhav Raj Anand </b> <br>- Birla Institute of Technology -</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
