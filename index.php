<?php


switch (@$_GET['page']) {
    case "about":
        include("about.php");
        break;
    case "contact":
        include("contact.php");
        break;
    default:
        include("main.php");
}

