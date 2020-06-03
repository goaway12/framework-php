<?php

require(ROOT . "model/HomeModel.php");

// HIER ALLES VOOR CUSTOMERS

function customer($id){
    $customer = getCustomer($id);
    render("home/customer", ['customer' => $customer]);
}

function createCust(){
	render("home/createcust", array(
		'customers' => getAllCustomers()
	));
}

function storeCust(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST["name"])) {
            $nameErr = " * Verplicht";
        }
        if (empty($_POST["adress"])) {
            $adressErr = " * Verplicht";
		}
		if (empty($_POST["phone"])) {
            $phoneErr = " * Verplicht";
		}
		

        if (!empty($_POST["name"]) && !empty($_POST["adress"]) && !empty($_POST["phone"])){
            $data = array(
                'name' => $_POST['name'],
				'adress' => $_POST['adress'],
				'phone' => $_POST['phone']
            );
            $valid = true;
        }
    
        if($valid){
            createCustomer($data);
            header('Location: createcust');
            exit;
        }

    }

	$customers = getAllCustomers();
	render("home/createcust",
		['customers' => $customers, 'nameErr' => $nameErr, 'adressErr' => $adressErr, 'phoneErr' => $phoneErr]);
}

function updateCust($id){
    $customer = getCustomer($id);
    render("home/updatecust", ['customer' => $customer]);
}

function editCust(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data = array(
			'name' => $_POST['name'],
            'adress' => $_POST['adress'],
            'phone' => $_POST['phone'],
            'id' => $_POST['id']
        );
        $id = $_POST['id'];

		updateCustomer($data);
		header('Location: customer/'.$_POST['id']);
		exit;
    }

}

function deleteCust($id){

    $customer = getCustomer($id);
    render('home/deletecust', ['customer' => $customer]);
}

function destroyCust($id){
    deleteCustomer($id);
    $customers = getAllCustomers();
    render('home/createcust', ['customers' => $customers]);
}



// VANAF HIER ALLES VOOR HORSES

function index()
{
	render("home/index", array(
		'horses' => getAllHorses()
	));
}

function storeHorse(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST["name"])) {
            $nameErr = " * Verplicht";
        }
        if (empty($_POST["race"])) {
            $raceErr = " * Verplicht";
		}
        if (empty($_POST["age"])) {
            $ageErr = " * Verplicht";
		}
		if (empty($_POST["height"])) {
            $heightErr = " * Verplicht";
		}
		

        if (!empty($_POST["name"]) && !empty($_POST["race"]) && !empty($_POST["age"]) && !empty($_POST["height"])){
            $data = array(
                'name' => $_POST['name'],
                'race' => $_POST['race'],
				'age' => $_POST['age'],
				'height' => $_POST['height']
            );
            $valid = true;
        }
    
        if($valid){
            createHorse($data);
            header('Location: index');
            exit;
        }

    }

	$horses = getAllHorses();
	render("home/index",
		['horses' => $horses, 'nameErr' => $nameErr, 'raceErr' => $raceErr, 'ageErr' => $ageErr, 'heightErr' => $heightErr]);
}

function deleteHorse($id){

    $horse = getHorse($id);
    render('home/deletehorse', ['horse' => $horse]);
}

function destroyHorse($id){
    deleteHorseById($id);
    $horses = getAllHorses();
    render('home/index', ['horses' => $horses]);
}

// VANAF HIER ALLES VOOR RESERVERINGEN

function createReservation(){
    $horses = getAllHorses();
    $customers = getAllCustomers();
    render("home/createreservation", ['horses' => $horses, 'customers' => $customers]);
}

function storeReservation(){
    $data = array(
        'customer_id' => $_POST['customer_id'],
        'horse_id' => $_POST['horse_id'],
    );
    createReser($data);

    $horses = getAllHorses();
    render("home/index", ['horses' => $horses]);
}

function reservations(){
	render("home/reservations", array(
		'reservations' => getAllReservations()
	));
}