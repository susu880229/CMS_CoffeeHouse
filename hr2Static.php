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
    $sql = "SELECT text FROM HR2 where name = 'header'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$header = $row["text"] ;
        }
    } 
    //get the subheader text
    $sql = "SELECT text FROM HR2 where name = 'subheader'";
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
<html>
<head>
<title>Human Resource Page</title>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<style>
	<?php include 'hr2_style2.php';?>
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
	function readTextFile(){
	
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("content").innerHTML=xhttp.responseText;

    	}
  	};
  	xhttp.open("GET", "tinyMCE_Data/hr2.html", true);
  	xhttp.send();
}
</script>
</head>
<body onload="readTextFile()">

        <!-- header part -->
        
        <p id = "header"><?php echo $header ?>
        	<a id="loginInStyle" href="login.html" style="color:#163576;">Log in</a>
        </p>
        
        <!-- navigation part -->
        <div id = "navi">
        <label id = "nav1"><a href = "homepage.php"><?php echo $nav1T ?></a></label>
        <label id = "nav2"><a href = "hr2Static.php"><?php echo $nav2T ?></a></label>
        <label id = "nav3"><a href = "SalesStatic.php"><?php echo $nav3T ?></a></label>
        <label id = "nav4"><a href = "Hd1Static.php"><?php echo $nav4T ?></a></label>
        <label id = "nav5"><a href = "Hd2Static.php"><?php echo $nav5T ?></a></label>
        </div>
        
        <br><br>
        
        <!-- background Image edit -->
        
		<div><img id="uploadimage"  src="setHr2Photo/image.jpg"  alt="uploadImage" width='300px' height='300px'></div>
	
		<!--subheader edit part-->
        <p id = "subheader"><?php echo $subheader ?></p>
        
        <!--paragraph edit part-->
        
<div id="content" ></div>
<div id = "footer">
	<table>    
		<tr><td>Copyright &#169;2016 Douglas College CSIS3380 Group Members:</td><td>Qijun Deng, Shu, San, Ling Su</td></tr>
	</table>
</div>
</body>
</html>



