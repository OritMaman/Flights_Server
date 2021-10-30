<?php
    
    //func delete
    function modol_delete($numberFlight,$destination, $price, $flightDate, $numOfCards){
        //connect to DB
        // Create connection
    $conn = new mysqli('localhost', 'root', '', 'flights');
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT `numberFlight`, `destination`, `price`, `flightDate`, `numOfCards` FROM `properties` WHERE destination='" . $destination . "' AND price ='" . $price . "' AND flightDate ='" . $flightDate . "' AND numOfCards = '" . $numOfCards . "'";
    $conn->query($sql);
}


