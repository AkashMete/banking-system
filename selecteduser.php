<?php
include 'connfile.php';

if (isset($_POST['submit'])) {

    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from allusers where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.
    $sql = "SELECT * from allusers where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE allusers set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);


        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE allusers set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['acName'];
        $receiver = $sql2['acName'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
                                     window.location='transferhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>

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
        $sid = $_GET['id'];
        $sql = "SELECT * FROM allusers WHERE id=$sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>

        <div class="view-users">



            <center>
                <h1 style="color:white;background-color: rgba(0, 0, 0, 0.8); margin: top 50px;width:700px;height:100px;padding-top: 25px;">Transfer Money</h1>
            </center>


            <center>
                <hr style="height:2px;">
            </center>


            <form method="post" name="tcredit" class="tabletext"><br>


                <div>
                    <center>
                        <table class="center content-table" style="margin-bottom: 50px;">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th>Balance</th>
                            </tr>
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['acName'] ?></td>
                                <td><?php echo $rows['acEmail'] ?></td>
                                <td><?php echo $rows['balance'] ?></td>
                            </tr>

                        </table>
                    </center>
                    <br><br>


                    <div class="transfer-to">
                        <center>
                            <label style="color : black;"><b>Transfer To:</b></label>
                            <select name="to" style="width: auto;" class="form-control" required>
                                <option value="" disabled selected>Choose</option>
                                <?php
                                include 'connfile.php';
                                $sid = $_GET['id'];
                                $sql = "SELECT * FROM allusers where id!=$sid";
                                $result = mysqli_query($conn, $sql);
                                if (!$result) {
                                    echo "Error" . $sql . "<br>" . mysqli_error($conn);
                                }
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option class="table" value="<?php echo $rows['id']; ?>">

                                        <?php echo $rows['acName']; ?> (Balance:
                                        <?php echo $rows['balance']; ?> )

                                    </option>
                                <?php
                                }
                                ?>
                                <div>
                            </select>
                            <br>
                            <br>
                            <label style="color : black;"><b>Amount:</b></label>
                            <input type="number" style="width: auto;" class="form-control" name="amount" required>
                            <br><br>
                            <div class="text-center">
                                <button type="submit" name="submit" id="myBtn" class="btn btn-info btn-rounded btn-lg">Transfer Money</button>

                            </div>
                        </center>
                    </div>
                </div>
                <img src="./public/css/payment.png" style="width: 600px;position: absolute;bottom: 0;" alt="">
            </form>
        </div>

        </div>

        <center>

        </center>


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