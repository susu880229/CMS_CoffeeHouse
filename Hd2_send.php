
<?php
if($_POST)
{
	
    $servername = "ec2-52-201-212-193.compute-1.amazonaws.com";
    $username = "s2016a_user28";
    $password = "s2016a_user28";
    $dbname = "s2016a_user28";
    $headerT= $_POST["header"];
    $subheaderT = $_POST["subheader"];
    $nav5T = $_POST["nav5"];
    $nav_c = $_POST["nav_color"];
    $header_f = $_POST["header_font"];
    $header_s = $_POST["header_size"];
    $header_p = $_POST["header_position"];
    $header_c = $_POST["header_color"];
    
    $subheadr_f = $_POST["subheader_font"];
    $subheadr_s = $_POST["subheader_size"];
    $subheadr_c = $_POST["subheader_color"];
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
    //update header part
    $sql = "Update hd2
            Set text = '$headerT', font = '$header_f', 
            size = '$header_s', color = '$header_c', position = '$header_p'
            where name = 'header'";
    mysqli_query($conn, $sql);
    
    //update subheader part
    $sql = "Update hd2 
            Set text = '$subheaderT', font = '$subheadr_f',
            size = '$subheadr_s', color = '$subheadr_c'
            where name = 'subheader'";
    mysqli_query($conn, $sql);
    
    
    
    //update navigation part
    $sql = "Update hd2 Set text = '$nav5T' where name = 'nav5'";
    mysqli_query($conn, $sql);
    $sql = "Update hd2 set back_color = '$nav_c' where name = 'nav'";
    mysqli_query($conn, $sql);  
    mysqli_close($conn);
    echo "Save successfully!";
}
?>  
