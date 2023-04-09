<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>View Admins</title>
</head>
<body>
<?php include "adminheader.php"; ?>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">View Admins</h1>
                <?php
                include "connection.php";
                $select="select * from admin where username !='".$_SESSION['admin']."'";
                $res=mysqli_query($conn,$select);
                ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Controls</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=0;
                    if(mysqli_num_rows($res)){
                        while ($row=mysqli_fetch_array($res)){
                            ?>
                            <tr>
                                <td><?php ++$no; ?></td>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row['fullname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><a href="edit_admin.php?q=<?php echo $row['username'] ?>">
                                        <button class="btn btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="del_admin.php?q=<?php echo $row['username'] ?>">
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    else{
                        echo "<tr><td colspan='6' class='alert alert-danger text-center'>No more sub-admins created</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

</div>
<?php include "footer.html" ?>
</body>
</html>