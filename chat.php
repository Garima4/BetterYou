<?php
include "connection.php";
$f = $_REQUEST['f'];
$t = $_REQUEST['t'];
if ($f == "helprovider") {
    include "hp_header.php";
    $from = $_SESSION['helprovider'];
    $to = $_REQUEST['to'];
    //echo $from." ".$to;
} else {
    include "patientheader.php";
    $from = $_SESSION['patient'];
    $to = $_REQUEST['to'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>Chat Space</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center mb-2">Chat Interface</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>From:</b> <?php echo $from; ?></h5>
                </div>
                <div class="col-md-6">
                    <h5 class="text-right"><b>To:</b> <?php echo $to; ?></h5>
                </div>
            </div>
            <hr>
            <input type="hidden" value="<?php echo $from ?>" id="from"/> <br/>
            <input type="hidden" value="<?php echo $to ?>" id="to"/>
        </div>
    </div>
    <div class="row">
        <div class="message-div p-2 mb-4" id="messages-area" onscroll="clearTheInterval('stop')"></div>
        <div class="input-group" style="width: 70%; margin-left:auto; margin-right: auto; margin-bottom: 30px;">
            <input onkeyup="checkInput(this)" id="message" name="message" type="text" class="form-control"
                   placeholder="enter message...">
            <div class="input-group-append">
                <button id="messageBTN" disabled onclick="sendMessage()" class="btn btn-info" style="cursor: pointer;"
                        type="button">
                    <img src="images/send.png" alt="send" class="img-height">
                </button>
                <span is="errmsg"></span>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="script.js"></script>

<style>
    .to {
        color: #fff;
        background: #76fa87;
        padding: 5px;
        border-radius: 5px 5px 5px 5px;
    }
</style>
</body>
</html>
