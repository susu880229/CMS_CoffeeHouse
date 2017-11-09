
<?php

$dir = 'Hd1Upload';

if(isset($_POST['addNew']))
	{
		$f_name = $_FILES['uploadfile']['name'];
		$directory = 'Hd1Upload/';
		$u_File = $directory.$f_name;
		if(!move_uploaded_file($_FILES['uploadfile']['tmp_name'],$u_File))
		{
			echo "Failed to upload";
		}
		
	}

if(isset($_POST["DeleteImage"]))
{
	$deleteName=$_POST["delete"];
	if (!unlink($deleteName))
  	{
  	 print"Failed to delete";
  	}

}

	
if ($opendir=opendir($dir))
	{
		while(($file=readdir($opendir))!== FALSE)
			{
				
				if ($file!="."&&$file!="..")
				{
					
					print "<img id='$dir/$file' onclick=\"selectPhoto('$dir/$file')\" src='$dir/$file' 
					width='300px' height='300px' />"." ";
					
				}
				
			}
	}
	
?>
<html>
<br/><br/><br/>
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Please upload your new photo:
 <input type="file" name="uploadfile" /><br/>
 <button type="submit" name="addNew">Save New photo</button><br/><br/>
  <input type="hidden" id="deleteName" name="delete" /> 
   Please choose the photo to delete<br>
 <button type="sumbit" name="DeleteImage" >Delete Image</button><br/>
 
</form>

<form method="post" action="Hd1.php">	
    <input type="hidden" id="demo" name="display"   /> 
    choose the photo to set image<br>
	<button type="submit"  name="SetImage" >Set profile photo</button><br/><br/>
	<input type="submit" formnovalidate name="cancel" value="Go back to previous page" /><br/>
	
</form>

<script>
    function selectPhoto(file) {
    	var images = document.getElementsByTagName("img");
		for (var i = 0; i < images.length; i++) {
		    images[i].style.border = "none";
			}
    document.getElementById(file).style.border='18px solid #FFFF00'
	document.getElementById("demo").value =file;
	document.getElementById("deleteName").value =file;
}

</script>
</html>