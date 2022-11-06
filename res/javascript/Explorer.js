// prevent the "Confirm Form Resubmission" dialog
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}


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




// loading selected page from the SideBar
function loadpage(id){
  let pageviwer = document.getElementById('pageviwer') ;
  switch (id){
    case '1':
      pageviwer.src="Encoding/txt_enc.php";
     
    break;
   case '2':
    pageviwer.src="Encoding/hash_gen.php";
    break;
    case '3':
      pageviwer.src="Encoding/wrld_hash.php";
    break;
    
  }

}
 