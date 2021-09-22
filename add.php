<?php

include("connect.php");
$link=Connection();


if(isset($_POST['nodeID']) && isset($_POST['SensorID']) && isset($_POST['paraID']) && isset($_POST['paravalue']) && isset($_POST['timestamp'])){
$nodeID = $_POST['nodeID'];
$SensorID = $_POST['SensorID'];
$paraID = $_POST['paraID'];
$paravalue = $_POST['paravalue'];
$timestamp = $_POST['timestamp'];

$query =  "INSERT INTO pollution_monitor(nodeiD,SensorID,paraID,paravalue,timestamp) VALUES('$nodeID', '$SensorID','$paraID','$paravalue','$timestamp')";

$execute = mysqli_query($link,$query);

echo '<script>alert("Sensor Data Successfully Saved into Database")</script>';

mysql_close($link);
}

header("location: index.php");


?>