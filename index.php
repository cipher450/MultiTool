<?php
require("res/pages/navbar.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>MultiTool</title>


</head>

<body>



  <div class="content">

    <h1 class="_titel">What are you looking for ?</h1>
    <form action="">

    <div class="search_container">
    <div class="dropdown_SearchSuggestion" id="1">
      <div class="dropdown-content_SearchSuggestion" id="enc">
        <a class="nav_item" onclick="openpage('base64')">Base64</a>
        <a class="nav_item" onclick="openpage('1')">Hex</a>
        <a class="nav_item" onclick="openpage('B64')">CRC32</a>
      </div>
      <input type="text" class="search_txt" placeholder="Encoding Tool , CSS generators , Encryptions ....">
      <button class="search_btn">Searche</button>
     
     
    </div>


    </form>
   

   

    </div>

    <!-- <div class="footer">
  lor
</div> -->


</body>

</html>