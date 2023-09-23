<?php
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ThreeJS Project・Joshua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="assets/thumbnail/saoIcon.png"/>
</head>
<body>
<iframe id="youtubeCinema"></iframe>
<video id="videoCinema" loop style="display:none"></video>

<video id="videoPreview" loop style="display:none"></video>
<div id="blocker">

    <div id="instructions">
        <span style="font-size:36px">Click to play</span>
        <br /><br />
        Move: WASD<br/>
        Jump: SPACE<br/>
        Look: MOUSE
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="module" src="js/main.js"></script>
<script src="dir.php"></script>


</body>
</html>