<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>

    <!-- Bootstrap & CSS Links -->
    <link rel="stylesheet" href="./public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <section class="main">
        <div class="nav-bar container-fluid" style="padding-left: 0px;padding-right: 0px;">
            <!-- Header -->
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">Banking System</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alluser.php">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transfermoney.php">Transfer Money</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="banner-image">
                <div class="inner-banner-image" style="padding-top: 0px;">
                    <center>
                        <div class="banner-content">
                            <h1>Basic Banking System</h1>
                            <p style="font-family: 'Montserrat-Light', sans-serif; font-size: 2rem;">Task:1 The Sparks Foundation</p>
                            <p style="font-family: 'Montserrat-Light', sans-serif; font-size: 1.5rem;"><b>Created By: Akash Mete</b></p>

                            <a href="getnewuser.php"> <button type="button" class="btn btn-info btn-rounded btn-lg">Get Started<i class="fas fa-heart ml-2" aria-hidden="true"></i></button></a>


                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="container">
            <center>
                <h2>Key Features</h2>
            </center>
            <hr>

            <div class="process" style="padding-top: 50px;">
                <div class="row" style="justify-content: center;text-align:center">

                    <div class=" col-lg-4 card" style="margin: auto;width: 300px;height:424px;padding:0px 0px 0px 0px">
                        <img src="./public/css/feature-1.jpg" class="card-img" alt="...">
                        <div class="card-body">
                            <h3>Flexible Transaction Process</h3>
                        </div>
                    </div>

                    <div class=" col-lg-4 card" style="margin: auto;width: 300px;height:424px;padding:0px 0px 0px 0px">
                        <img src="./public/css/feature-3.jpg" class="card-img" alt="...">
                        <div class="card-body">
                            <h3>Personal Details</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 card  " style="margin: auto;width: 300px;height:424px;padding:0px 0px 0px 0px">
                        <img src="./public/css/feature-2.jpg" class="card-img" alt="...">
                        <div class="card-body">
                            <h3>Transaction History</h3>
                        </div>
                    </div>

                </div>
            </div>
            <br><br>
        </div>

        <div class="process container">
            <center>
                <h2>Perform Actions</h2>
            </center>
            <hr>
            <div class="row" style="justify-content: center;">

                <div class="process-item col-lg-4">

                    <div class="card" style="width: 18rem;">
                        <img src="./public/css/All-customers.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                                <a href="alluser.php" class="btn btn-primary">All Customers</a>
                            </center>
                        </div>
                    </div>
                </div>




                <div class="process-item col-lg-4">
                    <div class="card" style="width: 18rem; ">
                        <img src="./public/css/money-trans.jpg" style="height: 286px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                                <a href="transfermoney.php" class="btn btn-primary">Money Transfer</a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="process-item col-lg-4">
                    <div class="card" style="width: 18rem;height: 356px;">
                        <img src="./public/css/transfer-history.jpg" style="height: 274px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                                <a href="transferhistory.php" style="margin-top: 10px;" class="btn btn-primary">Transaction History</a>
                            </center>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <!-- Footer -->
        <div class="nav-bar container-fluid" style="padding-left: 0px;padding-right: 0px;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="footer">
                <a class="navbar-brand" style="font-size: small;" href="">@copyright by Akash</a>
            </nav>
        </div>


        <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.js"></script>

    </section>
</body>



</html>