<?php
define('DB_SERVER', 'CSDM-WEBDEV');
define('DB_USERNAME', '1614072');
define('DB_PASSWORD', '1614072');
define('DB_DATABASE', 'db1614072_marvel');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_close($db);
?>