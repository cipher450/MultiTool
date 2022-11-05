
$(document).ready(function(){
    window.onresize = function(event) {
        console.log()
        let hg = $('#pageviwer').height()
        $('.sidebar').height(hg)
    };

})