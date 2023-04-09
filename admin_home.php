<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<?php include "adminheader.php"; ?>
<div class="container">
    <h1 class="text-center text-capitalize text-dark mt-5 p-5">Welcome, <?php echo $_SESSION['admin'] ?></h1>
</div>
<?php include "footer.html" ?>
</body>
<?php include "footer_scripts.html";?>
</html>
