<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>

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



        <div class="view-users">

            <center>
                <h1 style="color:white;background-color: rgba(0, 0, 0, 0.8); margin: top 50px;width:700px;height:100px;padding-top: 25px;">Create New User Account</h1>
            </center>


            <center>
                <hr style="height:2px;">
            </center>


            <center>
                <div class="message">
                    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                        <hr style="height:3px;width: 286px; margin-top: 40px;">
                        <div class="card-body">
                            <h5 class="card-title">Enter preivous user name. Then re-enter all details to update.</h5>
                           
                        </div>
                    </div>
                </div>
            </center>


          
            <div class="container" style="text-align: left; ">
            <center>
                <form action="updatesuccess.php" method="post">
                    <div class="mb-3">
                    <label for="acName" class="form-label">Old User Name</label>
                        <input type="text" style="width: auto;" class="form-control" name="oldname" id="oldname">
                    </div>
                    <div class="mb-3">
                        <label for="acName" class="form-label">New User Name</label>
                        <input type="text" style="width: auto;" class="form-control" name="newname" id="newname">
                    </div>
                    <div class="mb-3">
                        <label for="acEmail" class="form-label">New Email address</label>
                        <input type="email" style="width: auto;" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3 form-check" style="width: 244px;">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Information provided is TRUE</label>
                    </div>
                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                </form>

            </div></center>




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