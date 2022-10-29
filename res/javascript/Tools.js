
var input_txt = document.getElementById('input_txt');
var output_txt = document.getElementById('output_txt');


function updateResult() {
    output_txt.textContent = btoa(input_txt.value);
    console.log(input_txt.value)
}

input_txt.addEventListener('keyup', updateResult);