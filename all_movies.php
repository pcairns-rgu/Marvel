<?php

include(“connect.php”);

echo "<p>Hello ".$_GET['select']."</p>";

// create a SQL query as a string
$sql_query = "SELECT title FROM marvelmovies ";

// execute the SQL query
//$result = $db->query($sql_query);
$result = mysqli_query($db, $sql);
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
//while($row = $result->fetch_array()){
// process the $row

//$row = mysql_fetch_array($result,
  //  MYSQLI_ASSOC);

if ($result -> num_rows>0) {
    while ($row = $result->fetch_array()) {
        // print out fields from row of data
        echo "<p> Title: " . $row["title"] . "</p>";
    }}
    else {

        echo "0 results";
    }

?>