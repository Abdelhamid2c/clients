<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";
    $connection = new mysqli($servername, $username, $password, $database);


    $id = "";
    $name = $email = $adresse = $phone = "" ;
    $errMessage = "" ;
    $successMessage = "";

    if($_SERVER["REQUEST_METHOD"] == "GET"){

        if(!isset($_GET["id"])){
            header("Location: /MYSHOP/index.php");
            exit;
        }
        $id = $_GET["id"];

        // read the row of the selected client from database table

        $sql = "SELECT * FROM clientsshop WHERE id=$id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if(!$row){
            header("Location: /MYSHOP/index.php");
            exit;
        }
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $adresse = $row["adresse"];
    }else{
        $id = $_POST["id"];	
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $adresse = $_POST["adresse"];

        do{
            if(empty($name) || empty($adresse) || empty($phone) || empty($adresse) ){
                $errMessage = "toutes les champs sont obligatoire .";
                break;
            }

            $sql = "UPDATE clientsshop ".
                   " SET name = '$name', email = '$email', phone = '$phone'".
                   " WHERE id = '$id'";

            $result = $connection->query($sql);
            if(!$result){
                $errMessage = "connection failed : " . $connection->error;
                break;
            }
            $successMessage = "Client update correctly";

            header("Location: /MYSHOP/index.php");
            exit;
        }while(false);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src = "	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
</head>
<body>
     <div class="container my-5">
        <h2>Modify client</h2>
        <?php
            if(!empty($errMessage) && empty($successMessage)){
                echo "<div class = 'alert alert-warning-dismissible fade show' role = 'alert'>
                    <strong>$errMessage</strong>
                    <button type = 'button' class = 'btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                </div> 
                " ;
            }
        ?>
        <form method = "POST" >
            <input type="hidden" name = "id" value = "<?php echo $id;?>">
            <div class="row mb-3">
                <label for="name" class = "col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="name" value="<?php echo $name ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class = "col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="email" value="<?php echo $email?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class = "col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="phone" value="<?php echo $phone ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="adresse" class = "col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="adresse" value="<?php echo $adresse ?>">
                </div>
            </div>

            <?php
                if(!empty($successMessage) && empty($errorMessage)){
                    echo "<div class = 'row mb-3'>
                        <div class = 'ofsset-sm-3 col-sm-6'>
                            <div class = 'alert alert-success alert-dismissible fade show' role = 'alert'>
                                <strong>$successMessage</strong>
                                <button type = 'button' class='btn-close' data-bs-dismiss = 'alert' aria-label></button>
                            </div>
                        </div>
                    </div>
                    ";
                }

            ?>

            </div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                </div>
                <div class=" col-sm-3 d-grid">
                    <a class="btn btn-outlined-primary" href="/MYSHOP/index.php" role ="button">Cancel</a>
                </div>
            </div>
        </form>
     </div>
</body>
</html>