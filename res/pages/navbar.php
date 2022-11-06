<?php
session_start();
require("res.php");
?>




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
<script>
  // adding the class .activ to the current selected page
  function navbaritem_SetActive() {
  let nvItem_1 = $("#nvItem_1");
  let nvItem_2 = $("#nvItem_2");
  let nvItem_3 = $("#nvItem_3");
  let nvItem_4 = $("#nvItem_4");
  let nvItem_5 = $("#nvItem_5");
  switch (true) {
    case window.location.href.includes("base64.php"):
      nvItem_1.removeClass("active");
      nvItem_3.removeClass("active");
      nvItem_4.removeClass("active");
      nvItem_5.removeClass("active");
      nvItem_2.addClass("active");
      break;
    case window.location.href.includes("index.php"):
      nvItem_1.addClass("active");
      nvItem_2.removeClass("active");
      nvItem_3.removeClass("active");
      nvItem_4.removeClass("active");
      nvItem_5.removeClass("active");
      break;
    case window.location.href.includes("Programing.php"):
      nvItem_1.removeClass("active");
      nvItem_2.removeClass("active");
      nvItem_3.addClass("active");
      nvItem_4.removeClass("active");
      nvItem_5.removeClass("active");
      break; 
       case window.location.href.includes("Calculations.php"):
      nvItem_1.removeClass("active");
      nvItem_2.removeClass("active");
      nvItem_3.removeClass("active");
      nvItem_4.removeClass("active");
      nvItem_5.addClass("active");
      break;
  }
}
navbaritem_SetActive();
</script>