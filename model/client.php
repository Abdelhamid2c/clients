<?php 

function connect_to_database() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";
    $connection = new mysqli($servername, $username, $password, $database);
    if($connection->connect_error){
        die("connection failed : " . $connection->connect_error);
        
    }  
    return $connection;                   
}

function lister(){
    $connection = connect_to_database();
    $sql = "SELECT * FROM clientsshop";
    $result = $connection->query($sql);
    // chek if result is successful
    if(!$result){
        die("no result : " . $connection->connect_error);
    }

    return $result ;
}

function create(){
    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $connection = connect_to_database();
    $sql = "INSERT INTO clientsshop (name, adresse,email,phone)"." VALUES ('$name', '$adresse', '$email', '$phone')";
    $result = $connection->query($sql);

    return $result;
}



function destroy($id){
    $connection = connect_to_database();
    $sql = "DELETE from clientsshop where id = $id";
    return $connection->query($sql);
}

function update($id, $name, $adresse, $email, $phone){
    $connection = connect_to_database();
    $sql = "UPDATE clientsshop SET name = '$name', adresse = '$adresse' , email = '$email', phone = '$phone' WHERE id = $id ";
    $connection->query($sql);
}

function clientId($id){
    $connection = connect_to_database();
    $sql = "SELECT * FROM clientsshop WHERE id=$id";
    $result = $connection->query($sql);
    return  $result->fetch_assoc();
}

?>