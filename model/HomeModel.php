<?php
// HIER ALLES VOOR CUSTOMERS

function createCustomer($data){
    try {
        $conn = openDatabaseConnection();
        $name = $data['name'];
		$adress = $data['adress'];
		$phone = $data['phone'];
        $stmt = $conn->prepare("INSERT INTO customers (name, adress, phone) VALUES (:name, :adress, :phone)");
        $stmt->bindParam(":name", $name);
		$stmt->bindParam(":adress", $adress);
		$stmt->bindParam(":phone", $phone);

	    $stmt->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }

 function updateCustomer($data){
    try {
        $conn = openDatabaseConnection();
        $name = $data['name'];
		$adress = $data['adress'];
        $phone = $data['phone'];
        $id = $data['id'];
        $stmt = $conn->prepare("UPDATE customers SET name = :name, adress = :adress, phone = :phone WHERE id = :id");
        $stmt->bindParam(":name", $name);
		$stmt->bindParam(":adress", $adress);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":id", $id);

	    $stmt->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }
 

 function getAllCustomers(){
	 try {
		 $conn=openDatabaseConnection();
		 $stmt = $conn->prepare("SELECT * FROM customers"); 

		 $stmt->execute();

		 $result = $stmt->fetchAll();
  
	 }

	 catch(PDOException $e){

		 echo "Connection failed: " . $e->getMessage();
	 }
	 $conn = null;
	 return $result;
  }

  function getCustomer($id){
    try {
        $conn=openDatabaseConnection();

        $stmt = $conn->prepare("SELECT * FROM customers WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
 
    return $result;
 }

  function deleteCustomer($id){
    try {

        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("DELETE FROM customers WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }

 //VANAF HIER ALLES VOOR HORSES

 function getAllHorses() 
{
	$conn = openDatabaseConnection();
	$stmt = $conn->prepare("SELECT * FROM horses");
	$stmt->execute();

	$conn = null;

	return $stmt->fetchAll();
}

function getHorse($id){
    try {
        $conn=openDatabaseConnection();

        $stmt = $conn->prepare("SELECT * FROM horses WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
 
    return $result;
 }

function createHorse($data){
    try {
        $conn = openDatabaseConnection();
        $name = $data['name'];
        $race = $data['race'];
		$age = $data['age'];
		$height = $data['height'];
        $stmt = $conn->prepare("INSERT INTO horses (name, race, age, height) VALUES (:name, :race, :age, :height)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":race", $race);
		$stmt->bindParam(":age", $age);
		$stmt->bindParam(":height", $height);

	    $stmt->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }
 function updateHorseById($data){
    try {
        $conn = openDatabaseConnection();
        $name = $data['name'];
        $race = $data['race'];
		$age = $data['age'];
		$height = $data['height'];
        $id = $data['id'];
        $stmt = $conn->prepare("UPDATE customers SET name = :name, race = :race, age = :age, height = :height WHERE id = :id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":race", $race);
		$stmt->bindParam(":age", $age);
		$stmt->bindParam(":height", $height);
        $stmt->bindParam(":id", $id);

	    $stmt->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }

 function deleteHorseById($id){
    try {

        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("DELETE FROM horses WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }

// VANAF HIER ALLES VOOR RESERVERINGEN

 function getAllReservations($id){
    try {

        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SELECT horse_id, time FROM reservations WHERE customer_id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
  
    }

    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
 }

 function getReservation($id){
    try {

        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM reservations WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
  
    }

    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
 }

 function createReser($data){
    try {
        $conn = openDatabaseConnection();
        $customer_id = $data['customer_id'];
        $horse_id = $data['horse_id'];
        $time = $data['time'];
        $stmt = $conn->prepare("INSERT INTO reservations (customer_id, horse_id, time) VALUES (:customer_id, :horse_id, :time)");
        $stmt->bindParam(":customer_id", $customer_id);
        $stmt->bindParam(":horse_id", $horse_id);
        $stmt->bindParam(":time", $time);

	    $stmt->execute();
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
 }