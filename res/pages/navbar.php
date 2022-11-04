<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="/res/css/root.css">
<link rel="stylesheet" type="text/css" href="/res/css/main.css">
<link rel="stylesheet" type="text/css" href="/res/css/Controls.css">

<link rel="stylesheet" type="text/css" href="/res/css/PageStyling.css">




<nav class="navbar">
<div class="logocontainer">
      <div class="nav_logo" onclick="openpage('home')">
        <img src="https://cdn-icons-png.flaticon.com/512/1505/1505516.png" alt="">
      </div>
      <h2 class="nav_titel" onclick="openpage('home')">MultiTools</h2>

    </div>
    <ul class="nav-list">
      <li class="nav-item"  >
        <a class="nav-link active" href="../../index.php" id="nvItem_1">
          Home
        </a>
      </li> 
      <li class="nav-item" >
        <a class="nav-link " href="/res/pages/base64.php" id="nvItem_2">
          Encoding
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="/res/pages/Programing.php" id="nvItem_3">
          Programing
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#" id="nvItem_4">
          Hacking
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="/res/pages/Calculations.php" id="nvItem_5">
          Calculations
        </a>
      </li>
    </ul>
    <div class="menu-toggle">
      <div class="hamburger">
      </div>
    </div>
</nav>
<script>
    const navbar = document.querySelector(".navbar");
const menuToggle = document.querySelector(".menu-toggle");
menuToggle.addEventListener("click", () => {
  navbar.classList.toggle("open");
});
  </script>
<!-- <div class="header"> -->

  <!-- <div class="Container">
   
    <div class="nav_itemcontainer">

      <div class="dropdown" id="1">Encoding
        <div class="dropdown-content" id="enc">
          <a class="nav_item" onclick="openpage('base64')">Base64</a>
          <a class="nav_item" onclick="openpage('1')">Hex</a>
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
      <div class="dropdown" id="3">Hacking

        <div class="dropdown-content" id="hack">
          <a class="nav_item"></a>
          <a class="nav_item"></a>
          <a class="nav_item"></a>
        </div>



      </div>



    </div>
    <div class="menu-toggle">
      &#9776;
    </div>
  </div> -->

<!-- 
</div> -->
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>

<script src="/res/javascript/Effects.js"></script>
<script src="/res/javascript/Explorer.js"></script>