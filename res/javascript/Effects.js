const pageviewr =$('.Pageviwer');
const Navbar = $('.navcontrainer');

const dropdown = $('.dropdown');
const dropdowncontent = $('.dropdown-content');
const ShowDrop=false;
const search_titel = $('.Search_titel');

const iframe =$('iframe');
//#region  Dropdown
function showdropdown(){
  
    dropdowncontent.toggleClass(".showDropdown");
}


window.onclick = function(event) {
    if (!event.target.matches('.dropdown')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('showDropdown')) {
          openDropdown.classList.remove('showDropdown');
        }
      }
    }
  }

//#endregion
search_titel.animate({
  left: '250px',
  opacity: '0.5',
 
});

iframe.hide();






