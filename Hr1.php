<html>
<head>
<title>HR page</title>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<link rel ="stylesheet" href = "hr1_style1.css" type = "text/css" />
<script type = "text/javascript" src = "hr1_java.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>tinymce.init({ selector:"#display",width:"100%" });</script>
<script>
function readTextFile(){
	
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    tinyMCE.get('display').setContent(xhttp.responseText);
    	}
  	};
  	xhttp.open("GET", "tinyMCE_Data/hr1.html", true);
  	xhttp.send();

}
function ajaxWayWrite() {
	//get activeEditor content
	    var message = tinyMCE.get('display').getContent();
	 
    // syntax: $.post(URL,data,callback);
       $.post("Tiny.php",
            {
                TheFile: "hr1.html",
                TheMessage: message
				//the message here is the tinyMCE active editor content
            });
   }
function ajaxWaySend() {
       
               // syntax: $.post(URL,data,callback);
        $.post("hr1_send.php",
            {
                header: $("#header").val(),
                subheader: $("#subheader").val(),
                nav1: $("#nav1").val(),
                nav_color: $("#navi_color").val(),
                header_font: $("#header_font").val(),
                header_size: $("#header_size").val(),
                header_color: $("#header_color").val(),
                header_position: $("#header_position").val(),
                subheader_font: $("#subheader_font").val(),
                subheader_size: $("#subheader_size").val(),
                subheader_color: $("#subheader_color").val()
            }
            ,function(dataFromtheServer) {
            $("#comfirmMes").html(dataFromtheServer);  
            });
             
}
                     
</script>
<?php

    $servername = "ec2-52-201-212-193.compute-1.amazonaws.com";
    $username = "s2016a_user28";
    $password = "s2016a_user28";
    $dbname = "s2016a_user28";
    
    //connect to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //get the header text
    $sql = "SELECT text FROM Text where name = 'header'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$header = $row["text"] ;
        }
    } 
    //get the subheader text
    $sql = "SELECT text FROM Text where name = 'subheader'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$subheader = $row["text"] ;
        }
    } 
    
    //get the nav1 text
    $sql = "SELECT text FROM Text where name = 'nav1'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$nav1T = $row["text"] ;
        }
    } 
    //GET THE NAV2 TEXT
    $sql = "SELECT text FROM HR2 where name = 'nav2'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$nav2T = $row["text"] ;
        }
    } 
  	//get the nav3 text
  	$sql = "SELECT text FROM sales where name = 'nav3'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$nav3T = $row["text"] ;
        }
    } 
	//get the nav4 text
	$sql = "SELECT text FROM hd1 where name = 'nav4'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$nav4T = $row["text"] ;
        }
    } 
    //get the nav5 text
    $sql = "SELECT text FROM hd2 where name = 'nav5'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$nav5T = $row["text"] ;
        }
    } 
    mysqli_close($conn);

?>
</head>
<body onload="readTextFile()">
<form>
        <!-- header edit part -->
        
        <select id = "header_font" onchange="changeFont(this.value,'header')">
            <optgroup label="font">
            <option value = "Times New Roman" selected="true" >Times New Roman</option>
        	<option value = "Georgia" >Georgia</option>
        	<option value = "Arial" >Arial</option>
        	<option value = "Verdana" > Verdana </option>
            </optgroup>
        	
        </select>&nbsp&nbsp
        <select id = "header_size" onchange="changeSize(this.value,'header')">
        	<optgroup label="size">
            <option value = "40px" selected="true" >40</option>
        	<option value = "50px" >50</option>
        	<option value = "60px" >60</option>
        	<option value = "65px" >65</option>
            </optgroup>
        	
        </select>&nbsp&nbsp
        
        <select id = "header_color" onchange="changeColor(this.value,'header')">
            <optgroup label="color">
            <option value = "white"  >white</option>
        	<option value = "black" selected="true" >black</option>
        	<option value = "blue" >blue</option>
        	<option value = "yellow" >yellow</option>
            </optgroup>
        	
        </select>&nbsp&nbsp
        
        <select id = "header_position" onchange="changePosition(this.value,'header')">
            <optgroup label="text-align">
            <option value = "center" selected="true" >center</option>
        	<option value = "left" >left</option>
        	<option value = "right">right</option>
        	</optgroup>
        	
        </select>&nbsp&nbsp
        <br>
         <textarea name = "header" id = "header" rows="1" cols = "80"><?php echo $header ?></textarea><br><br>
        <br><br>
        
        <!-- navigation edit part -->
        <div id = "navi">
        <input type = "text" id = "nav1" value="<?php echo $nav1T ?>" size = "20"/>&nbsp&nbsp
        <label id = "nav2" ><a href = "Hr2.php" style="color:#163576;"><?php echo $nav2T ?></a></label>&nbsp&nbsp
        <label id = "nav3"><?php echo $nav3T ?></label>&nbsp&nbsp
        <label id = "nav4"><?php echo $nav4T ?></label>&nbsp&nbsp
        <label id = "nav5"><?php echo $nav5T ?></label>&nbsp&nbsp
        
        
        <select id = "navi_color" onchange="changeColor1(this.value, 'navi')">
            <optgroup label = "back-color">
        	<option value = "white" selected="true" >white</option>
        	<option value = "#8accdd" >blue</option>
        	<option value = "gray" >gray</option>
        	<option value = "transparent" > transparent </option>
        	</optgroup>
        </select>
        </div>      
        <br>
<?php

//set profile photo part 
if(isset($_POST['SetImage']))
	{
		$display = $_POST['display'];
		 
		//copy the select image to another image file
		$newfile = 'setHr1Photo/image.jpg';
		if (!copy($display, $newfile)) {
			echo "failed to copy $display";
		}
		
		
		$dir = "setHr1Photo";
		if ($opendir=opendir($dir))
		{
		while(($file=readdir($opendir))!== FALSE)
			{
				
				if ($file!="."&&$file!="..")
				{
					
					print "<div><img id='uploadimage' src='$dir/$file'  alt='uploadimage'>
					</div>"."<a style='color:#163576;'href='Hr1Photo.php'>Change Profile Photo</a>
					<br>"."<div style='color:red;'>If your profile photo didn't update, you should refresh your current web page</div>";
				
					
				}
				
			}
		}

	}

else
{

?>

<div><img id="uploadimage"  src="setHr1Photo/image.jpg"  alt="uploadImage"></div>
<a href="Hr1Photo.php" style="color:#163576;">Change profile photo</a><br>


<?php
	}
?>

<br><br>
<!--subheader edit part-->
        <select id = "subheader_font" onchange="changeFont(this.value, 'subheader')">
            <optgroup label="font">
            <option value = "Times New Roman" selected="true" >Times New Roman</option>
        	<option value = "Georgia" >Georgia</option>
        	<option value = "Arial" >Arial</option>
        	<option value = "Verdana" > Verdana </option>
            </optgroup>
        	
        </select>&nbsp&nbsp
        <select id = "subheader_size" onchange="changeSize(this.value,'subheader')">
            <optgroup label="size">
            <option value = "30px" >30</option>
            <option value = "40px" selected="true" >40</option>
        	<option value = "45px" >45</option>
        	<option value = "50px" >50</option>
                </optgroup>
        	
        </select>&nbsp&nbsp
        
        <select id = "subheader_color" onchange="changeColor(this.value, 'subheader')">
            <optgroup label="color">
            <option value = "white"  >white</option>
        	<option value = "black" selected="true" >black</option>
        	<option value = "blue" >blue</option>
        	<option value = "yellow" >yellow</option>
            </optgroup>
        	
        </select><br><br>
        <textarea name = "subheader" id = "subheader" rows="1" cols = "150"><?php echo $subheader ?></textarea><br><br> 
</form>       
<textarea id="display" rows="5" cols="10" ></textarea>
<br><br>
<button onclick="ajaxWaySend();ajaxWayWrite();">Save all</button>
<button><a href = "hr1Update.php">Publish the website</a></button><br><br>
<div id="comfirmMes"></div>
 <p><a href="auth.php?logout" style="color:#163576;">Log out</a></p>
<div id = "footer">
	<table>     
		<tr><td>Copyright &#169;2016 Douglas College CSIS3380 Group Members:</td><td>Qijun Deng, Shu, San, Ling Su</td></tr>
	</table>	
</div>
</body>
</html>