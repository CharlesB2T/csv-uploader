<?php
function getdb(){
$servername = "shareddb-g.hosting.stackcp.net";
$username = "3731da7b";
$password = "tg9svw9k8n";
$db = "travelexpenses-3731da7b";
try {
    $conn = mysqli_connect($servername, $username, $password, $db);
    echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>
