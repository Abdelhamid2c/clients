<?php 
$title = "ajouter un client";
ob_start();
?>

     <div class="container my-5">
        <h2>New client</h2>
        <br>
        <?php
            // msg error
        ?>
        <form action = "index.php?page=store" method = "POST" >
            <div class="row mb-3">
                <label for="name" class = "col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="name" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class = "col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="email" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class = "col-sm-3 col-form-label" >Phone</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="phone" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="adresse" class = "col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="adresse" >
                </div>
            </div>

            <?php
              //success msg

            ?>

            </div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                </div>
                <div class=" col-sm-3 d-grid">
                    <a class="btn btn-outlined-primary" href="index.php?page=list" role ="button">Cancel</a>
                </div>
            </div>
        </form>
     </div>

<?php
        $container = ob_get_clean();
        include_once "views/layout.php"; 
?>