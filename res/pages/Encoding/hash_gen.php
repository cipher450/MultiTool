<?php
include_once("/var/www/html/MultiTool/res/pages/res.php");
$inputtext;
$md5;
$sha1;
$sha256;
$sha512;
$ripemd128;
$crc32;

if(isset($_POST['submit1'])){
  try{
    $inputtext=$_POST['input_txt'];
    $md5=hash('md5',$inputtext);
    $sha1=hash('sha1',$inputtext);
    $sha256=hash('sha256',$inputtext);
    $sha512=hash('sha512',$inputtext);
    $ripemd128=hash('ripemd128',$inputtext);
    $crc32=hash('crc32',$inputtext);
    
  }
  catch(Exception $ex){
    echo($ex);
  }
    
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HashGen</title>
</head>

<body>


    <form action="" method="POST" class="form_hash">
        
    <textarea name="input_txt" id="input_txt" cols="40" rows="20"
        placeholder="Input area"><?php echo ($inputtext); ?></textarea>
        <div class="">  
            <button class="_btn"  type="submit" name="submit1" >Generate</button>
            <button class="_btn"  type="submit" name="submit_copy" >Copy</button>
            <button class="_btn"  type="submit" name="submit_save" >Sava as </button>
            <select name="" id="">
                <option value="Html">Html</option>
                <option value="Html">Text</option>
            </select>

        </div>
       
       
        <table class="GenHash_table">
            <tr >
            <th > Your string
            <td><?= isset($_POST['submit1'])==true ? $inputtext : '' ?></td>
            </th>
            </tr>
            <tr>
            <th> MD5
            <td><?= isset($_POST['submit1'])==true ? $md5 : '' ?></td>
            </th>
            </tr>
           <tr>
           <th> SHA1
            <td><?= isset($_POST['submit1'])==true ? $sha1 : '' ?> </td>
            </th>
           </tr>
           <tr>
           <th> sha256
            <td><?= isset($_POST['submit1'])==true ? $sha256 : '' ?></td>
            </th>
           </tr> 
           <th> sha512
            <td><?= isset($_POST['submit1'])==true ? $sha512 : '' ?></td>
            </th>
           </tr>
           <th> ripemd128
            <td><?= isset($_POST['submit1'])==true ? $ripemd128 : '' ?></td>
            </th>
           </tr>
           <th> crc32
            <td><?= isset($_POST['submit1'])==true ? $crc32 : '' ?></td>
            </th>
           </tr>

        </table>

    </form>
   <h2>How Do Hashes Work?</h2> 
Hashing is basically a one-way cryptographic function. Because hashes are irreversible, knowing the output of a hashing method does not allow you to recreate the contents of a file. It does, however, allow you to assess whether two files are similar without knowing their contents.

As a result, the concept of hashes is based on the assumption that the result is unique. We’d have a “collision” if two separate files produced the same digest, and we’d be unable to utilize the hash as a trustworthy file identification.

Taking into consideration that there is no limit to the number of key/value pairs, a hash function can be used to map the keys to the size of the table, thus making the hash value become the index for a specific element.
</body>

</html>