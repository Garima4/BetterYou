<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>Update Admin</title>
</head>
<body>
<?php include "adminheader.php";
include "connection.php";
$select="select * from admin where username='".$_REQUEST['q']."'";
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
?>
<div class="container mt-5">
    <form action="updateadmin_action.php" method="post">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Update Admin</h1>
                <div class="row">
                    <div class="col-md-6">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" value="<?php echo $_REQUEST['q'] ?>" class="form-control" readonly/>
                    </div>
                    <div class="col-md-6">
                        <label for="fname">Full Name:</label>
                        <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $row['fullname'] ?>" required
                               data-msg-required="Full name is required"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="phno">Phone No.:</label>
                        <input type="text" name="phno" id="phno" class="form-control" required value="<?php echo $row['phone'] ?>"
                               data-msg-required="Phone No. is required" data-rule-number="true"/>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email Id:</label>
                        <input type="email" name="email" id="email" class="form-control" required value="<?php echo $row['email'] ?>"
                               data-msg-required="Email is required"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3 ">
                        <button type="submit" class="btn btn-primary form-control btn-lg">SUBMIT</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
<?php include "footer.html" ?>
</body>
</html>