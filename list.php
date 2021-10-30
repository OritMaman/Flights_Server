<?php

function modol(){
    //connect to DB
    // Create connection
$conn = new mysqli('localhost', 'root', '', 'flights');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    //select item
$sql = "SELECT * FROM properties";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }
  $conn->close();
    return $data;
}
function controller(){
    return modol();
}

function view(){
    $data = controller();
    header('Content-Type: application/json');
    print json_encode($data);
}

view();