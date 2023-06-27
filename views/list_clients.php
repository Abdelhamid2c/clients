<?php 
$title = "liste des clients";
ob_start();
?>

<a class = "btn btn-primary" href="index.php?page=create" role = "button">New client</a>
        <br>
        <table class = "table">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Adress</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                    // read data 
                    if($clients !=NULL)
                    {
                        foreach($clients as $client){
                        echo " 
                        <tr>
                        <td>$client[id]</td>
                        <td>$client[name]</td>
                        <td>$client[email]</td>
                        <td>$client[phone]</td>
                        <td>$client[adresse]</td>
                        <td>$client[created_at]</td>
                        <td>
                            <a class='btn  btn-primary btn-sm' href = 'index.php?page=edit&id=$client[id]'>Edit</a>
                            <a class = 'btn btn-danger btn-sm' href = 'index.php?page=delete&id=$client[id]'>Delete</a>
                        </td>
                        </tr>
                        " ;
}
                    }

                ?>

            </tbody>

        </table>
            
    
    </div>
    
    <?php
        $container = ob_get_clean();
        include_once "views/layout.php"; 
    ?>
    