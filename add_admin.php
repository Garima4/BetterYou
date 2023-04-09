<!doctype html>
                    <html lang="en">
                    <head>
                        <?php include "headerfiles.html"; ?>
                        <title>Add new Admin</title>
                    </head>
                    <body>
                    <?php include "adminheader.php"; ?>
                    <div class="container mt-5">
                        <form action="addadmin_action.php" method="post">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <h1 class="text-center">Add new Admin</h1>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="username">Username:</label>
                                            <input type="text" name="username" id="username" class="form-control" required
                                                   data-msg-required="Username is required"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fname">Full Name:</label>
                                            <input type="text" name="fname" id="fname" class="form-control" required
                                                   data-msg-required="Full name is required"/>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="pass">Password:</label>
                                            <input type="password" name="pass" id="pass" class="form-control" required
                                                   data-msg-required="Password is required"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cpass">Confirm Password:</label>
                                            <input type="password" name="cpass" id="cpass" class="form-control" required
                                                   data-msg-required="Confirm Password is required" data-rule-equalto="#pass"/>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="phno">Phone No.:</label>
                                            <input type="text" name="phno" id="phno" class="form-control" required
                                                   data-msg-required="Phone No. is required" data-rule-number="true"/>
                                        </div>
                                        <div class="col-md-6">
                        <label for="phno">Email Id:</label>
                        <input type="email" name="email" id="email" class="form-control" required
                               data-msg-required="Email is required"/>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-9">
                        <?php
                        if (isset($_REQUEST['err'])) {
                            if ($_REQUEST['err'] == 1)
                                echo "<div class='alert alert-danger'>Username already exists</div>";
                            else
                                echo "<div class='alert alert-success'>Admin added successfully</div>";
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