// prevent the "Confirm Form Resubmission" dialog
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

const pageloader = document.getElementById("pageloader");
const content = $(".content");
const search_area = $(".search_container");

const dropdown = $(".dropdown");
const dropdowncontent = $(".dropdown-content");
const buttonPressed = (e) => {
  // Get ID of Clicked Element
  showdropdown(e.target.id);
};
for (let button of dropdown) {
  button.addEventListener("click", buttonPressed);
}
var Oneclick = true;
//legacy navbar
function showdropdown(clicked) {
  switch (clicked) {
    case "1":
      if (Oneclick) {
        $("#enc").css("display", "block");
        Oneclick = false;
      } else {
        $("#enc").css("display", "none");
        Oneclick = true;
      }

      $("#prog").css("display", "none");
      $("#hack").css("display", "none");
      break;
    case "2":
      if (Oneclick) {
        $("#prog").css("display", "block");
        Oneclick = false;
      } else {
        $("#prog").css("display", "none");
        Oneclick = true;
      }
      $("#enc").css("display", "none");

      $("#hack").css("display", "none");
      break;
    case "3":
      if (Oneclick) {
        $("#hack").css("display", "block");
        Oneclick = false;
      } else {
        $("#hack").css("display", "none");
        Oneclick = true;
      }

      $("#enc").css("display", "none");
      $("#prog").css("display", "none");
      break;
  }
}
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
