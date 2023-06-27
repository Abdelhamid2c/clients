<?php 
require_once "model/client.php";

function listeClientController(){
    $clients = lister();
    require_once "views/list_clients.php";
}

function createClientController(){
    require_once "views/create_client.php";
}

function ajouterClientController(){
    $isCreated = create();
    header("location:index.php?page=list");
}
function deleteController(){
    $id = $_GET['id'];
    require_once "views/delete_client.php";
}

function deletedController(){
    destroy($_GET['id']);
    header("location:index.php?page=list");
}

function editController(){
    $id = $_GET['id'];
    $clients = clientId($id);
    $name = $clients['name'];
    $adresse = $clients['adresse'];
    $email = $clients['email'];
    $phone = $clients['phone'];
    require_once "views/edit_client.php";
}

function editedController(){
    extract($_POST);
    update($id, $name, $adresse, $email, $phone);
    header("location:index.php?page=list");
}

?>