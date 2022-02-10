<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Customers</title>

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

        <?php
        include 'connfile.php';
        $sql = "SELECT * FROM allusers";
        $result = mysqli_query($conn, $sql);
        ?>

        <div class="view-users1">

            <center>
                <h1 style="color:white;background-color: rgba(0, 0, 0, 0.8); margin: top 50px;width:700px;height:100px;padding-top: 25px;">View All Users</h1>
            </center>
            <center>
                <hr style="height:2px;">
            </center>
            <div class="row">
                <div class="col-lg-4"  >
                    <img src="./public/css/transfer-history.jpg" style="width: 600px;position: absolute;bottom: 0;" alt="">
                </div>

                
                <div class=" col-lg-4" >
                    <center>
                    <table class="center content-table ">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Details</th>
                        </tr>
                        <?php
                        while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['acName'] ?></td>
                                <td><a href="singleuser.php?id= <?php echo $rows['id']; ?>" class="btn btn-primary">View Details</a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </center>
                </div>
               

                <div class="col-lg-4"  >
                    <img src="./public/css/payment2.png" style="width: 600px;position: absolute;bottom: 0;"  alt="">
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