



const ShowDrop=false;
const search_titel = $('.Search_titel');


//#region  Dropdown
// function showdropdown(){
  
//     dropdowncontent.toggleClass(".showDropdown");
// }


// window.onclick = function(event) {
//     if (!event.target.matches('.dropdown')) {
//       var dropdowns = document.getElementsByClassName("dropdown-content");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('showDropdown')) {
//           openDropdown.classList.remove('showDropdown');
//         }
//       }
//     }
//   }

//#endregion
search_titel.animate({
  left: '250px',
  opacity: '0.5',
 
});

let sidebar = $('.sidebar');
let navlist =$('.navlist');
let container_div =$('.container_div');

function sideshow(){
  console.log('show')
  sidebar.addClass('sidebarshow')
  navlist.show();
  container_div.css("grid-template-columns","0.2fr 1fr");
}
function sidehide(){
  console.log('show')
  sidebar.removeClass('sidebarshow')
  navlist.hide();
  container_div.css("grid-template-columns","0fr 1fr");

}
