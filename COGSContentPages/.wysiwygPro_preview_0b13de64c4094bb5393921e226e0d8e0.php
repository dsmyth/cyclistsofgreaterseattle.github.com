<?php
if ($_GET['randomId'] != "jouvHFllCuW1Q0BiHYLxIZXk_Pm6KYTJ7QlDmQ1s9NNkLympZIoFUD501iM08FXh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
