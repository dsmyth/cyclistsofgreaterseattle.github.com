<?php
if ($_GET['randomId'] != "GFOxA8P2uo1RbTc4CVidCQUdAOYSwMHyl9iKrSDg_o9IbIyihj7ITSNQdQmAaApz") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
