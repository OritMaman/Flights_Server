<?php
    
    //func delete
    function modol_delete($numberFlight){
        //connect to DB
        // Create connection
    $conn = new mysqli('localhost', 'root', '', 'flights');
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM properties WHERE numberFlight = '" . $numberFlight . "'";
    $conn->query($sql);
}