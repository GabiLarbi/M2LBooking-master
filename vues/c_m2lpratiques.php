<?php

if(!isset($_REQUEST['action'])){

    $_REQUEST['action'] = 'presentation';
}

$action = $_REQUEST['action'];

switch($action){

    case 'presentation':{

        include("vues/v_presentation.php");
        break;
    }

    case 'locaux':{

        include("vues/v_locaux.php");
        break;
    }

    case 'telecommunications':{

        include("vues/v_telecommunications.php");
        break;
    }
    case 'communications':{

        include("vues/v_communications.php");
        break;
    }
    case 'Modalités d\'accès':{

        include("vues/v_modalitésAccès.php");
        break;
    }
    case 'Services informatiques':{

        include("vues/v_serviceInfo.php");
        break;
    }

}
?>