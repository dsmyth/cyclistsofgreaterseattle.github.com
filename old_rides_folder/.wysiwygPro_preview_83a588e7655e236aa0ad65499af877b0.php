<?php
if ($_GET['randomId'] != "T_iSaBq2r60N5FjV4O8ptuKNNpRHGYyzw6v_JLvInEL5t9nmDZZQuEG04eiYvdIR") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
