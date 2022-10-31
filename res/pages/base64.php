<?php
require("navbar.php");
// #region
$inputtext;
$outputtext;
if (isset($_POST['submit1'])) {
   $_SESSION["ENCODING_"]=$_POST['Encoding'];
   if (!empty($_POST['Encoding'])) {
      //encode
     
      $selected = $_POST['Encoding'];
      $inputtext = $_POST['input_txt'];
      $outputtext = Encode($selected, $inputtext);
   }
} elseif (isset($_POST['submit2'])) {
   //Decode
   $selected = $_POST['Encoding'];
   $outputtext = $_POST['output_txt'];
   $inputtext = Decode($selected, $outputtext);
}

function Encode($encd_type, $strr)
{

   switch ($encd_type):
      case '1':
         return base64_encode($strr);
         break;
      case '2':
         return bin2hex($strr);
        
         break;

   endswitch;
}
function Decode($encd_type, $strr)
{
   switch ($encd_type):
      case '1':
         return base64_decode($strr);
         break;
      case '2':
         return hex2bin($strr);
         break;
   endswitch;
}
// #endregion
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




         <form action="" method="post">

            <div class="txtarea">
               <textarea name="input_txt" id="input_txt" cols="40" rows="10" placeholder="Input area"><?php echo ($inputtext); ?></textarea>

            </div>

            <div class="btns">
               <select name="Encoding" id="">
                  <option value="1" <?= $_SESSION["ENCODING_"] == '1' ? ' selected="selected"' : '';?>>Base64</option>
                  <option value="2" <?= $_SESSION["ENCODING_"] == '2' ? ' selected="selected"' : '';?> >Hex</option>
               </select>
               <button class="btn" type="submit" name="submit1">Encode</button>
               <button class="btn" type="submit" name="submit2">Decode</button>
               <button class="btn">Open File</button>
               <button class="btn">Print ?!</button>

            </div>

            <div class="txtarea">
               <textarea name="output_txt" id="output_txt" cols="40" rows="10" placeholder="Output area"><?php print($outputtext); ?></textarea>
            </div>

         </form>









      </div>




   </div>
   </div>



</body>
<script src="/res/javascript/Tools.js"></script>

</html>