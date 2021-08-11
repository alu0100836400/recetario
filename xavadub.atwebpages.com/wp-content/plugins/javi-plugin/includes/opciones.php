<?php
    function javi_menu_admin() {
        add_menu_page("Plugin Javi", "Javi", "manage_options", JAVI_RUTA."/admin/configuracion.php");
        add_submenu_page(JAVI_RUTA."/admin/configuracion.php", 'Ejemplo submenu', 'Ejemplo sublat', 'manage_options', "/admin/ejemplo-submenu.php");
    }
    add_action("admin_menu", "javi_menu_admin");
?>