
const pageloader= document.getElementById('pageloader');
const content = $('.content');
const search_area = $('.search_container');

const dropdown = $('.dropdown');
const dropdowncontent = $('.dropdown-content');
const buttonPressed = e => {
   
     // Get ID of Clicked Element
     showdropdown(e.target.id);
  }
  for (let button of dropdown) {
    button.addEventListener("click", buttonPressed);
  }
var Oneclick = true;

function showdropdown(clicked){
   


switch(clicked){
    case '1':
        if(Oneclick){
            $("#enc").css('display','block');
            Oneclick=false;
        } else{
            $("#enc").css('display','none');
            Oneclick=true;
        }
        
        $("#prog").css('display','none');
        $("#hack").css('display','none');
    break;
    case '2':
        if(Oneclick){
            $("#prog").css('display','block');
            Oneclick=false;
        } else{
            $("#prog").css('display','none');
            Oneclick=true;
        }
        $("#enc").css('display','none');
      
        $("#hack").css('display','none');
    break;
    case '3':
        if(Oneclick){
            $("#hack").css('display','block');
            Oneclick=false;
        } else{
            $("#hack").css('display','none');
            Oneclick=true;
        }
       
        $("#enc").css('display','none');
        $("#prog").css('display','none');
    break;
}


}
function openpage(page){
    oneclick = false
    $("#enc").css('display','none');
    $("#prog").css('display','none');
    $("#hack").css('display','none');
    if(page=='home'){
        //Go back to home page
        search_area.show();
        $('#pageloader').hide();
        content.css('grid-template-rows','1fr 1fr')
    }
    else{

        search_area.hide();
        $('#pageloader').show();
        pageloader.src='res/pages/'+page+'.html'
        content.css('grid-template-rows','1fr')
    
    }
   
}