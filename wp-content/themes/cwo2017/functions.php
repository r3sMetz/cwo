<?php
    //Constants
    require('includes/constants.php');

    //Global Helpers
    require('includes/helper/global_helper.php');
    require('includes/helper/helper_front-page.php');

    //Special Helpers
    require('includes/helper/helper_events.php');
    require('includes/helper/helper-page-bilder.php');

    //Ajax
    require('includes/ajax/ajax_contact.php');

    //AdminPanel
    require('includes/admin_hides.php');
    //require('includes/admin_hooks.php');

    //Menues
    require('includes/menues.php');

    //Posttypes
    require('includes/post_types/veranstaltungen.php');
    require('includes/post_types/galerien.php');
    require('includes/post_types/mitglieder.php');

    //Theme Setup
    require('includes/theme-setup.php');


