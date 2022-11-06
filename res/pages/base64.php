<?php
require("navbar.php");

// #region

// #endregion

//echo(hash('md5','test'))
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




</head>

<body>




    <div class="container_div">
        <div class="centered_div">
            <iframe src="/res/pages/Encoding/txt_enc.php" id="pageviwer"> </iframe>
        </div>
        <div class="sidebar" onmouseover="sideshow()" onmouseout="sidehide()">
        <div class="sidebar_icons">
      
        </div>
            <ul class="navlist">
                <li i onclick="loadpage('1')">Text Encoding</li>
                <li onclick="loadpage('2')">Hash Generator</li>
                <li onclick="loadpage('3')">Wordlist to hash</li>
                <li>Option</li>
                <li>Option</li>
            </ul>
        </div>
    </div>
    </div>


</body>
<script src="/node_modules/iframe-resizer/js/iframeResizer.js"></script>
<script>
  iFrameResize({ }, '#pageviwer')
</script>

<script src="/res/javascript/Effects.js"></script>

</html>