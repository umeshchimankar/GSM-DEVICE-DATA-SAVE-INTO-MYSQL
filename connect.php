<?php

function Connection()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "ttn_demo_db";


    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseConnection($conn)
 {
    $conn -> close();
 }

 function SelectDB($conn,$db){
    mysqli_select_db($conn, $db);

    // Return name of current default database
    if ($result = mysqli_query($conn, "SELECT DATABASE()")) {
      $row = mysqli_fetch_row($result);
      echo "Default database is " . $row[0]." hence Selection of DB is Successful";
      mysqli_free_result($result);
    }
    else {
        echo "Database Dosen't Exist...";
        die("Database Selection Failed: %s\n". $conn -> error);
    }
    
 }
   
?>