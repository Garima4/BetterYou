<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>Add new Question</title>
</head>
<body>
<?php include "hp_header.php"; ?>
<div class="container mt-5">
    <form action="addques_action.php" method="post">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Add new Question</h1>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="title">Title:</label>
                        <input type="hidden" name="hp_id" value="<?php echo $_SESSION['hp_id'] ?>">
                        <textarea rows="5" name="title" id="title" class="form-control" required
                                  data-msg-required="Title is required"></textarea>
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