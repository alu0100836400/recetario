<?php
    if (!defined('WP_UNINSTALL_PLUGIN')) { //solo se desinstala si lo está ejecutando wp
        die;
    }

    delete_option("mi_opcion");
    delete_site_option("mi_opcion"); //para multisitios
?>