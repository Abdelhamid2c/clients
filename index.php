<?php
 require_once "controller/list_clients_controller.php";
 

 if(isset($_GET['page']) || $_POST['page']){
    if(isset($_GET['page']))
         $page = $_GET['page'];
    else if(isse&t($_POST['page']))
        $page = $_POST['page']; 

    switch($page){
        case 'create':
            createClientController();
            break;
        case 'list':
            listeClientController();
            break;
        case 'store':
            ajouterClientController();
            break;
        case 'updated':
            editedController();
            break;
        case 'edit':
            editController();
            break;
        case 'delete':
            deleteController();
            break;
        case 'destroy':
            deletedController();
            break;

            
    }
}

