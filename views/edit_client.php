<?php
$title = "Modify client";
ob_start();
?>
     <div class="container my-5">
        <form method = "POST" action = "index.php?page=updated" >
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
                    <input type="text" class = "form-control" name="email" value = "<?php echo $email ?>" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class = "col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="phone" value = "<?php echo $phone ?>" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="adresse" class = "col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-6">
                    <input type="text" class = "form-control" name="adresse" value = "<?php echo $adresse ?>" >
                </div>
            </div>

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
include_once 'views/layout.php';