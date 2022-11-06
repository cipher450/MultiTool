<?php

include_once("/var/www/html/MultiTool/res/pages/res.php");




  
if(isset($_POST['gen'])){
    echo('test');
   print_r($_FILES["fileToUpload"]);
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordlist Hash</title>
</head>

<body>

    <form action="wrld_hash.php" method="POST" enctype="multipart/form-data">>
        <textarea name="input_txt" id="input_txt" cols="20" rows="30"></textarea>
        <div class="btns">
            <button class="_btn" onclick="openfile()">Open file</button>
            <script>
            function openfile() {
                document.getElementById("fileToUpload").click();
            }
            </script>

        <input type="file" name="fileToUpload" id="fileToUpload">
            <button class="_btn">Save file</button>
            <button class="_btn" type="submit" name="gen">Generate</button>
        </div>
        <textarea name="output_txt" id="output_txt" cols="20" rows="30" readonly></textarea>
    </form>

 



</body>

</html>