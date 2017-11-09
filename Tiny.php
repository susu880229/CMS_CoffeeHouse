<?php
   $FILENAME = "tinyMCE_Data/" . $_POST["TheFile"] ;
   $CONTENTS = $_POST["TheMessage"];
   // 'a' means append , 'w' means write or overwrite if data already exists
   // creates the file in a subfolder, tempFolder. 
   // You need to create the subfolder with a write permission
   $fileHandler = fopen( $FILENAME, 'w') or die("can't open file");

   fwrite($fileHandler, $CONTENTS);
   fclose($fileHandler);
?>

