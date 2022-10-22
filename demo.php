

<?php
$action = (int)readline('entrez votre action : (1: manger, 2: bouger , 3: marchez)');

switch($action){
    case 1:
        echo 'manger';
        break;
    
    case 2:
        echo 'bouger';
        break;

    case 3:
        echo 'marchez';
        break;
    
    default:
        echo 'mauvaise commande';
}

?>