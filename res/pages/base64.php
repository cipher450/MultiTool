
<?php
include_once("navbar.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
    
    
</head>
<body>
   <div class="container_div">
      <h1 class="_titel">Text Encoding</h1>
    <div class="centered_div">
     
      <div class="txtarea">
        
         
            <textarea   name="input_txt" id="input_txt" cols="40" rows="10" placeholder="Input area"></textarea>
      </div>
      <div class="btns">
         <select name="ee" id="">
            <option value="Base64">Base64</option>
            <option value="Hex">Hex</option>
          </select>
          <br>
         <button class="btn">Encode</button>
         <button class="btn">Decode</button>
         <button class="btn">Open File</button> 
         <button class="btn">Print ?!</button> 
        
      </div>
 
      <div class="txtarea">
         <textarea name="output_txt" id="output_txt" cols="40" rows="10" placeholder="Output area" readonly></textarea>
      </div>
   
     
      
     </div>
       
     
      
      
    </div>
   </div>
   
  

</body>
<script src="/res/javascript/Tools.js"></script>
</html>