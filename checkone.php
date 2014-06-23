<?php 
 require_once 'connect.inc'; 
header("Content-Type: text/javascript; charset=utf-8");
    // We don't need action for this tutorial, but in a complex code you need a way to determine Ajax action nature
    //$action = $_POST['action'];
    // Decode JSON object into readable PHP object
    //$formData = json_decode($_POST['formData']);
 
    // Get username
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysql_query("SELECT * FROM siteuser where firstname = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());
$returnArray = array();
 while($row=mysql_fetch_array($query))
{    
header("Location: categories.php");	

}
echo json_encode($returnArray);
    
 
 
?>
