<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "comp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($link, $_REQUEST['name']);

// Attempt insert query execution
$sql = "SELECT netname from computer, computer_software, software 
where ID_Computer=FID_Computer and FID_Software=ID_Software and name='$name'";

$result = mysqli_query($link, $sql);

    while($row = $result->fetch_assoc())
    {
        echo  $row['netname'];

    }
 
// Close connection
mysqli_close($link);
?>