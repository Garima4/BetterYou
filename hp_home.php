<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="boxed_wrapper">
    <?php include "hp_header.php"; ?>
    <div class="container">
        <h1 class="text-center m-5 p-5">Welcome, <?php echo $_SESSION['helprovider'] ?></h1>
    </div>
    <?php include "footer.html" ?>
</div>
</body>
<?php include "footer_scripts.html" ?>
</html>