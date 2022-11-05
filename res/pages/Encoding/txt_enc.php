<?php
include_once("/var/www/html/MultiTool/res/pages/res.php");
$inputtext;
$outputtext;
if (isset($_POST['submit1'])) {
   $_SESSION["ENCODING_"] = $_POST['Encoding'];
   if (!empty($_POST['Encoding'])) {
      //encode

      $selected = $_POST['Encoding'];
      $inputtext = $_POST['input_txt'];
      try {
         $outputtext = Encode($selected, $inputtext);
      } catch (Exception $ex) {
         $outputtext = 'Error : ' + $ex;
      }
   }
} elseif (isset($_POST['submit2'])) {
   $_SESSION["ENCODING_"] = $_POST['Encoding'];
   //Decode
   $selected = $_POST['Encoding'];
   $outputtext = $_POST['output_txt'];
   try {
      $inputtext = Decode($selected, $outputtext);
   } catch (Exception $ex) {
      $inputtext = 'Error : ' + $ex;
   }
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text encoding</title>
</head>
<body>
<form action="" method="post">

<div class="txtarea">
    <textarea name="input_txt" id="input_txt" cols="40" rows="20"
        placeholder="Input area"><?php echo ($inputtext); ?></textarea>

</div>

<div class="btns">
    <select name="Encoding" id="combobox">
        <option value="1" <?= $_SESSION["ENCODING_"] == '1' ? ' selected="selected"' : ''; ?>>Base64
        </option>
        <option value="2" <?= $_SESSION["ENCODING_"] == '2' ? ' selected="selected"' : ''; ?>>Hex
        </option>
    </select>
    <button class="btn" type="submit" name="submit1">Encode</button>
    <button class="btn" type="submit" name="submit2">Decode</button>
    <button class="btn">Open File</button>
    <button class="btn">Print ?!</button>

</div>

<div class="txtarea">
    <textarea name="output_txt" id="output_txt" cols="40" rows="20"
        placeholder="Output area"><?php print($outputtext); ?></textarea>
</div>

</form>
<br>
<h1>What is Base64 ?</h1>
<p>
In computer programming, Base64 is a group of binary-to-text encoding schemes that represent binary data in sequences of 24 bits that can be represented by four 6-bit Base64 digits. Common to all binary-to-text encoding schemes, Base64 is designed to carry data stored in binary formats across channels that only reliably support text content. Base64 is particularly prevalent on the World Wide Web where one of its uses is the ability to embed image files or other binary assets inside textual assets such as HTML and CSS files. Base64 is also widely used for sending e-mail attachments. This is required because SMTP – in its original form – was designed to transport 7-bit ASCII characters only. This encoding causes an overhead of 33–37%.
<a href="https://en.wikipedia.org/wiki/Base64">Wikipedia</a> 
</p>
<h2>Where to use it ?</h2>
<h1>What is Base64 ?</h1>
<p>
In computer programming, Base64 is a group of binary-to-text encoding schemes that represent binary data in sequences of 24 bits that can be represented by four 6-bit Base64 digits. Common to all binary-to-text encoding schemes, Base64 is designed to carry data stored in binary formats across channels that only reliably support text content. Base64 is particularly prevalent on the World Wide Web where one of its uses is the ability to embed image files or other binary assets inside textual assets such as HTML and CSS files. Base64 is also widely used for sending e-mail attachments. This is required because SMTP – in its original form – was designed to transport 7-bit ASCII characters only. This encoding causes an overhead of 33–37%.
<a href="https://en.wikipedia.org/wiki/Base64">Wikipedia</a> 
</p>
<h2>Where to use it ?</h2>
</body>
<script src="/node_modules/iframe-resizer/js/iframeResizer.contentWindow.min.js"></script>
</html>