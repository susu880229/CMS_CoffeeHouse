<?php
    //set it back to css file
    $servername = "ec2-52-201-212-193.compute-1.amazonaws.com";
    $username = "s2016a_user28";
    $password = "s2016a_user28";
    $dbname = "s2016a_user28";
    
    
    //connect to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //////////////////////////////////////header part////////////////////////////////////////////////////
    
    //get the header font
    $sql = "SELECT font FROM hd2 where name = 'header'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$header_f = $row["font"] ;
        }
    } 
    //get the header size
    $sql = "SELECT size FROM hd2 where name = 'header'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$header_s = $row["size"] ;
        }
    } 
    //get the header color
    $sql = "SELECT color FROM hd2 where name = 'header'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$header_c = $row["color"] ;
        }
    }
    //get the header position
    $sql = "SELECT position FROM hd2 where name = 'header'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$header_p = $row["position"] ;
        }
    } 
    
    ///////////////////////////////////////subheader part////////////////////////////////////////////
    
    //get the subheader font
    $sql = "SELECT font FROM hd2 where name = 'subheader'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$subheader_f = $row["font"] ;
        }
    } 
    //get the subheader size
    $sql = "SELECT size FROM hd2 where name = 'subheader'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$subheader_s = $row["size"] ;
        }
    } 
    //get the subheader color
    $sql = "SELECT color FROM hd2 where name = 'subheader'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$subheader_c = $row["color"] ;
        }
    }
    
    
    ///////////////////////////////////////////navi_color///////////////////////////////////////////
    
    //get the navigation background_color
    $sql = "SELECT back_color FROM hd2 where name = 'nav'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		
    		$nav_c = $row["back_color"] ;
        }
    }
    
     
     mysqli_close($conn);
     
?>

html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}


body{
	
	background-color:#f2f2f2;
	position: relative;
	
	
	
}
#header{
	text-align: <?php echo $header_p ?>;
	width:100%;
	font-family: <?php echo $header_f ?>;
	font-size: <?php echo $header_s ?>;
	color:<?php echo $header_c ?>;
	margin-top: 25px;
}

#subheader{
	color: <?php echo $subheader_c ?>;
	font-size: <?php echo $subheader_s ?>;
	font-family: <?php echo $subheader_f ?>;
	width: 100%
}

#content{
	width: 70%	
}
#uploadimage {
	
	width: 100%;
	height: 60%;
	
	
}

#navi{
	
        width:100%;
        background: <?php echo $nav_c ?>;
        padding-left:200px ;
        
        
        
}

#nav1, #nav2, #nav3, #nav4, #nav5{
	
	font-size: 25px;
	margin-right: 30px;
	margin-left: 60px
}

#footer{
	width: 100%;
	padding-left: 350px;
	padding-top: 100px;
	background:#e2e2e4;
	height: 20%
	
}


td{
	color:#7b7b7b;
	margin-top: 30px;
        margin-right: 30px
	
}

a{
	text-decoration: none;
	color:#0d0d0b;
}

#loginInStyle{
	float:right;
	font-size:20px;
	padding-right:20px;
}