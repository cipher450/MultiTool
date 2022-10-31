<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="/res/css/main.css">
    <link rel="stylesheet" type="text/css" href="/res/css/Controls.css">

    <link rel="stylesheet" type="text/css" href="/res/css/PageStyling.css">
<div class="header">
  <div class="Container">
    <div class="logocontainer">
      <div class="nav_logo" onclick="openpage('home')">
        <img src="https://cdn-icons-png.flaticon.com/512/1505/1505516.png" alt="">
      </div>
      <h2 class="nav_titel" onclick="openpage('home')">MultiTools</h2>
      
    </div>
    
    <div class="nav_itemcontainer">
    
      <div class="dropdown"  id="1" >Encoding
        <div class="dropdown-content" id="enc">
          <a class="nav_item" onclick="openpage('base64')" >Base64</a>
          <a class="nav_item" onclick="openpage('1')" >Hex</a>
          <a class="nav_item" onclick="openpage('B64')">CRC32</a>
        </div>
       
      </div> 
        
        <div class="dropdown" id="2">Programing
          <div class="dropdown-content" id="prog">
            <a class="nav_item"></a>
            <a class="nav_item"></a>
            <a class="nav_item"></a>
          </div>
        </div>
        <div class="dropdown"id="3" >Hacking
    
          <div class="dropdown-content" id="hack">
            <a class="nav_item"></a>
            <a class="nav_item"></a>
            <a class="nav_item"></a>
          </div>

        
        
        </div>
        <div class="nav_category"></div>
        
          </div>
  </div>

    
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>

<script src="/res/javascript/Effects.js"></script>
<script src="/res/javascript/Explorer.js"></script>
