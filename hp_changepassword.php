<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>HP Change Password</title>
</head>
<body>
<?php include "hp_header.php"; ?>
<div class="container mt-5">
    <form action="hp_changepassword_action.php" method="post">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Change Password</h1>
                <div class="row">
                    <div class="col-md-12">
                        <label for="email">Email:</label> <br/>
                        <span class="mt-4"><?php echo $_SESSION['helprovider'] ?></span>
                        <input type="hidden" name="email" id="email" value="<?php echo $_SESSION['helprovider'] ?>"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="opass">Old Password:</label>
                        <input type="password" name="opass" id="opass" class="form-control" required data-msg-required="Old Password is required"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="npass">New Password:</label>
                        <input type="password" name="npass" id="npass" class="form-control" required data-msg-required="New Password is required"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="cpass">Confirm Password:</label>
                        <input type="password" name="cpass" id="cpass" class="form-control" required data-msg-required="Confirm Password is required" data-rule-equalto="#npass"/>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-9">
                        <?php
                        if(isset($_REQUEST['err'])){
                            if($_REQUEST['err']==1){
                                echo "<div class='alert alert-success'>Password Updated successfully</div>";
                            }
                            elseif($_REQUEST['err']==2){
                                echo "<div class='alert alert-danger'>New password and confirm password not matched</div>";
                            }
                            elseif($_REQUEST['err']==3){
                                echo "<div class='alert alert-danger'>Old password not matched</div>";
                            }
                        }
                        ?>
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