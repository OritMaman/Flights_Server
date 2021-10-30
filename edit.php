<?php
//func add
function modol_add($destination, $price, $flightDate, $numOfCards){
    //connect to DB
    // Create connection
$conn = new mysqli('localhost', 'root', '', 'flights');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO properties SET destination='" . $destination . "' AND price ='" . $price . "' AND flightDate ='" . $flightDate . "' AND numOfCards = '" . $numOfCards . "'";
$conn->query($sql);

}
//func edit
function modol_edit($id, $destination, $price, $flightDate, $numOfCards){
    //connect to DB
    // Create connection
$conn = new mysqli('localhost', 'root', '', 'flights');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE properties SET destination='" . $destination . "' AND price ='" . $price . "' AND flightDate ='" . $flightDate . "' AND numOfCards = '" . $numOfCards . "' WHERE numberFlight='" . $id ."'";
$conn->query($sql);

}

function controller(){
    $id = isset($_get['id'])? $_get['id'] : 0;
    $destination =  isset($_get['destination'])? $_get['destination'] : 0;
    $price =isset($_get['price'])? $_get['price'] : 0;
    $flightDate = isset($_get['flightDate'])? $_get['flightDate'] : 0;
    $numOfCards = isset($_get['numOfCards'])? $_get['numOfCards'] : 0;
    if($id){    
        modol_edit($id, $destination, $price, $flightDate, $numOfCards);
    }else{
        modol_add($destination, $price, $flightDate, $numOfCards);
    }
}

function view(){
    controller();
}

view();
