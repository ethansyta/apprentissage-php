<?php
$action = (int)readline('entrez votre action : (1: attaquer, 2: defendre, 3: ne rien faire)');

switch($action){
    case 1:
        echo 'j\'attaque!';
        break;
    case 2:
        echo 'je defends';
        break;
    case 3:
        echo 'je ne fais rien';
        break;
    default:
        echo 'commande incorrecte';
}
?>