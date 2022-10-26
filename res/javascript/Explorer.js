
const pageloader= document.getElementById('pageloader');

const search_area = $('.search_container');
function openpage(page){
    search_area.hide();
   if(page=='B64'){
    $('#pageloader').show();
    pageloader.src='res/pages/page1.html'
   }
}